<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;


class UserCrudController extends AbstractCrudController
{
    private array $roles = [
        "Utilisateur" => "ROLE_USER",
        "Accès Backend" => "ROLE_EASYADMIN",
        "Éditeur" => "ROLE_EDITEUR",
        "Administrateur" => "ROLE_ADMIN",
        "Événements : Lecture" => "ROLE_EVENEMENT_READ",
        "Événements : Ajout" => "ROLE_EVENEMENT_WRITE",
        "Événements : Édition" => "ROLE_EVENEMENT_EDIT",
        "Événements : Suppression" => "ROLE_EVENEMENT_DELETE",
        "Lieux : Lecture" => "ROLE_LIEU_READ",
        "Lieux : Ajout" => "ROLE_LIEU_WRITE",
        "Lieux : Édition" => "ROLE_LIEU_EDIT",
        "Lieux : Suppression" => "ROLE_LIEU_DELETE",
        "Groupes : Lecture" => "ROLE_GROUPE_READ",
        "Groupes : Ajout" => "ROLE_GROUPE_WRITE",
        "Groupes : Édition" => "ROLE_GROUPE_EDIT",
        "Groupes : Suppression" => "ROLE_GROUPE_DELETE",
        "Labels : Lecture" => "ROLE_LABEL_READ",
        "Labels : Ajout" => "ROLE_LABEL_WRITE",
        "Labels : Édition" => "ROLE_LABEL_EDIT",
        "Labels : Suppression" => "ROLE_LABEL_DELETE",
        "Musiciens : Lecture" => "ROLE_MUSICIEN_READ",
        "Musiciens : Ajout" => "ROLE_MUSICIEN_WRITE",
        "Musiciens : Édition" => "ROLE_MUSICIEN_EDIT",
        "Musiciens : Suppression" => "ROLE_MUSICIEN_DELETE",
        "Instruments : Lecture" => "ROLE_INSTRUMENT_READ",
        "Instruments : Ajout" => "ROLE_INSTRUMENT_WRITE",
        "Instruments : Édition" => "ROLE_INSTRUMENT_EDIT",
        "Instruments : Suppression" => "ROLE_INSTRUMENT_DELETE",
        "Nationalités : Lecture" => "ROLE_NATIONALITE_READ",
        "Nationalités : Ajout" => "ROLE_NATIONALITE_WRITE",
        "Nationalités : Édition" => "ROLE_NATIONALITE_EDIT",
        "Nationalités : Suppression" => "ROLE_NATIONALITE_DELETE",
        "Genres musicaux : Lecture" => "ROLE_GENRE_READ",
        "Genres musicaux : Ajout" => "ROLE_GENRE_WRITE",
        "Genres musicaux : Édition" => "ROLE_GENRE_EDIT",
        "Genres musicaux : Suppression" => "ROLE_GENRE_DELETE",
        "Catégories musicales : Lecture" => "ROLE_CATEGORIE_READ",
        "Catégories musicales : Ajout" => "ROLE_CATEGORIE_WRITE",
        "Catégories musicales : Édition" => "ROLE_CATEGORIE_EDIT",
        "Catégories musicales : Suppression" => "ROLE_CATEGORIE_DELETE",
        "Ressources : Lecture" => "ROLE_RESSOURCES_READ",
        "Ressources : Ajout" => "ROLE_RESSOURCES_WRITE",
        "Ressources : Édition" => "ROLE_RESSOURCES_EDIT",
        "Ressources : Suppression" => "ROLE_RESSOURCES_DELETE",
        "Étiquettes : Lecture" => "ROLE_ETIQUETTE_READ",
        "Étiquettes : Ajout" => "ROLE_ETIQUETTE_WRITE",
        "Étiquettes : Édition" => "ROLE_ETIQUETTE_EDIT",
        "Étiquettes : Suppression" => "ROLE_ETIQUETTE_DELETE",
        "Types d'événement : Lecture" => "ROLE_TYPEEVENT_READ",
        "Types d'événement : Ajout" => "ROLE_TYPEEVENT_WRITE",
        "Types d'événement : Édition" => "ROLE_TYPEEVENT_EDIT",
        "Types d'événement : Suppression" => "ROLE_TYPEEVENT_DELETE",
    ];

    public static function getEntityFqcn(): string
    {
        return User::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Utilisateurs')
            ->setEntityLabelInSingular('Utilisateur')
            ->setPaginatorPageSize(25)
            ->overrideTemplate('crud/edit', 'admin/user_edit.html.twig')
            ->overrideTemplate('crud/new', 'admin/user_add.html.twig')
            ->setEntityPermission('ROLE_ADMIN')
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('username')
            ->add('roles')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username')->setLabel('Nom d\'utilisateur'),
            EmailField::new('email')->setLabel('Email')
                                    ->setFormType(EmailType::class)
                                    ->setRequired(true),
            ChoiceField::new('roles')->setLabel('Rôles')
                                    ->allowMultipleChoices()
                                    ->setChoices($this->roles)
                                    ->onlyOnForms()
                                    ->renderExpanded(),
            TextField::new('plainPassword')->setLabel('Mot de passe')
                                            ->setFormType(PasswordType::class)
                                            ->onlyOnForms()
                                            ->onlyWhenUpdating()
                                            ->setRequired(false),
            TextField::new('plainPassword')->setLabel('Mot de passe')
                                            ->setFormType(PasswordType::class)
                                            ->onlyOnForms()
                                            ->onlyWhenCreating()
                                            ->setRequired(true),
        ];
    }
}
