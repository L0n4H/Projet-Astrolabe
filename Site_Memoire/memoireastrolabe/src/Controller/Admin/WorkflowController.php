<?php

namespace App\Controller\Admin;

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
use App\Entity\TypeEvenement;
use App\Form\EtiquetteType;
use App\Form\EvenementType;
use App\Form\GenreMusicalType;
use App\Form\GroupeType;
use App\Form\InstrumentType;
use App\Form\LabelType;
use App\Form\LieuType;
use App\Form\MusicienType;
use App\Form\NationaliteType;
use App\Form\PassageType;
use App\Form\RessourceType;
use App\Form\TypeEvenementType;
use App\Repository\EtiquetteRepository;
use App\Repository\EvenementRepository;
use App\Repository\GenreMusicalRepository;
use App\Repository\GroupeRepository;
use App\Repository\InstrumentRepository;
use App\Repository\LabelRepository;
use App\Repository\LieuRepository;
use App\Repository\MembreRepository;
use App\Repository\MusicienRepository;
use App\Repository\NationaliteRepository;
use App\Repository\RessourceRepository;
use App\Repository\TypeEvenementRepository;
use App\Repository\TypeRessourceRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/workflow")
 */
class WorkflowController extends AbstractController
{
    private EntityManagerInterface $em;
    private Etat $etat;
    private GroupeRepository $groupeRepository;
    private EtiquetteRepository $etiquetteRepository;
    private GenreMusicalRepository $genreMusicalRepository;
    private LabelRepository $labelRepository;
    private MembreRepository $membreRepository;
    private MusicienRepository $musicienRepository;
    private InstrumentRepository $instrumentRepository;
    private LieuRepository $lieuRepository;
    private TypeEvenementRepository $typeEvenementRepository;
    private AdminUrlGenerator $adminUrlGenerator;
    private RessourceRepository $ressourceRepository; 
    private TypeRessourceRepository $typeRessourceRepository;
    private NationaliteRepository $nationaliteRepository;
    
    public function __construct(
        EntityManagerInterface $em, 
        TypeEvenementRepository $typeEvenementRepository,
        LieuRepository $lieuRepository,
        InstrumentRepository $instrumentRepository,
        MusicienRepository $musicienRepository,
        MembreRepository $membreRepository,
        GroupeRepository $groupeRepository,
        EtiquetteRepository $etiquetteRepository,
        GenreMusicalRepository $genreMusicalRepository,
        LabelRepository $labelRepository,
        RessourceRepository $ressourceRepository,
        TypeRessourceRepository $typeRessourceRepository,
        AdminUrlGenerator $adminUrlGenerator,
        NationaliteRepository $nationaliteRepository
    ){
        $this->em                       = $em;
        $this->etat                     = $this->em->getRepository(Etat::class)->find(3);
        $this->groupeRepository         = $groupeRepository;
        $this->etiquetteRepository      = $etiquetteRepository;
        $this->genreMusicalRepository   = $genreMusicalRepository;
        $this->labelRepository          = $labelRepository;
        $this->membreRepository         = $membreRepository;
        $this->musicienRepository       = $musicienRepository;
        $this->instrumentRepository     = $instrumentRepository;
        $this->lieuRepository           = $lieuRepository;
        $this->typeEvenementRepository  = $typeEvenementRepository;
        $this->adminUrlGenerator        = $adminUrlGenerator;
        $this->ressourceRepository      = $ressourceRepository;
        $this->typeRessourceRepository  = $typeRessourceRepository;
        $this->nationaliteRepository    = $nationaliteRepository;
    }

