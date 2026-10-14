<?php

namespace App\Controller\Admin;

use App\Entity\CategorieMusicale;
use App\Entity\Etat;
use App\Entity\Etiquette;
use App\Entity\Evenement;
use App\Entity\GenreMusical;
use App\Entity\Groupe;
use App\Entity\Instrument;
use App\Entity\Label;
use App\Entity\Lieu;
use App\Entity\Membre;
use App\Entity\Musicien;
use App\Entity\Nationalite;
use App\Entity\Passage;
use App\Entity\Ressource;
use App\Entity\Role;
use App\Entity\TypeEvenement;
use App\Entity\TypeRessource;
use App\Entity\User;
use App\Repository\RessourceRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="/build/images/logo-header.svg">')
            ->setFaviconPath('build/images/logo-astrolabe.svg')
            ;
    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()->addWebpackEncoreEntry('admin-indexcss')
                                        ->addWebpackEncoreEntry('admincss')
                                        ->addWebpackEncoreEntry('adminjs')
                                        ->addWebpackEncoreEntry('formRequired');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-house-user');
        yield MenuItem::linkToRoute('Accès au site', 'fa fa-home', 'home');
        yield MenuItem::linkToRoute('Création d\'événement', 'fa fa-sitemap', 'admin_workflow');
        yield MenuItem::linkToRoute('Données HEEDS', 'fa fa-database', 'extend_admin_data')->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToRoute('Notre API', 'fas fa-certificate', 'app.swagger_ui');
        if ( $this->isGranted('ROLE_EVENEMENT_READ') || $this->isGranted('ROLE_LIEU_READ')) {
            yield MenuItem::section('Événement');
            yield MenuItem::linkToCrud('Événement', 'fas fa-calendar-alt', Evenement::class)->setPermission('ROLE_EVENEMENT_READ');
            yield MenuItem::linkToCrud('Lieu', 'fas fa-map-marker-alt', Lieu::class)->setPermission('ROLE_LIEU_READ');
        }
        if ( 
            $this->isGranted('ROLE_GROUPE_READ') || 
            $this->isGranted('ROLE_LABEL_READ') || 
            $this->isGranted('ROLE_MUSICIEN_READ') ||
            $this->isGranted('ROLE_INSTRUMENT_READ') ||
            $this->isGranted('ROLE_NATIONALITE_READ')
            ) {
            yield MenuItem::section('Groupe');

            yield MenuItem::linkToCrud('Groupe de Musique', 'fas fa-compact-disc', Groupe::class)->setPermission('ROLE_GROUPE_READ');
            yield MenuItem::linkToCrud('Label musical', 'fas fa-podcast', Label::class)->setPermission('ROLE_LABEL_READ');
            yield MenuItem::linkToCrud('Musicien', 'fas fa-drum', Musicien::class)->setPermission('ROLE_MUSICIEN_READ');
            yield MenuItem::linkToCrud('Instrument', 'fas fa-guitar', Instrument::class)->setPermission('ROLE_INSTRUMENT_READ');
            yield MenuItem::linkToCrud('Nationalité', 'fas fa-flag', Nationalite::class)->setPermission('ROLE_NATIONALITE_READ');
        }
        if ( $this->isGranted('ROLE_GENRE_READ') || $this->isGranted('ROLE_CATEGORIE_READ')) {
            yield MenuItem::section('Musique');
            yield MenuItem::linkToCrud('Genre Musical', 'fas fa-music', GenreMusical::class)->setPermission('ROLE_GENRE_READ');
            yield MenuItem::linkToCrud('Catégories Musicales', 'fas fa-music', CategorieMusicale::class)->setPermission('ROLE_CATEGORIE_READ');
        }
        if ( $this->isGranted('ROLE_RESSOURCES_READ') ) {
            yield MenuItem::section('Ressources');
            yield MenuItem::linkToCrud('Médias', 'fas fa-photo-video', Ressource::class)->setPermission('ROLE_RESSOURCES_READ');
        }
        if ( $this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_ETIQUETTE_READ') || $this->isGranted('ROLE_ETIQUETTE_READ')) {
            yield MenuItem::section('Administration');
            yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class)->setPermission('ROLE_ADMIN');
            yield MenuItem::linkToCrud('Type d\'événement', 'fas fa-location-arrow', TypeEvenement::class)->setPermission('ROLE_TYPEEVENT_READ');
            yield MenuItem::linkToCrud('Étiquette', 'fas fa-tags', Etiquette::class)->setPermission('ROLE_ETIQUETTE_READ');
        }
    }
}
