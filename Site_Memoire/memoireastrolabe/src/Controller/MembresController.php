<?php

namespace App\Controller;

use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

use App\Entity\Membre;

class MembresController extends AbstractController
{
    /**
     * @Route("/api/membres/liste",methods="GET", name="listeAll_membre")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des membres",
     * )
     * @OA\Tag(name="Membre")
     */
    public function index(MembreRepository $membreRepository): Response
    {
        $listeMembre = $membreRepository->findByEtat(1);
        
        return $this->render('membres/listeApi.html.twig', [
            'listeMembres' => $listeMembre
        ]);
    }
     /**
     * @Route("/api/membres/detail/{id}",methods="GET", name="detail_membre")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un membre",
     * )
     * @OA\Tag(name="Membre")
     */
    public function details($id,MembreRepository $membreRepository): Response
    {
        $listeMembre = $membreRepository->findOneByEtat($id,1);

        return $this->render('membres/listeApi.html.twig', [
            
            'listeMembres' => $listeMembre
        ]);
       
    }
}
