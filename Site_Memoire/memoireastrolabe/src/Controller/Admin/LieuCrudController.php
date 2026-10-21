<?php

namespace App\Controller\Admin;

use App\Entity\Lieu;
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

class LieuCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Lieu::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Lieux')
            ->setEntityLabelInSingular('Lieu')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_LIEU_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_LIEU_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_LIEU_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_LIEU_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_LIEU_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('CP')
            ->add('ville')
            ->add('nomBatiment')
            ->add('adresse')
            ->add('etat')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('CP')->setLabel("Code Postal"),
            TextField::new('ville')->setLabel("Ville"),
            TextField::new('nomBatiment')->setLabel("Nom du bâtiment"),
            TextField::new('adresse')->setLabel("Adresse"),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
