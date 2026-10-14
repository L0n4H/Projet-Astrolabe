<?php

namespace App\Controller;

use App\Repository\MusicienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Musicien;
use App\Repository\EtiquetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

class MusiciensController extends AbstractController
{
    /**
     * @Route("/api/musiciens/liste",methods="GET", name="listeAll_musiciens")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des musiciens",
     * )
     * @OA\Tag(name="Musicien")
     */
    public function index(MusicienRepository $musiciensRepository): Response
    {
        $listeMusiciens = $musiciensRepository->findByEtat(1);
        
        return $this->render('musiciens/listeApi.html.twig', [
            
            'listeMusiciens' => $listeMusiciens
        ]);
    }
    /**
     * @Route("/api/musiciens/detail/{id}",methods="GET", name="detail_musicien")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un musicien",
     * )
     * @OA\Tag(name="Musicien")
     */
    public function detail($id,MusicienRepository $musicienRepository, Request $request): Response
    {
        $listeMusicien = $musicienRepository->findOneByEtat($id,1);

        return $this->render('musiciens/listeApi.html.twig', [
            
            'listeMusiciens' => $listeMusicien
        ]);
            
    }
}