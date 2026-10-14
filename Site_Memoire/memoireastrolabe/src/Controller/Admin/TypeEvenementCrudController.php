<?php

namespace App\Controller\Admin;

use App\Entity\TypeEvenement;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypeEvenementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeEvenement::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Types d\'événements')
            ->setEntityLabelInSingular('Type d\'événement')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_TYPEEVENT_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_TYPEEVENT_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_TYPEEVENT_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_TYPEEVENT_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_TYPEEVENT_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('label')
            ->add('etat')
        ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-typeEvenementjs');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('label')->setLabel("Label"),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
