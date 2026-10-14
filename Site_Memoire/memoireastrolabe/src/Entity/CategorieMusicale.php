<?php

namespace App\Entity;

use App\Repository\CategorieMusicaleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

use App\Entity\GenreMusical;


/**
 * @ORM\Entity(repositoryClass=CategorieMusicaleRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class CategorieMusicale
{
    /**
     * @var int
     * @OA\Property(description="The unique identifier of the CategorieMusicale.")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @OA\Property(ref=@Model(type=GenreMusical::class))
     * @ORM\ManyToMany(targetEntity=GenreMusical::class, inversedBy="categorieMusicales")
     */
    private $genresMusicaux;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=GenreMusical::class, inversedBy="categorieMusicale")
     * @ORM\JoinTable(name="categorie_musicale_genre_musical_principal")
     */
    private $categoriePrincipale;
    
    public function __construct()
    {
        $this->genresMusicaux = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     *   * @return Collection<int, GenreMusical>
     */
    public function getGenresMusicaux(): Collection
    {
        return $this->genresMusicaux;
    }

    public function getVisibleGenresMusicaux() : Array 
    {
        $arrayGenresMusicaux = [];

        foreach ($this->genresMusicaux as $genreMusical) {
            if($genreMusical->getEtat()->getId() == 1) {
                $arrayGenresMusicaux[] = $genreMusical;
            }
        }

        return $arrayGenresMusicaux;
    }
    
    
    public function addGenreMusical(GenreMusical $genresMusicaux): self
    {
        if (!$this->genresMusicaux->contains($genresMusicaux)) {
            $this->genresMusicaux[] = $genresMusicaux;
        }

        return $this;
    }
    
    public function removeGenreMusical(GenreMusical $genresMusicaux): self
    {
        $this->genresMusicaux->removeElement($genresMusicaux);

        return $this;
    }

    
    public function getNom(): string
    {
        return $this->nom;
    }

    
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCategoriePrincipale(): ?GenreMusical
    {
        return $this->categoriePrincipale;
    }

    public function setCategoriePrincipale(GenreMusical $genreMusical): self
    {
        $this->categoriePrincipale = $genreMusical;
        $genreMusical->addCategorieMusicale($this);

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->getCategoriePrincipale()->addCategorieMusicale($this);
    }
}
