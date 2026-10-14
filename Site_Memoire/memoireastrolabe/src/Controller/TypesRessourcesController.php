<?php

namespace App\Controller;

use App\Repository\TypeRessourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TypeRessource;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


class TypesRessourcesController extends AbstractController
{ 
    /**
     * @Route("/api/typesRessources/liste",methods="GET", name="listeAll_typeRessource")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des types de ressources",
     * )
     * @OA\Tag(name="TypeRessource")
    */
   public function index(TypeRessourceRepository $typeRessourceRepository): Response
   {
       $listeTypeRessource = $typeRessourceRepository->findAll();
     
        return $this->render('types_ressources/listeApi.html.twig', [
            'listeTypeRessources' => $listeTypeRessource
        ]);
   }
    /**
     * @Route("/api/typesRessources/detail/{id}", methods="GET",name="detail_typeRessource")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un type de ressource",
     * )
     * @OA\Tag(name="TypeRessource")
    */
    public function detail($id,TypeRessourceRepository $typeRessourceRepository): Response
    {
        $typesRessource = $typeRessourceRepository->find($id);
        if(!is_null($typesRessource))
            $listeTypeRessource = array($typesRessource);
        else
            $listeTypeRessource = array();
            
        return $this->render('types_ressources/listeApi.html.twig', [
            'listeTypeRessources' => $listeTypeRessource
        ]);
    }
}
