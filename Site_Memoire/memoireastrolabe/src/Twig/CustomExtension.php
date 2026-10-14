<?php 
// src/Twig/AppExtension.php
namespace App\Twig;

use App\Controller\Admin\EtiquetteCrudController;
use App\Controller\Admin\EvenementCrudController;
use App\Controller\Admin\GenreMusicalCrudController;
use App\Controller\Admin\GroupeCrudController;
use App\Controller\Admin\InstrumentCrudController;
use App\Controller\Admin\LabelCrudController;
use App\Controller\Admin\LieuCrudController;
use App\Controller\Admin\MusicienCrudController;
use App\Controller\Admin\NationaliteCrudController;
use App\Controller\Admin\RessourceCrudController;
use App\Controller\Admin\TypeEvenementCrudController;
use App\Entity\Etat;
use App\Entity\Etiquette;
use App\Entity\Evenement;
use App\Entity\GenreMusical;
use App\Entity\Groupe;
use App\Entity\Instrument;
use App\Entity\Label;
use App\Entity\Lieu;
use App\Entity\Musicien;
use App\Entity\Nationalite;
use App\Entity\Ressource;
use App\Entity\TypeEvenement;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Error;
use PHPUnit\Framework\CoveredCodeNotExecutedException;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CustomExtension extends AbstractExtension  
{
    private EntityManagerInterface $em;
    private AdminUrlGenerator $adminUrlGenerator;
    private $client;

    public function __construct(EntityManagerInterface $em, AdminUrlGenerator $adminUrlGenerator,HttpClientInterface $client)
    {
        $this->em = $em;
        $this->adminUrlGenerator = $adminUrlGenerator;
        $this->client = $client;
    }

    public function getFilters()
    {
        return array(
            new TwigFilter('unescape', array($this, 'unescape')),
        );
    }

    public function unescape($value)
    {
        return htmlspecialchars_decode(json_encode( $value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ));
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('nbEtatEnAttente', array($this, 'getNbEtatEnAttente')),
            new TwigFunction('getEntitiesByEtat', array($this, 'getEntitiesByEtat')),
            new TwigFunction('checkUrl', array($this,'checkUrl')),
        );
    }

    public function getNbEtatEnAttente()
    {
        return $this->em->getRepository(Etat::class)->getNbEtatEnAttente();
    }

    public function getEntitiesByEtat($id)
    {
        $res = array();
            
        $etiquettes = $this->em->getRepository(Etiquette::class)->findByEtat($id);
        if ( $etiquettes ) 
        {
            $res["Étiquette"] = [
                "lien" => $this->adminUrlGenerator->setController(EtiquetteCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $etiquettes,
            ];
        }

        $evenements = $this->em->getRepository(Evenement::class)->findByEtat($id);
        if ( $evenements )
        {
            $res["Événement"] = [
                "lien" => $this->adminUrlGenerator->setController(EvenementCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $evenements,
            ];
        }

        $genresMusicaux = $this->em->getRepository(GenreMusical::class)->findByEtat($id);
        if ( $genresMusicaux )
        {
            $res["Genre Musical"] = [
                "lien" => $this->adminUrlGenerator->setController(GenreMusicalCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $genresMusicaux,
            ];
        }

        $groupes = $this->em->getRepository(Groupe::class)->findByEtat($id);
        if ( $groupes )
        {
            $res["Groupe"] = [
                "lien" => $this->adminUrlGenerator->setController(GroupeCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $groupes,
            ];
        }

        $instruments = $this->em->getRepository(Instrument::class)->findByEtat($id);
        if ( $instruments )
        {
            $res["Instrument"] = [
                "lien" => $this->adminUrlGenerator->setController(InstrumentCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $instruments
            ];
        }
        
        $labels = $this->em->getRepository(Label::class)->findByEtat($id);
        if ( $labels )
        {
            $res["Label"] = [
                "lien" => $this->adminUrlGenerator->setController(LabelCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $labels
            ];
        }

        $lieux = $this->em->getRepository(Lieu::class)->findByEtat($id);
        if ( $lieux )
        {
            $res["Lieu"] = [
                "lien" => $this->adminUrlGenerator->setController(LieuCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $lieux
            ];
        }

        $musiciens = $this->em->getRepository(Musicien::class)->findByEtat($id);
        if ( $musiciens )
        {
            $res["Musicien"] = [
                "lien" => $this->adminUrlGenerator->setController(MusicienCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $musiciens,
            ];
        }


        $nationalites = $this->em->getRepository(Nationalite::class)->findByEtat($id);
        if ( $nationalites )
        {
            $res["Nationalité"] = [
                "lien" => $this->adminUrlGenerator->setController(NationaliteCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $nationalites,
            ];
        }

        $ressources = $this->em->getRepository(Ressource::class)->findByEtat($id);
        if ( $ressources )
        {
            $res["Médias"] = [
                "lien" => $this->adminUrlGenerator->setController(RessourceCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $ressources,
            ];
        }

        $typesEvent = $this->em->getRepository(TypeEvenement::class)->findByEtat($id);
        if ( $typesEvent )
        {
            $res["Type d'événement"] = [
                "lien" => $this->adminUrlGenerator->setController(TypeEvenementCrudController::class)->setAction('index')->setAll(array('filters[etat][comparison]' => '=','filters[etat][value]' => $id))->generateUrl(),
                "entities" => $typesEvent,
            ];
        }
        
        return $res;
    }

    public function estValide($lien)
    {
        try
        {
            $response = $this->client->request(
                'GET',
                $lien
             );        
          
            $statusCode = $response->getStatusCode();
            return $statusCode == 200;
    
        }
        catch (\Exception $e) {
            return false;
        }
    }

    public function checkUrl($url){
        $valid = [
            0 => false,
            1 => $url,
        ];

        $size = null;

        if( str_contains($url, 'http')) {
            if($this->estValide($url)) {

                $size = getimagesize($url);

                if(str_contains($url, 'youtube')) {
                    $http = explode('watch?v=',$url);
                    $id = explode('&',$http[1]);
                    $newHttp = $http[0] . "embed/" . $id[0]; 
                    
                    $valid[1] = $newHttp;
                }

            } else {
              $valid[1] = "";
            }
        } else {
          $size = getimagesize("." . $url);
        }

        if(!is_null($size) && is_array($size)) {
            $valid[0] = (strtolower(substr($size['mime'], 0, 5)) == 'image' ? true : false);  
        }
        
        return $valid;
    }
}