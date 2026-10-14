<?php

namespace App\Controller;

use App\Repository\GroupeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\Groupe;
use App\Entity\Membre;
use App\Repository\EtiquetteRepository;
use App\Repository\GenreMusicalRepository;
use App\Repository\InstrumentRepository;
use App\Repository\LabelRepository;
use App\Repository\MembreRepository;
use App\Repository\MusicienRepository;
use App\Repository\NationaliteRepository;
use Doctrine\ORM\EntityManagerInterface;

class GroupesController extends AbstractController
{

    /**
     * @Route("/api/groupes/liste",methods="GET", name="listeAll_groupe")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des groupes",
     * )
     * @OA\Tag(name="Groupe")
     */
    public function index(GroupeRepository $groupeRepository): Response
    {
        $listeGroupe = $groupeRepository->findByEtat(1);
        
        return $this->render('groupes/listeApi.html.twig', [
            'listeGroupes' => $listeGroupe
        ]);
    }
    /**
     * @Route("/api/groupes/detail/{id}",methods="GET", name="detail_groupe")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un groupe",
     * )
     * @OA\Tag(name="Groupe")
     */
    public function detail($id,GroupeRepository $groupeRepository): Response
    {
        $listeGroupe = $groupeRepository->findOneByEtat($id,1);
        
        return $this->render('groupes/listeApi.html.twig', [
            
            'listeGroupes' => $listeGroupe
        ]);
            
    }

}
