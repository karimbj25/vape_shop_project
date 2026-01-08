<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[IsGranted('ROLE_ADMIN')]
class UserCrudController extends AbstractCrudController
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')->hideOnForm(),
            EmailField::new('email'),
            TextField::new('firstName'),
            TextField::new('lastName'),
            ChoiceField::new('roles')
                ->setChoices([
                    'Admin' => 'ROLE_ADMIN',
                    'Sales Manager' => 'ROLE_VENTE',
                    'User' => 'ROLE_USER',
                ])
                ->allowMultipleChoices(),
        ];

        // Add plain password field for new/edit
        if ($pageName === 'new' || $pageName === 'edit') {
            $fields[] = TextField::new('plainPassword', 'Password')
                ->setFormType(\Symfony\Component\Form\Extension\Core\Type\PasswordType::class)
                ->setFormTypeOption('mapped', false)
                ->setRequired($pageName === 'new')
                ->setHelp('Enter password (will be hashed automatically)');
        }

        return $fields;
    }

    public function persistEntity(\Doctrine\ORM\EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof \App\Entity\User) {
            parent::persistEntity($entityManager, $entityInstance);
            return;
        }

        // Get plain password from request
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $plainPassword = $request->request->all()['User']['plainPassword'] ?? null;

        if ($plainPassword && !empty(trim($plainPassword))) {
            $hashedPassword = $this->passwordHasher->hashPassword($entityInstance, $plainPassword);
            $entityInstance->setPassword($hashedPassword);
        } else {
            throw new \RuntimeException('Password is required for new users');
        }

        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(\Doctrine\ORM\EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof \App\Entity\User) {
            parent::updateEntity($entityManager, $entityInstance);
            return;
        }

        // Get plain password from request
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $plainPassword = $request->request->all()['User']['plainPassword'] ?? null;

        // Only update password if a new one was provided
        if ($plainPassword && !empty(trim($plainPassword))) {
            $hashedPassword = $this->passwordHasher->hashPassword($entityInstance, $plainPassword);
            $entityInstance->setPassword($hashedPassword);
        }

        parent::updateEntity($entityManager, $entityInstance);
    }
}
