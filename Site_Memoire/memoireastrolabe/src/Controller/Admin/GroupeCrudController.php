<?php

namespace App\Controller\Admin;

use App\Entity\Groupe;
use App\Entity\Membre;
use App\Form\MembreType;
use App\Form\MusicienType;
use App\Form\RessourceType;
use App\Repository\InstrumentRepository;
use App\Repository\MembreRepository;
use App\Repository\MusicienRepository;
use App\Repository\RessourceRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class GroupeCrudController extends AbstractCrudController
{   
    private AdminUrlGenerator $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    public static function getEntityFqcn(): string
    {
        return Groupe::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Groupes')
            ->setEntityLabelInSingular('Groupe')
            ->setPaginatorPageSize(25)
            ->overrideTemplate('crud/edit', 'admin/groupe_edit.html.twig')
            ->overrideTemplate('crud/new', 'admin/groupe_add.html.twig')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setEntityPermission('ROLE_GROUPE_READ')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->setPermission(Action::NEW, 'ROLE_GROUPE_WRITE')
                       ->setPermission(Action::EDIT, 'ROLE_GROUPE_EDIT')
                       ->setPermission(Action::DELETE, 'ROLE_GROUPE_DELETE')
                       ->setPermission(Action::BATCH_DELETE, 'ROLE_GROUPE_DELETE')
        ;
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('dateCreation')
            ->add('etiquettes')
            ->add('genresMusicaux')
            ->add('labels')
            ->add('nationalites')
            ->add('membres')
            ->add('etat')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom')->setLabel("Nom"),
            TextField::new('dateCreation')->setLabel("Date de création"),
            AssociationField::new('nationalites')->setLabel("Nationalités")->setFormTypeOption('by_reference', false),
            Field::new('imageFile')->setLabel("Image")->onlyOnForms()->setFormType(VichImageType::class),
            UrlField::new('lienImage')->setLabel('Lien')->onlyOnForms(),
            AssociationField::new('genresMusicaux')->setLabel("Genres Musicaux")->onlyOnForms(),
            AssociationField::new('labels')->setLabel("Labels Musicaux")->onlyOnForms(),
            CollectionField::new('ressources')->setLabel("Ressources")->onlyOnForms()->setEntryType(RessourceType::class)->setEntryIsComplex(true),
            CollectionField::new('membres')->setLabel("Membres")->setEntryType(MembreType::class)->formatValue(function($value, $entity){
                $membres = $entity->getMembres();
                if ( count($membres) != 0 )
                {
                    $str = $this->getMusicienLinkFromMembre($membres[0]);
                    for ( $i = 1; $i < count($membres); $i++ )
                    {
                        $str .= ", " . $this->getMusicienLinkFromMembre($membres[$i]);
                    }
                    return $str;
                }
            }),
            AssociationField::new('etiquettes')->setLabel("Étiquettes")->onlyOnForms(),
            AssociationField::new('etat')->setLabel("État"),
            TextareaField::new('biographie')->setLabel("Biographie")->onlyOnForms()->setFormType(CKEditorType::class),
        ];
    }

    private function getMusicienLinkFromMembre($membre) : string
    {
        $ea_url = $this->adminUrlGenerator->setController(MusicienCrudController::class)->setAction(Action::DETAIL)->setEntityId($membre->getMusicien()->getId())->generateUrl();
        return "<a href='$ea_url' target='_blank'> " . $membre->getMusicien() . "</a>";
    }
}
