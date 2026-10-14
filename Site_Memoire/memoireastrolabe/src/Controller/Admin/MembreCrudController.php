<?php

namespace App\Controller\Admin;

use App\Entity\Membre;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class MembreCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Membre::class;
    }
    
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('groupe')
            ->add('musicien')
            ->add('instruments')
            ->add('etat')
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('groupe')->setLabel("Groupe"),
            AssociationField::new('musicien')->setLabel("Musicien"),
            AssociationField::new('instruments')->setLabel("Instruments"),
            BooleanField::new('actif')->setLabel("Actif"),
        ];
    }
}
