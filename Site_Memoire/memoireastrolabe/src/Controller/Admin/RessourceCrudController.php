<?php

namespace App\Controller\Admin;

use App\Entity\Ressource;
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
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\ChoiceFilter;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RessourceCrudController extends AbstractCrudController
{    
    private AdminUrlGenerator $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    public static function getEntityFqcn(): string
    {
        return Ressource::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Ressources')
            ->setEntityLabelInSingular('Ressource')
            ->setPaginatorPageSize(25)
            ->overrideTemplate('crud/edit', 'admin/ressource_edit.html.twig')
            ->overrideTemplate('crud/new', 'admin/ressource_add.html.twig')
            ->setEntityPermission('ROLE_RESSOURCES_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_RESSOURCES_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_RESSOURCES_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_RESSOURCES_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_RESSOURCES_DELETE')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre')
            ->add('etat')
            ->add('lien')
            ->add('etiquettes')
            ->add('type')
        ;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets->addWebpackEncoreEntry('admin-ressource')
            ->addWebpackEncoreEntry('dropify')
            ->addWebpackEncoreEntry('dropifycss');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre')->setLabel("Nom")->setRequired(true),
            UrlField::new('lien')->setLabel("Lien"),
            Field::new('file')->setLabel("Fichier")->onlyOnForms()->setFormType(VichImageType::class),
            CollectionField::new('evenements')->setLabel("Événement(s)")->formatValue(function($value, $entity){
                $evenements = $entity->getEvenements();
                if ( count($evenements) != 0 )
                {
                    $str = $this->getEvenementLink($evenements[0]);
                    for ( $i = 1; $i < count($evenements); $i++ )
                    {
                        $str .= ", " . $this->getEvenementLink($evenements[$i]);
                    }
                    return $str;
                }
            })->hideOnForm(),
            AssociationField::new('evenements')->setLabel("Événement(s)")->onlyOnForms(),
            AssociationField::new('type')->setLabel("Type")->setRequired(true),
            AssociationField::new('etiquettes')->setLabel("Étiquettes")->onlyOnForms(),
            AssociationField::new('etat')->setLabel("État"),
            TextField::new('credits')->setLabel('Crédits')
        ];
    }

    private function getEvenementLink($evenement) : string
    {
        $ea_url = $this->adminUrlGenerator->setController(EvenementCrudController::class)->setAction(Action::DETAIL)->setEntityId($evenement->getId())->generateUrl();
        return "<a href='$ea_url' target='_blank'> " . $evenement . "</a>";
    }
}
