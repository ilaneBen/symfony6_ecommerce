<?php

namespace App\Controller\Admin;

use App\Entity\Texmexs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TexmexsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Texmexs::class;
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