    /**
     * @Route("",name="admin_workflow")
     */
    public function index(): Response
    {
        //Evenement
        $lieuform = $this->createForm(LieuType::class);
        $typeEventForm = $this->createForm(TypeEvenementType::class);
        $typeMusicForm = $this->createForm(GenreMusicalType::class);
        $eventForm = $this->createForm(EvenementType::class);
        $groupForm = $this->createForm(GroupeType::class);
        $labelForm = $this->createForm(LabelType::class);
        $etiquetteForm = $this->createForm(EtiquetteType::class);

        //Passage
        $passageForm = $this->createForm(PassageType::class);
        //Passage - Groupe
        $musicienForm = $this->createForm(MusicienType::class);
        $nationaliteForm = $this->createForm(NationaliteType::class);
        $typeMusicForm2 = $this->createForm(GenreMusicalType::class);
        $etiquetteForm2 = $this->createForm(EtiquetteType::class);
        $instrForm = $this->createForm(InstrumentType::class);
        //Passage - Musicien
        $nationaliteForm2 = $this->createForm(NationaliteType::class);
        $etiquetteForm3 = $this->createForm(EtiquetteType::class);

        //Ressource
        $ressourceForm = $this->createForm(RessourceType::class);
        $etiquetteForm4 = $this->createForm(EtiquetteType::class);


        return $this->render('workflow/index.html.twig', [
            'lieuForm' => $lieuform->createView(),
            'typeEventForm' => $typeEventForm->createView(),
            'typeMusicForm' => $typeMusicForm->createView(),
            'eventForm' => $eventForm->createView(),
            'groupForm' => $groupForm->createView(),
            'labelForm' => $labelForm->createView(),
            'passageForm' => $passageForm->createView(),
            'ressourceForm' => $ressourceForm->createView(),
            'musicienForm' => $musicienForm->createView(),
            'etiquetteForm' => $etiquetteForm->createView(),
            'etiquetteForm2' => $etiquetteForm2->createView(),
            'nationaliteForm' => $nationaliteForm->createView(),
            'instrForm' => $instrForm->createView(),
            'typeMusicForm2' => $typeMusicForm2->createView(),
            'nationaliteForm2' => $nationaliteForm2->createView(),
            'etiquetteForm3' => $etiquetteForm3->createView(),
            'etiquetteForm4' => $etiquetteForm4->createView(),
        ]);
    }


    //VERIF

