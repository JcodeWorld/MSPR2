<?php
namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bundle\SecurityBundle\Security;

class UserCrudController extends AbstractCrudController
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('email'),
            TextField::new('password'),
            TextField::new('Prenom'),
            TextField::new('Nom'),
            TextareaField::new('Adresse'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $user = $this->security->getUser(); 

 return $actions
        ->disable(Action::NEW, Action::DELETE)
        ->add('index', Action::DETAIL)
        

        ->update('index', Action::EDIT, function (Action $action) use ($user) {
            return $action->displayIf(fn ($entity) => $entity->getId() === $user->getId());
        })
        ->update('index', Action::DETAIL, function (Action $action) use ($user) {
            return $action->displayIf(fn ($entity) => $entity->getId() === $user->getId());
        });
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $user = $this->security->getUser(); 

        return parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters)
            ->andWhere('entity.id = :id')
            ->setParameter('id', $user->getId());
    }
}
