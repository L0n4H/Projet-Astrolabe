<?php

namespace App\Entity;

use App\Repository\GenreMusicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * @ORM\Entity(repositoryClass=GenreMusicalRepository::class)
 */
class GenreMusical
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
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="genresMusicaux")
     */
    private $groupes;

    /**
     * @OA\Property(ref=@Model(type=CategorieMusicale::class))
     * @ORM\ManyToMany(targetEntity=CategorieMusicale::class, mappedBy="genresMusicaux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieMusicales;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\ManyToMany(targetEntity=Evenement::class, mappedBy="genresMusicaux")
     */
    private $evenements;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="genresMusicaux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity=CategorieMusicale::class, mappedBy="categoriePrincipale")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorieMusicale;
    
    public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->categorieMusicales = new ArrayCollection();
        $this->evenements = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        return $this->nom;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getNom(): ?string
    {
        return $this->nom;
    }
    
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     *   * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function getVisibleGroupes() : Array 
    {
        $arrayGroupe = []; 

        foreach ($this->groupes as $groupe) {
            if($groupe->getEtat()->getId() == 1) {
                $arrayGroupe[] = $groupe;
            }
        }

        return $arrayGroupe;
    }
    
    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addGenreMusical($this);
        }

        return $this;
    }
    
    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeGenreMusical($this);
        }

        return $this;
    }

    /**
     *   * @return Collection<int, CategorieMusicale>
     */
    public function getCategorieMusicales(): Collection
    {
        return $this->categorieMusicales;
    }
    /**
    *  */
    public function addCategorieMusicale(CategorieMusicale $categorieMusicale): self
    {
        if (!$this->categorieMusicales->contains($categorieMusicale)) {
            $this->categorieMusicales[] = $categorieMusicale;
            $categorieMusicale->addGenreMusical($this);
        }

        return $this;
    }

    public function removeCategorieMusicale(CategorieMusicale $categorieMusicale): self
    {
        if ($this->categorieMusicales->removeElement($categorieMusicale)) {
            $categorieMusicale->removeGenreMusical($this);
        }

        return $this;
    }

    /**
     *   * @return Collection<int, Evenement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function getVisibleEvenements(): Array 
    {
        $arrayEvenements = [];

        foreach ($this->evenements as $evenement) {
            if($evenement->getEtat()->getId() == 1) {
                $arrayEvenements[] = $evenement;
            }
        }

        return $arrayEvenements;
    }
    
    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->addGenreMusical($this);
        }

        return $this;
    }
    
    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            $evenement->removeGenreMusical($this);
        }

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    public function setEtat(?Etat $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
