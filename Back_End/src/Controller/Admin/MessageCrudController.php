<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class MessageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Message::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            
ChoiceField::new('Statut_Message', 'Statut')
    ->setChoices([
        'À traiter' => 'A_Traiter',
        'Traité' => 'Traité',
        'À supprimer' => 'A_Supprimer',
    ])
    ->renderExpanded(false)
    ->renderAsBadges([
        'A_Traiter' => 'warning',
        'Traité' => 'success',
        'A_Supprimer' => 'danger',
    ]),

            TextField::new('Nom_Message', 'Nom'),
            TextField::new('Prenom_Message', 'Prenom'),
            TextField::new('Adresse_Message', 'Adresse'),
            TextField::new('Adresse_mail_Message', 'Adresse Mail'),
            TextField::new('Telephone_Message', 'Telephone'),
            TextareaField::new('Texte_Message', 'Message'),
        ];
    }
        public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW);
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