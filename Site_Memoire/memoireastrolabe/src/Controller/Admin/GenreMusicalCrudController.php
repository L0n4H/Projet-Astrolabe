<?php

namespace App\Controller\Admin;

use App\Entity\GenreMusical;
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

class GenreMusicalCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return GenreMusical::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Genres Musicaux')
            ->setEntityLabelInSingular('Genre Musical')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_GENRE_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_GENRE_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_GENRE_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_GENRE_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_GENRE_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('etat')
        ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-genreMusicaljs');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }
}
