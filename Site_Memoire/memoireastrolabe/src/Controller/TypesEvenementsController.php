<?php

namespace App\Controller;

use App\Entity\TypeEvenement;
use App\Repository\TypeEvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


class TypesEvenementsController extends AbstractController
{
    /**
     * @Route ("/api/typesEvenements/liste",methods="GET", name="listeAll_typesEvenements")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des types d'évenements",
     * )
     * @OA\Tag(name="TypeEvenement")
     */
    public function index(TypeEvenementRepository $typesEvenementsRepository): Response
    {
        $listetypesEvenements = $typesEvenementsRepository->findByEtat(1);
        
            return $this->render('types_evenements/listeApi.html.twig', [
                
                'listetypesEvenements' => $listetypesEvenements
            ]);
    }
    /**
     * @Route ("/api/typesEvenements/detail/{id}",methods="GET", name="detail_typeEvenement")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un type d'évenement",
     * )
     * @OA\Tag(name="TypeEvenement")
     */
    public function detail($id,TypeEvenementRepository $typesEvenementsRepository, Request $request): Response
    {
        $listetypesEvenements = $typesEvenementsRepository->findOneByEtat($id,1);

        return $this->render('types_evenements/listeApi.html.twig', [
            
            'listetypesEvenements' => $listetypesEvenements
        ]);
    }
}
