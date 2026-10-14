<?php

namespace App\Controller\Admin;

use App\Entity\Musicien;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class MusicienCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Musicien::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Musiciens')
            ->setEntityLabelInSingular('Musicien')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_MUSICIEN_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_MUSICIEN_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_MUSICIEN_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_MUSICIEN_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_MUSICIEN_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nomScene')
            ->add('nom')
            ->add('prenom')
            ->add('nationalite')
            ->add('dateNaissance')
            ->add('etiquettes')
            ->add('etat')
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomScene')->setLabel("Nom de scène"),
            TextField::new('nom')->setLabel("Nom"),
            TextField::new('prenom')->setLabel("Prénom"),
            AssociationField::new('nationalite')->setLabel("Nationalité"),
            TextField::new('dateNaissance')->setLabel("Date de naissance")->onlyOnForms(),
            Field::new('imageFile')->setLabel("Image")->onlyOnForms()->setFormType(VichImageType::class),
            UrlField::new('lienImage')->setLabel('Lien')->onlyOnForms(),
            AssociationField::new('etiquettes')->setLabel("Étiquettes")->onlyOnForms(),
            AssociationField::new('etat')->setLabel("État"),
        ];
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-musicien');
    }
}
