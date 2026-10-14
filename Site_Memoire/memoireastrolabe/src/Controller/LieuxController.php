<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Lieu;
use Doctrine\ORM\EntityManagerInterface;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

class LieuxController extends AbstractController
{
    /**
     * @Route("/api/lieux/liste",methods="GET", name="listeAll_lieux")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des lieux",
     * )
     * @OA\Tag(name="Lieu")
     */
    public function index(LieuRepository $lieuxRepository): Response
    {
        $listeLieux = $lieuxRepository->findByEtat(1);
        
        return $this->render('lieux/listeApi.html.twig', [
            
            'listeLieux' => $listeLieux
        ]);
    }
    /**
     * @Route("/api/lieux/detail/{id}",methods="GET", name="detail_lieu")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un lieu",
     * )
     * @OA\Tag(name="Lieu")
     */
    public function detail($id,LieuRepository $lieuRepository, Request $request): Response
    {
        $listeLieu = $lieuRepository->findOneByEtat($id,1);

        return $this->render('lieux/listeApi.html.twig', [
            
            'listeLieux' => $listeLieu
        ]);
            
    }
}
