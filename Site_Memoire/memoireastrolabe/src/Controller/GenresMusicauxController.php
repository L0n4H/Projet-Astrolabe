<?php

namespace App\Controller;

use App\Entity\GenreMusical;
use App\Repository\GenreMusicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

class GenresMusicauxController extends AbstractController
{
    /**
     *  @Route("/api/genresMusicaux/liste" ,methods="GET", name="listeAll_genresMusicaux")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne la liste des genres musicaux",
     * )
     * @OA\Tag(name="GenreMusical")
     */
    public function index(GenreMusicalRepository $genresMusicauxRepository): Response
    {
        $listeGenresMusicaux = $genresMusicauxRepository->findByEtat(1);
        
        return $this->render('genres_musicaux/listeApi.html.twig', [
            'listeGenresMusicaux' => $listeGenresMusicaux
        ]);

    }
     /**
     * @Route("/api/genresMusicaux/detail/{id}",methods="GET", name="detail_genreMusical")
     *  @OA\Response(
     *     response=200,
     *     description="Retourne le detail d'un genre musical",
     * )
     * @OA\Tag(name="GenreMusical")
     */
    public function detail($id,GenreMusicalRepository $genreMusicauxRepository): Response
    {
        $listeGenreMusicaux = $genreMusicauxRepository->findOneByEtat($id,1);

        return $this->render('genres_musicaux/listeApi.html.twig', [
            'listeGenresMusicaux' => $listeGenreMusicaux
        ]);
    }

}
