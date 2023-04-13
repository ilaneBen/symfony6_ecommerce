<?php

namespace App\Controller\Admin;

use App\Entity\Burgers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BurgersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Burgers::class;
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
