<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RessourceRepository;

use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

use App\Entity\Ressource;

class RessourcesController extends AbstractController
{
    /**
     * @Route("/api/ressources/liste" ,methods="GET", name="liste_ressources")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des ressources",
     * )
     * @OA\Tag(name="Ressource")
    */
    public function index(RessourceRepository $ressourceRepository, Request $request): Response
    {
        $listeRessources = $ressourceRepository->findByEtat(1);
        return $this->render('ressources/listeApi.html.twig', [
            
            'listeRessources' => $listeRessources 
        ]);
    }
    /**
     * @Route ("/api/ressources/detail/{id}",methods="GET", name="detail_ressource")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'une ressource",
     * )
     * @OA\Tag(name="Ressource")
     */
    public function detail($id,RessourceRepository $ressourceRepository, Request $request): Response
    {
        $listeRessource = $ressourceRepository->findOneByEtat($id,1);

        return $this->render('ressources/listeApi.html.twig', [
            
            'listeRessources' => $listeRessource
        ]);
            
    }

}
