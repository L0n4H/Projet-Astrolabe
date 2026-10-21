<?php

namespace App\Controller\Admin;

use App\Entity\Etiquette;
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

class EtiquetteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etiquette::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Étiquettes')
            ->setEntityLabelInSingular('Étiquette')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_ETIQUETTE_READ')
        ;
    }


    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_ETIQUETTE_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_ETIQUETTE_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_ETIQUETTE_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_ETIQUETTE_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('motsCles')
            ->add('etat');
        ;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('motsCles')->setLabel("Mot clé"),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
