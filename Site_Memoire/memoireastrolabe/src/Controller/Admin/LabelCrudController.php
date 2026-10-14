<?php

namespace App\Controller\Admin;

use App\Entity\Label;
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
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class LabelCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Label::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Labels')
            ->setEntityLabelInSingular('Label')
            ->setPaginatorPageSize(25)
            ->setEntityPermission('ROLE_LABEL_READ')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_LABEL_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_LABEL_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_LABEL_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_LABEL_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('dateCreation')
            ->add('etat')
        ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-label');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom')->setLabel("Nom"),
            TextField::new('dateCreation')->setLabel("Date de création"),
            Field::new('logoFile')->setLabel("Logo")->onlyOnForms()->setFormType(VichImageType::class),
            UrlField::new('lienLogo')->setLabel('Lien')->onlyOnForms(),
            AssociationField::new('etat')->setLabel("État"),
            TextareaField::new('description')->setLabel("Description")->onlyOnForms()->setFormType(CKEditorType::class),
        ];
    }
}
