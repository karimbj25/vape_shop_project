<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public function configureActions(\EasyCorp\Bundle\EasyAdminBundle\Config\Actions $actions): \EasyCorp\Bundle\EasyAdminBundle\Config\Actions
    {
        return $actions
            ->add(\EasyCorp\Bundle\EasyAdminBundle\Config\Crud::PAGE_INDEX, \EasyCorp\Bundle\EasyAdminBundle\Config\Action::DETAIL)
            ->disable(\EasyCorp\Bundle\EasyAdminBundle\Config\Action::NEW);
    }

    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('user')
                ->setDisabled(),
            NumberField::new('totalPrice', 'Total Price')
                ->setNumDecimals(3)
                ->formatValue(function ($value) {
                    return number_format($value, 3) . ' TND';
                })
                ->setDisabled(),
            ChoiceField::new('status')
                ->setChoices([
                    'Pending' => 'PENDING',
                    'Paid' => 'PAID',
                    'Shipped' => 'SHIPPED',
                    'Delivered' => 'DELIVERED',
                ])
                ->renderAsBadges([
                    'PENDING' => 'warning',
                    'PAID' => 'info',
                    'SHIPPED' => 'primary',
                    'DELIVERED' => 'success',
                ]),
            TextField::new('createdAtFormatted', 'Order Date')
                ->hideOnForm(),
        ];
    }
}
