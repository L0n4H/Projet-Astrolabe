<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\LabelRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\Label;
use Doctrine\ORM\EntityManagerInterface;

class LabelsController extends AbstractController
{
    /**
     * @Route("/api/labels/liste",methods="GET", name="liste_label")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des labels",
     * )
     * @OA\Tag(name="Label")
     */
    public function index(LabelRepository $labelRepository, Request $request) : Response 
    {
        $listeLabels = $labelRepository->findByEtat(1);
        
        return $this->render('labels/listeApi.html.twig', [
            
            'listeLabels' => $listeLabels
        ]);
    }

    /**
     * @Route("/api/labels/detail/{id}",methods="GET", name="detail_label")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un label",
     * )
     * @OA\Tag(name="Label")
     */
    public function detail($id,LabelRepository $labelRepository): Response
    {
        $listeLabels = $labelRepository->findOneByEtat($id,1);
    
        return $this->render('labels/listeApi.html.twig', [
            
            'listeLabels' => $listeLabels
        ]);

    }
}
