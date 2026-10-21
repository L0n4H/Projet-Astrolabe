<?php

namespace App\Controller;

use App\Entity\Etat;
use App\Entity\Evenement;
use App\Entity\GenreMusical;
use App\Entity\Groupe;
use App\Entity\Ressource;
use App\Entity\User;
use App\Form\RessourceType;
use App\Repository\EvenementRepository;
use App\Repository\GenreMusicalRepository;
use App\Service\VichService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EvenementsController extends AbstractController
{
    /**
     * @Route("/api/evenements/liste",methods="GET",  name="listeAll_evenements")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des évenements",
     * )
     * @OA\Tag(name="Evenement")
     */
    public function index(EvenementRepository $evenementRepository, EntityManagerInterface $em): Response
    {
        $listeEvenement = $evenementRepository->findByEtat(1);

        return $this->render('evenements/listeApi.html.twig', [          
            'listeEvenements' => $listeEvenement
        ]);
    }
    /**
     * @Route("/api/evenements/detail/{id}",methods="GET",  name="detail_api_evenement")
     *   @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un événement",
     * )
     * @OA\Tag(name="Evenement")
     */
    public function detail($id,EvenementRepository $evenementRepository): Response
    {
        $listeEvenement = $evenementRepository->findOneByEtat($id,1);
    
        return $this->render('evenements/listeApi.html.twig', [
            'listeEvenements' => $listeEvenement
        ]);
            
    }

    /**
     * @Route("/evenements/liste/{currentPage}", name="listeFront_evenements")
     */
    public function accueil(int $currentPage=1, EntityManagerInterface $em): Response
    {
        $evenementRepository = $em->getRepository(Evenement::class);
        $count = count($evenementRepository->findByEtat(1));

        /** Dates */
        $date = 2012;
        $date_diff = date_diff(new DateTime("01-01-$date"), new DateTime())->y;
        $dates = array();
        for( $i = 0; $i <= $date_diff; $i++ )
        {
            $dates[] = $date;
            $date += 1;
        }
        $dates = array_reverse($dates);

        /** Trimestres */
        $trimestres = array(
            "Janvier/Mars" => [1,2,3],
            "Avril/Juin" => [4,5,6],
            "Juillet/Septembre" => [7,8,9],
            "Octobre/Décembre" => [10,11,12],
        );

        /** Genres Musicaux */
        $genreRepository = $em->getRepository(GenreMusical::class);
        $genres = $genreRepository->findByEtat(1);

        /** Type Event */
        $types = $evenementRepository->getTypesEvent();

        /** Lieux */
        $lieux = $evenementRepository->getLieux();
        
        $numItemsPerPage = 10;
        $listeEvenement = $evenementRepository->findByEtat(1,$numItemsPerPage,($currentPage-1)*$numItemsPerPage);

        return $this->render('evenements/listeFront.html.twig', [
            
            'listeEvenements' => $listeEvenement,
            'countOfEntity' => $count,
            'currentPage' => $currentPage,
            'numItemsPerPage' => $numItemsPerPage,
            'dates' => $dates,
            'trimestres' => $trimestres,
            'genres' => $genres,
            'types' => $types,
            'lieux' => $lieux,

        ]);
    }

    /**
     */
    /**
     * @Route("/api/evenements/search", name="search_evenements", methods="GET")
     * @OA\Parameter(
     *      name="filters",
     *      in="query",
     *      description="{'annee':'2020', 'trimestre':[1,2,3],'genre':'idGenre','type':'idType','lieu':'idLieu','search':'string' }",
     *      required=true,
     *      @OA\Schema(
     *          type="string"
     *      )
     *   ),
     * @OA\Response(
     *     response=200,
     *     description="Retourne une liste d'événement correspondant aux critères",
     * 
     * )
     * 
     * 
     * @OA\Tag(name="Evenement")
     */
    public function search(EntityManagerInterface $em, Request $request) : JsonResponse
    {
        $filters = json_decode($request->query->get('filters'), true);

        $evenements = $em->getRepository(Evenement::class)->applySearch($filters);

        $events = array();
        foreach($evenements as $event)
        {
            $genres = array();
            foreach($event->getGenresMusicaux() as $genre)
            {
                $genres[] = $genre->getNom();
            }

            $events[] = [
                "id" => $event->getId(),
                "titre" => $event->getTitre(),
                "dateDebut" => $event->getDateDebut()->format('Y-m-d'),
                "heureDebut" => $event->getHeureDebut()->format('H:i:s'),
                "genresMusicaux" => $genres,
                "image" => $event->getImage(),
                "lienImage" => $event->getLienImage(),
            ];
        }
        $reponse = new JsonResponse($events);
        $reponse->headers->set("Content-Type", "application/json");
        $reponse->headers->set("Access-Control-Allow-Origin", "*");
        
        return $reponse;
    }

    /**
     * @Route("/evenements/component/card", name="event_card", methods="GET")
     */
    public function card()
    {
        return $this->render('components/card.html.twig', [
            'evenement' => (new Evenement())->setId(0)
                            ->setTitre("replace_titre")
                            ->setDateDebut(new DateTime())
                            ->setHeureDebut(new DateTime())
                            ->setImage("replace_image")
                            ->setLienImage("replace_image")
        ]);
    }

    
    /**
     * @Route("/evenements/detail/{id}" , name="detail_evenement")
     */
    public function detailFront($id, EvenementRepository $evenementRepository , EntityManagerInterface $em, Request $request) : Response {
        $evenement = $evenementRepository->find($id);

        if ( $evenement && !$this->getUser() && !$this->isGranted('ROLE_READ_EVENEMENT') && $evenement->getEtat()->getId() != 1 )
        {
            return $this->redirectToRoute('listeFront_evenements');
        }
        $form = $this->createForm(RessourceType::class);
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $ressource = $form->getData();
            
            $etat = $em->getRepository(Etat::class)->find(3);

            $ressource->setEtat($etat);
            $ressource->addEvenement($evenement);

            if($form->isValid()) {
                $em->persist($ressource);
                $em->flush();

                $this->addFlash("success","Votre proposition a bien été soumise.");
            } else {
                $this->addFlash('danger','Une erreur est survenue.');
            }

            return $this->redirectToRoute('detail_evenement', [
                'id' => $id
            ]);
        }
        
        if(!is_null($evenement))
        {
            return $this->render('evenements/detailEvenement.html.twig', [
                'evenement' => $evenement,
                'formRessource' => $form->createView(),
                'images' => $em->getRepository(Ressource::class)->getEvenementImage($id),
            ]);
        }

        return $this->redirectToRoute('home', [], 301);
    }

}
