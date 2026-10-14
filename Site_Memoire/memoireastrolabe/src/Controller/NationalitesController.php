<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NationaliteRepository;
use Symfony\Component\HttpFoundation\Request;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\Nationalite;
use Doctrine\ORM\EntityManagerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Validator\Constraints\Length;

class NationalitesController extends AbstractController
{     
     /**
     * @Route("/api/nationalites/liste",methods="GET", name="liste_nationalite")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des nationalités",
     * )
     * @OA\Tag(name="Nationalite")
    */
    public function index(NationaliteRepository $nationaliteRepository): Response
    {
        $listeNationalite = $nationaliteRepository->findByEtat(1);
        
        return $this->render('nationalites/listeApi.html.twig', [ 
            'listeNationalite' => $listeNationalite
        ]); 
    }

    /**
    * @Route("/api/nationalites/detail/{id}",methods="GET", name="detail_nationalite")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'une nationalité",
     * )
     * @OA\Tag(name="Nationalite")
    */
    public function detail($id,NationaliteRepository $nationaliteRepository): Response
    {
        $listeNationalite = $nationaliteRepository->findOneByEtat($id,1);

        return $this->render('nationalites/listeApi.html.twig', [
            'listeNationalite' => $listeNationalite
        ]);
    }
}
