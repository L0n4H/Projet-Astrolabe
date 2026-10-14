<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use App\Form\PassageType;
use App\Form\RessourceType;
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
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EvenementCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Evenement::class;
    }
    
    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('select2css')->addWebpackEncoreEntry('admin-evenement');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Événements')
            ->setEntityLabelInSingular('Événement')
            ->setPaginatorPageSize(25)
            ->overrideTemplate('crud/edit', 'admin/evenement_edit.html.twig')
            ->overrideTemplate('crud/new', 'admin/evenement_add.html.twig')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setEntityPermission('ROLE_EVENEMENT_READ')
            ->setDateTimeFormat('Y-MM-dd HH:mm')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_EVENEMENT_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_EVENEMENT_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_EVENEMENT_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_EVENEMENT_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre')
            ->add('typeEvenement')
            ->add('genresMusicaux')
            ->add('lieu')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('etiquettes')
            ->add('passages')
            ->add('etat')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre')->setLabel("Titre"),
            AssociationField::new('lieu')->setLabel("Lieu")->setRequired(true),
            DateTimeField::new('dateDebut')->setLabel("Date début"),
            DateTimeField::new('dateFin')->setLabel("Date fin"),
            AssociationField::new('typeEvenement')->setLabel("Type"),
            Field::new('imageFile')->setLabel("Image")->onlyOnForms()->setFormType(VichImageType::class),
            UrlField::new('lienImage')->setLabel('Lien')->onlyOnForms(),
            CollectionField::new('passages')->setLabel("Passages")->onlyOnForms()->setEntryType(PassageType::class)->setEntryIsComplex(true),
            AssociationField::new('genresMusicaux')->setLabel("Genres Musicaux")->onlyOnForms(),
            CollectionField::new('ressources')->setLabel("Ressources")->onlyOnForms()->setEntryType(RessourceType::class)->setEntryIsComplex(true),
            AssociationField::new('etiquettes')->setLabel("Étiquettes")->onlyOnForms(),
            AssociationField::new('etat')->setLabel("État"),
            TextareaField::new('description')->setLabel("Description")->onlyOnForms()->setFormType(CKEditorType::class),
        ];
    }
}
