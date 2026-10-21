<?php

namespace App\Controller\Admin;

use App\Entity\Nationalite;
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

class NationaliteCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Nationalite::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Nationalités')
            ->setEntityLabelInSingular('Nationalité')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_NATIONALITE_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_NATIONALITE_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_NATIONALITE_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_NATIONALITE_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_NATIONALITE_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('etat')
        ;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom')->setLabel("Nom"),
            TextField::new('codeISO')->setLabel("Code ISO 2"),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
