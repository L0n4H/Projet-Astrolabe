<?php

namespace App\Controller;

use App\Entity\Etiquette;
use App\Repository\EtiquetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Boolean;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

use function Symfony\Component\DependencyInjection\Loader\Configurator\param;

class EtiquettesController extends AbstractController
{
    /**
     * @Route("/api/etiquettes/liste",methods="GET" , name="listeAll_etiquette")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des étiquettes",
     * )
     * @OA\Tag(name="Etiquette")  
     */
    public function index(EtiquetteRepository $etiquetteRepository): Response
    {
        $listeEtiquette = $etiquetteRepository->findAll();
        
        
        return $this->render('etiquettes/listeApi.html.twig', [
                'listeEtiquettes' => $listeEtiquette
        ]);
    }
    /**
     * @Route("/api/etiquettes/detail/{id}",methods="GET" , name="detail_etiquette")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'une etiquette",
     *  )
     *  @OA\Tag(name="Etiquette")  
     */
    public function detail($id,EtiquetteRepository $etiquetteRepository): Response
    {
        $listeEtiquette = $etiquetteRepository->findOneByEtat($id,1);

        return $this->render('etiquettes/listeApi.html.twig', [
            
            'listeEtiquettes' => $listeEtiquette
        ]);
            
    }


}