    /**
     * @Route("/evenements/verif", methods={"GET","POST"}, name="verif_evenement")
     */
    public function verifEvent(EvenementRepository $evenementRepository, Request $request): Response
    {
        $liste = $evenementRepository->findAll();
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $newEvent = new Evenement;

        foreach ($liste as $event) {
            if ($event->getTitre() == $param["titre"]) {
                $errorText = "Cet événement existe déjà";
                $success = false;
            }
        }

        //créer l'array a renvoyer 
        $genres = array();
        foreach ($param['genreMusicaux'] as $id) {
            $genre = $this->genreMusicalRepository->find($id);
            array_push($genres, $genre->getNom());
        }
        $etiquettes = array();
        foreach ($param['etiquettes'] as $id) {
            $etiquette = $this->etiquetteRepository->find($id);
            array_push($etiquettes, $etiquette->getMotsCles());
        }
        $templieu = $this->lieuRepository->find($param['lieu']);
        $lieu = array(
            'nomBat'    =>  $templieu->getNomBatiment(),
            'cp'        =>  $templieu->getCP(),
            'ville'     =>  $templieu->getVille(),
            'adresse'   =>  $templieu->getAdresse()
        );
        if (array_key_exists("file", $param["img"])) {
            $img = array(
                'nom'   =>  $param['img']['nom'],
                'file'   =>  $param['img']['file'],
            );
        } else {
            $img = $param['img']['lien'];
        }

        $paramType = $param['typeEvenement'] ? $param['typeEvenement'] : null;
        $typeEvenement = $paramType ? $this->typeEvenementRepository->find($paramType)->getLabel() : '';

        $newEvent = array(
            'titre'             => $param["titre"],
            'dateDeb'           => $param['dateDeb'],
            'dateFin'           => $param['dateFin'],
            'typeEvenement'     => $typeEvenement,
            'lieu'              => $lieu,
            'genresMusicaux'     => $genres,
            'etiquettes'        => $etiquettes,
            'desc'              => $param['desc'],
            'img'               => $img,
        );

        $temp = array(
            'newName' => $param["titre"],
            'newItem' => $newEvent,
            'success' => $success,
            'errorText' => $errorText
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/passages/verif", methods={"GET","POST"}, name="verif_passage")
     */
    public function verifPassage(Request $request): Response
    {
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $i = 0;
        foreach ($param as $passage) {
            if ($passage['dateFin'] && $passage['dateDeb'] > $passage['dateFin']) {
                $errorText = "La date de début ne peut pas être suppérieure à la date de fin";
                $success = false;
            }
            $groupe = $this->groupeRepository->find($passage['groupe']);
            $genres = array();
            foreach ($groupe->getGenresMusicaux() as $id) {
                $genre = $this->genreMusicalRepository->find($id);
                array_push($genres, $genre->getNom());
            }
            $labels = array();
            foreach ($groupe->getLabels() as $id) {
                $label = $this->labelRepository->find($id);
                array_push($labels, $label->getNom());
            }
            $etiquettes = array();
            foreach ($groupe->getEtiquettes() as $id) {
                $etiquette = $this->etiquetteRepository->find($id);
                array_push($etiquettes, $etiquette->getMotsCles());
            }
            $membres = array();
            foreach ($groupe->getMembres() as $id) {
                $membre = $this->membreRepository->find($id);
                $instruments = array();
                foreach ($membre->getInstruments() as $idinstr) {
                    array_push($instruments, $this->instrumentRepository->find($idinstr)->getNom());
                }
                $temp = array(
                    'musicien'      =>  $this->musicienRepository->find($membre->getMusicien())->getNomScene(),
                    'instruments'   =>  $instruments,
                    'actif'         =>  $membre->getActif()
                );
                array_push($membres, $temp);
            }
            $idNat = $groupe->getNationalite() ? $groupe->getNationalite() : null;
            $nationalite = $idNat ? $this->nationaliteRepository->find($idNat)->getNom() : '';
            $newgrp = array(
                'nom'                => $groupe->getNom(),
                'lien'               => $groupe->getLienImage(),
                'nationalite'        => $nationalite,
                'genre_musicaux'     => $genres,
                'labels'             => $labels,
                'dateCreation'       => $groupe->getDateCreation(),
                'etiquettes'         => $etiquettes,
                'membres'            => $membres,
                'biographie'         => $groupe->getBiographie()
            );
            $newpassage = array(
                'dateDeb' => $passage['dateDeb'],
                'dateFin' => $passage['dateFin'],
                'groupe' => $newgrp,
            );

            $param[$i] = $newpassage;
            $i = $i + 1;
        };

        $temp = array(
            'newName' => 'liste ressources',
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/ressources/verif", methods={"GET","POST"}, name="verif_ressource")
     */
    public function verifRessource(Request $request): Response
    {
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $i = 0;
        
        foreach ($param as $newRes) {
            $img = "";
            $etiquettes = array();
            foreach ($newRes['etiquettes'] as $id) {
                $etiquette = $this->etiquetteRepository->find($id);
                array_push($etiquettes, $etiquette->getMotsCles());
            };
            if (array_key_exists("file", $newRes["img"])) {
                $img = array(
                    'nom'   =>  $newRes['img']['nom'],
                    'file'   =>  $newRes['img']['file'],
                );
            } else {
                $img = $newRes['lien'];
            }
            $newRessource = array(
                'titre' => $newRes['nom'],
                'img' => $img,
                'type' => $this->typeRessourceRepository->find($newRes['type'])->getLabel(),
                'etiquettes' => $etiquettes,
                'credits'   => $newRes['credits'],
            );
            $param[$i] = $newRessource;
            $i = $i + 1;
        }


        $temp = array(
            'newName' => 'liste passages',
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    //AJOUT

    /**
     * @Route("/evenements/add", methods={"POST"}, name="add_event")
     */
    public function addEvent(TypeRessourceRepository $typeRessourceRepository, EvenementRepository $evenementRepository, LieuRepository $lieuRepository, TypeEvenementRepository $typeEvenementRepository, GroupeRepository $groupeRepository, EtiquetteRepository $etiquetteRepository, GenreMusicalRepository $genreMusicalRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $evenementRepository->findAll();
        $success = true;
        $newName = "";
        $errorText = "";
        $hashImgName ="";
        $param = (json_decode($request->getContent(), true));

        //upload file
        if (array_key_exists("file", $param["img"])) {
            $hashImgName = date('dmYHi')."_". $param["img"]["nom"];
            file_put_contents("." . $this->getParameter('vichMapEvenement') . "/" .$hashImgName, file_get_contents($param["img"]["file"]));
        }

        foreach ($liste as $event) {
            if ($event->getTitre() == $param["titre"]) {
                $errorText = "Cet événement existe déjà";
                $success = false;
            }
        }
        $newEvent = new Evenement;

        if ($success) {
            $newEvent->setTitre($param["titre"]);
            $newEvent->setTypeEvenement($typeEvenementRepository->find($param["typeEvenement"]));
            $newEvent->setDateDebut(new DateTime($param["dateDeb"]));
            $newEvent->setDateFin(new DateTime($param["dateFin"]));
            $newEvent->setDescription($param["desc"]);
            $newEvent->setImage($hashImgName);
            $hashImgName ="";
            $newEvent->setLieu($lieuRepository->find($param["lieu"]));
            foreach ($param["etiquettes"] as $id) {
                $newEvent->addEtiquette($etiquetteRepository->find($id));
            }
            foreach ($param["genreMusicaux"] as $id) {
                $newEvent->addGenreMusical($genreMusicalRepository->find($id));
            }
            foreach ($param['ressources'] as $ressource) {
                $restemp = new Ressource;
                if (array_key_exists("file", $ressource["img"])) {
                    $hashImgName = date('dmYHi')."_". $ressource["img"]["nom"];
                    file_put_contents("." . $this->getParameter('vichMapRessources') . "/" .$hashImgName, file_get_contents($ressource["img"]["file"]));
                }
                $restemp->setTitre($ressource['nom']);
                $restemp->setLien($ressource['lien']);
                $restemp->setType($typeRessourceRepository->find($ressource['type']));
                $restemp->setCredits($ressource['credits']);
                $restemp->setNom($hashImgName);
                $hashImgName ="";
                $restemp->setEtat($this->etat);
                foreach ($ressource["etiquettes"] as $id) {
                    $restemp->addEtiquette($etiquetteRepository->find($id));
                };
                $newEvent->addRessource($restemp);
            }
            foreach ($param['passages'] as $passage) {
                $passtemp = new Passage;
                $passtemp->setDateDebut($passage['dateDeb'] ? new DateTime($passage['dateDeb']) : null );
                $passtemp->setDateFin($passage['dateFin'] ? new DateTime($passage['dateFin']) : null );
                $passtemp->setGroupe($groupeRepository->find($passage['groupe']));
                $newEvent->addPassage($passtemp);
            }
            $newEvent->setEtat($this->etat);

            // $newEvent->setLienImage($param["lienImg"]);
            $em->persist($newEvent);
            $em->flush();
            $newName = $newEvent->getTitre();
        }

        $temp = array(
            'newName' => $newName,
            'newId' => $newEvent->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(EvenementCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newEvent->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/groupes/add", methods={"POST"}, name="add_groupe")
     */
    public function addGrp(InstrumentRepository $instrumentRepository, MusicienRepository $musicienRepository, GroupeRepository $groupeRepository, NationaliteRepository $nationaliteRepository, EtiquetteRepository $etiquetteRepository, GenreMusicalRepository $genreMusicalRepository, LabelRepository $labelRepository, MembreRepository $membreRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $groupeRepository->findAll();
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $newName = "";
        $hashImgName ="";
        $newGroupe = new Groupe;
        //upload file
        if (array_key_exists("file", $param["photo"])) {
            $hashImgName=date('dmYHi')."_". $param["photo"]["nom"];
            file_put_contents("." . $this->getParameter('vichMapGroupe') . "/" .$hashImgName, file_get_contents($param["photo"]["file"]));
        }

        foreach ($liste as $groupe) {
            if ($groupe->getNom() == $param["nom"]) {
                $errorText = "Ce Groupe existe déjà";
                $success = false;
            }
        }

        if ($success) {
            $newGroupe->setNom($param["nom"]);
            $newGroupe->setDateCreation($param["date"]);
            $newGroupe->setBiographie($param["bio"]);
            $newGroupe->setNationalite($nationaliteRepository->find($param["nationalite"]));
            $newGroupe->setImage($hashImgName);
            $hashImgName ="";
            foreach ($param["etiquettes"] as $id) {
                $newGroupe->addEtiquette($etiquetteRepository->find($id));
            }
            foreach ($param["genreMusicaux"] as $id) {
                $newGroupe->addGenreMusical($genreMusicalRepository->find($id));
            }
            foreach ($param["label"] as $id) {
                $newGroupe->addLabel($labelRepository->find($id));
            }
            foreach ($param["membres"] as $membre) {
                $tempMembre = new Membre;
                $tempMembre->setMusicien($musicienRepository->find($membre["id"]));
                foreach ($membre["Intrument"] as $instr) {
                    $tempMembre->addInstrument($instrumentRepository->find($instr));
                };
                $tempMembre->setActif($membre["actif"]);
                $newGroupe->addMembre($tempMembre);
            }
            $newGroupe->setEtat($this->etat);

            $em->persist($newGroupe);
            $em->flush();
            $newName = $newGroupe->getNom();
        }

        $temp = array(
            'newName' => $newName,
            'newId' => $newGroupe->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(GroupeCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newGroupe->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/etiquettes/add", methods={"POST"}, name="add_etiquette")
     */
    public function addTag(EtiquetteRepository $etiquetteRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $etiquetteRepository->findAll();
        $success = true;
        $newEtiquette = new Etiquette;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $motCle = $param['motCles'];
        foreach ($liste as $etiquette) {
            if ($etiquette->getMotsCles() == $motCle) {
                $errorText = "l'étiquette existe déja";
                $success = false;
            }
        }

        if ($success) {
            $newEtiquette->setMotsCles($motCle);
            $newEtiquette->setEtat($this->etat);

            $em->persist($newEtiquette);
            $em->flush();
        }
        // $newItem= array(
        //     'id'        =>  $newEtiquette->getId(),
        //     'motCle'    =>  $newEtiquette->getMotsCles(),
        // );
        $temp = array(
            'newName' => $newEtiquette->getMotsCles(),
            'newItem' => $param,
            'newId' => $newEtiquette->getId(),
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(EtiquetteCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newEtiquette->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/genreMusical/add", methods={"POST"}, name="add_genreMusical")
     */
    public function addGenreMusic(GenreMusicalRepository $genreMusicauxRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $genreMusicauxRepository->findAll();
        $success = true;
        $newGenre = new GenreMusical;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $nom = $param['nom'];
        foreach ($liste as $genre) {
            if ($genre->getNom() == $nom) {
                $errorText = "l'étiquette existe déja";
                $success = false;
            }
        }

        if ($success) {
            $newGenre->setNom($nom);
            $newGenre->setEtat($this->etat);

            $em->persist($newGenre);
            $em->flush();
        }

        $temp = array(
            'newName' => $newGenre->getNom(),
            'newId' => $newGenre->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(GenreMusicalCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newGenre->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");
        return $reponse;
    }


    /**
     * @Route("/instruments/add", methods={"POST"}, name="add_instrument")
     */
    public function addInstr(InstrumentRepository $instrumentRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $instrumentRepository->findAll();
        $success = true;
        $newInstr = '';
        $errorText = "";

        $param = (json_decode($request->getContent(), true));
        $nom = $param['nom'];
        $newInstr = new Instrument;


        foreach ($liste as $instr) {
            if ($instr->getNom() == $nom) {
                $errorText = "la nationalité éxiste déjà";
                $success = false;
            }
        }

        if ($success) {
            $newInstr->setNom($nom);
            $newInstr->setEtat($this->etat);

            $em->persist($newInstr);
            $em->flush();
        }

        $temp = array(
            'newName' => $newInstr->getNom(),
            'newItem' => $param,
            'newId' => $newInstr->getId(),
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(InstrumentCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newInstr->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/labels/add", methods={"POST"}, name="add_label")
     */
    public function addLabel(LabelRepository $labelRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $labelRepository->findAll();
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $newLabel = new Label;
        $hashImgName ="";

        //upload file
        if (array_key_exists("file", $param["Img"])) {
            $hashImgName = date('dmYHi')."_". $param["Img"]["nom"];
            file_put_contents("." . $this->getParameter('vichMapLabel') . "/" .$hashImgName, file_get_contents($param["Img"]["file"]));
        }

        foreach ($liste as $label) {
            if ($label->getNom() == $param["nom"]) {
                $errorText = "Ce label existe déjà";
                $success = false;
            }
        }

        if ($success) {
            $newLabel->setNom($param["nom"]);
            $newLabel->setDateCreation($param["DateDeCrea"]);
            $newLabel->setDescription($param["Desc"]);
            $newLabel->setLogo($hashImgName);
            $hashImgName ="";

            $newLabel->setEtat($this->etat);

            $em->persist($newLabel);
            $em->flush();
        }

        $temp = array(
            'newName' => $newLabel->getNom() . " (" . $newLabel->getDateCreation() . ")",
            'newId' => $newLabel->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(LabelCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newLabel->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }


    /**
     * @Route("/lieux/add", methods={"POST"}, name="add_lieu")
     */
    public function addLieu(LieuRepository $lieuRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $lieuRepository->findAll();
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $newLieu = new Lieu;

        foreach ($liste as $lieu) {
            if ($lieu->getNomBatiment() == $param["nomBat"] && $lieu->getCP() == $param["cp"]) {
                $errorText = "le lieu existe déja";
                $success = false;
            }
        }

        if ($success) {
            $newLieu->setNomBatiment($param["nomBat"]);
            $newLieu->setAdresse($param["adresse"]);
            $newLieu->setVille($param["ville"]);
            $newLieu->setCP($param["cp"]);
            $newLieu->setEtat($this->etat);

            $em->persist($newLieu);
            $em->flush();
        }

        $newName = "(" . $newLieu->getCP() . ") " . $newLieu->getVille() . " - " . $newLieu->getNomBatiment();
        if ( $newLieu->getAdresse() ) $newName .= " - " . $newLieu->getAdresse();

        $temp = array(
            'newName' => $newName,
            'newId' => $newLieu->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(LieuCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newLieu->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/musiciens/add", methods={"POST"}, name="add_musicien")
     */
    public function addMusicien(MusicienRepository $musicienRepository, EtiquetteRepository $etiquetteRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $musicienRepository->findAll();
        $success = true;
        $errorText = "";
        $param = (json_decode($request->getContent(), true));
        $newName = "";
        $hashImgName ="";

        $newMusicien = new Musicien;
        //pseudo,nom,prenom,dateNaiss,photo,etiquette,lienImg
        //upload file
        if (array_key_exists("file", $param["photo"])) {
            $hashImgName=date('dmYHi')."_". $param["photo"]["nom"];
            file_put_contents("." . $this->getParameter('vichMapMusicien') . "/" .$hashImgName, file_get_contents($param["photo"]["file"]));
        }


        foreach ($liste as $musicien) {
            if ($musicien->getNomScene() == $param["pseudo"]) {
                $errorText = "Ce Musicien existe déjà";
                $success = false;
            }
        }

        if ($success) {
            if($param["nom"]!=""){
                $newMusicien->setNom($param["nom"]);
                $newName = $param["nom"]." - ".$param["prenom"];
            }

            if($param["pseudo"]!=""){
                $newMusicien->setNomScene($param["pseudo"]);
                $newName = $param["pseudo"];
            }

            $newMusicien->setPrenom($param["prenom"]);
            $newMusicien->setDateNaissance($param["dateNaiss"]);
            $newMusicien->setImage($hashImgName);
            $hashImgName ="";

            foreach ($param["etiquette"] as $tagId) {
                $newMusicien->addEtiquette($etiquetteRepository->find($tagId));
            }
            $newMusicien->setEtat($this->etat);

            // $newMusicien->setLienImage($param["lienImg"]);
            $em->persist($newMusicien);
            $em->flush();
        }

        $temp = array(
            'newName' => $newName,
            'newId' => $newMusicien->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(MusicienCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newMusicien->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/nationalites/add", methods={"POST"}, name="add_nationalite")
     */
    public function addNationalite(NationaliteRepository $nationaliteRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $nationaliteRepository->findAll();
        $success = true;
        $newNat = '';
        $errorText = "";

        $param = (json_decode($request->getContent(), true));
        $nom = $param['nom'];
        $codeISO = $param['codeISO'];
        $newNat = new Nationalite;

        if (strlen($codeISO) != 2) {
            $errorText = "le code doit avoir une longueur de 2 exactement";
            $success = false;
        }
        foreach ($liste as $nationalite) {
            if ($nationalite->getNom() == $nom) {
                $errorText = "la nationalité existe déjà";
                $success = false;
            }
            if ($nationalite->getCodeISO() == $codeISO) {
                $errorText = "le code est déjà utilisé";
                $success = false;
            }
        }

        if ($success) {
            $newNat->setNom($nom);
            $newNat->setCodeISO($codeISO);
            $newNat->setEtat($this->etat);
            $em->persist($newNat);
            $em->flush();
        }

        $temp = array(
            'newName' => $newNat->getNom(),
            'newId' => $newNat->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(NationaliteCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newNat->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }

    /**
     * @Route("/typeEvenement/add", methods={"POST"}, name="add_typeEvenement")
     */
    public function addTypeEvent(TypeEvenementRepository $typesEvenementsRepository, EntityManagerInterface $em, Request $request): Response
    {
        $liste = $typesEvenementsRepository->findAll();
        $success = true;
        $newType = '';
        $errorText = "";

        $param = (json_decode($request->getContent(), true));
        $label = $param['label'];
        $newType = new TypeEvenement;

        foreach ($liste as $typeEvent) {
            if ($typeEvent->getLabel() == $label) {
                $errorText = "le type existe déjà";
                $success = false;
            }
        }

        if ($success) {
            $newType->setLabel($label);
            $newType->setEtat($this->etat);
            $em->persist($newType);
            $em->flush();
        }

        $temp = array(
            'newName' => $newType->getLabel(),
            'newId' => $newType->getId(),
            'newItem' => $param,
            'success' => $success,
            'errorText' => $errorText,
            'url' => $this->adminUrlGenerator->setController(TypeEvenementCrudController::class)
                                            ->setAction(Action::EDIT)
                                            ->setEntityId($newType->getId())
                                            ->generateUrl()
        );

        $reponse = new Response();
        $reponse->setContent(json_encode($temp));
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");


        return $reponse;
    }
}
