<?php

namespace App\Controller;

use App\Repository\CategorieMusicaleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\CategorieMusicale;
use App\Entity\GenreMusical;
use App\Repository\EtatRepository;
use Error;

class CategoriesMusicalesController extends AbstractController
{
    /**
     * @Route("/api/categoriesMusicales/liste",methods="GET" , name="liste_categoriesMusicales")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste de catégories musicales",
     * )
     * @OA\Tag(name="CategorieMusicale")
     */
    public function index(CategorieMusicaleRepository $categorieMusicaleRepository,EtatRepository $etatRepository, Request $request) : Response
    {
        
        $listeCategorieMusicale = $categorieMusicaleRepository->findAll();
        
        return $this->render('categories_musicales/listeApi.html.twig', [
            
            'listeCategoriesMusicales' => $listeCategorieMusicale
        ]);
    }
    /**
     * @Route("/api/categoriesMusicales/detail/{id}",methods="GET" , name="detail_categorieMusicale")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'une catégorie musicale",
     * )
     * @OA\Tag(name="CategorieMusicale")
     */
    public function detail($id,CategorieMusicaleRepository $categorieMusicaleRepository, Request $request): Response
    {
        $categorie = $categorieMusicaleRepository->find($id);
        $listeCategorieMusicale = array($categorie);

        return $this->render('categories_musicales/listeApi.html.twig', [
            
            'listeCategoriesMusicales' => $listeCategorieMusicale
        ]);
            
    }
}
