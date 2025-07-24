<?php

namespace App\Controller\Admin;

use App\Entity\Contenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;


class ContenuCrudController extends AbstractCrudController
{    public static function getEntityFqcn(): string
    {
        return Contenu::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('Adresse_image_Contenu', 'Adresse Image Contenu'),
            TextField::new('Description_Contenu', 'Description'),
            TextField::new('Contenu_texte_Contenu', 'Texte du Contenu'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE)
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
