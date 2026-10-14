<?php

namespace App\Controller;

use App\Repository\PassageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\Passage;
use Doctrine\ORM\EntityManagerInterface;

class PassagesController extends AbstractController
{
    /**
     * @Route("/api/passages/liste",methods="GET", name="listeAll_passage")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des passages",
     * )
     * @OA\Tag(name="Passage")
     */
    public function index(PassageRepository $passageRepository): Response
    {
        $listePassage = $passageRepository->findByEtat(1);
        
        return $this->render('passages/listeApi.html.twig', [
            'listePassages' => $listePassage
        ]);
    }
    /**
     * @Route("/api/passages/detail/{id}",methods="GET", name="detail_passage")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un passage",
     * )
     * @OA\Tag(name="Passage")
     */
    public function detail($id,PassageRepository $passageRepository): Response
    {
        $listePassage = $passageRepository->findOneByEtat($id,1);

        return $this->render('passages/listeApi.html.twig', [
            
            'listePassages' => $listePassage
        ]);
            
    }
    


}
