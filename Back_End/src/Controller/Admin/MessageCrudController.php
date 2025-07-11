<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;

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
            ->disable(Action::NEW)
            ->add('index', Action::DETAIL);
    }
    public function createIndexQueryBuilder(
    SearchDto $searchDto,
    EntityDto $entityDto,
    FieldCollection $fields,
    FilterCollection $filters
): QueryBuilder {
    $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);

    // Ordre personnalisé : A_Traiter (1), Traité (2), A_Supprimer (3)
    $qb->addSelect(
        "(CASE
            WHEN entity.Statut_Message = 'A_Traiter' THEN 1
            WHEN entity.Statut_Message = 'Traité' THEN 2
            WHEN entity.Statut_Message = 'A_Supprimer' THEN 3
            ELSE 4
        END) AS HIDDEN statut_order"
    )
    ->orderBy('statut_order', 'ASC');

    return $qb;
}

}