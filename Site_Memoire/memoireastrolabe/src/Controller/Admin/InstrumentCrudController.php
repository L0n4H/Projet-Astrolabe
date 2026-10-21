<?php

namespace App\Controller\Admin;

use App\Entity\Instrument;
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

class InstrumentCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Instrument::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Instruments')
            ->setEntityLabelInSingular('Instrument')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_INSTRUMENT_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_INSTRUMENT_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_INSTRUMENT_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_INSTRUMENT_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_INSTRUMENT_DELETE')
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
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
