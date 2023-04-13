<?php

namespace App\Controller\Admin;

use App\Entity\Sandwichs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SandwichsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sandwichs::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
