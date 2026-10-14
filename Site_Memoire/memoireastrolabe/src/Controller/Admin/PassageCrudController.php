<?php

namespace App\Controller\Admin;

use App\Entity\Passage;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class PassageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Passage::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('evenement')
            ->add('groupe')
            ->add('dateDebut')
            ->add('dateFin')
        ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDateTimeFormat('d-m-Y', 'H:i')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('evenement')->setLabel("Événement"),
            AssociationField::new('groupe')->setLabel("Groupe"),
            DateTimeField::new('dateDebut')->setLabel("Date/Heure de début"),
            DateTimeField::new('dateFin')->setLabel("Date/Heure de fin"),
        ];
    }
}
