<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('slug')->hideOnIndex(),
            NumberField::new('price')
                ->setNumDecimals(3)
                ->formatValue(function ($value) {
                    return number_format($value, 3) . ' TND';
                }),
            NumberField::new('stock'),
            AssociationField::new('category'),
            TextField::new('image', 'Image URL')
                ->setHelp('Enter a valid URL or path (e.g. /uploads/products/image.png)'),
            // Alternatively, for real uploads we would use ImageField with upload dir
            // ImageField::new('image')->setUploadDir('public/uploads/images'),
            TextEditorField::new('description'),
        ];
    }
}
