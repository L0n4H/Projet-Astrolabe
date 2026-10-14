<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\InstrumentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

use App\Entity\Instrument;
use Doctrine\ORM\EntityManagerInterface;

class InstrumentsController extends AbstractController
{
    /**
     * @Route("/api/instruments/liste", methods="GET" , name="liste_instruments")
     * @OA\Response(
     *     response=200,
     *     description="Retourne la liste des instrumennts",
     * )
     * @OA\Tag(name="Instrument")
     */
    public function index(InstrumentRepository $instrumentRepository, Request $request) : Response
    {
        $listeInstruments = $instrumentRepository->findByEtat(1);
        
        return $this->render('instruments/listeApi.html.twig', [
            
            'listeInstruments' => $listeInstruments
        ]);
        
    }
    /**
     * @Route("/api/instruments/detail/{id}",methods="GET", name="detail_instrument")
     * @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un instrument",
     * )
     * @OA\Tag(name="Instrument")
     */
    public function detail($id,InstrumentRepository $instrumentRepository, Request $request): Response
    {
        $listeInstrument = $instrumentRepository->findOneByEtat($id,1);

        return $this->render('instruments/listeApi.html.twig', [
            
            'listeInstruments' => $listeInstrument
        ]);
            
    }
}
