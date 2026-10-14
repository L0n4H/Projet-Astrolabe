<?php

namespace App\Controller\Admin;

use App\Entity\CategorieMusicale;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieMusicaleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategorieMusicale::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Catégories Musicales')
            ->setEntityLabelInSingular('Catégorie Musicale')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_CATEGORIE_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_CATEGORIE_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_CATEGORIE_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_CATEGORIE_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_CATEGORIE_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('genresMusicaux')
        ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-categorieMusicaljs');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom')->setLabel("Nom"),
            AssociationField::new('categoriePrincipale')->setLabel("Catégorie Principale")->setRequired(true),
            AssociationField::new('genresMusicaux')->setLabel("Genres musicaux")->onlyOnForms(),
            CollectionField::new('genresMusicaux')->setLabel("Genres musicaux")->onlyOnIndex(),
        ];
    }
}
