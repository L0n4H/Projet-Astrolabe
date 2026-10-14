<?php

namespace App\Entity;

use App\Repository\EtiquetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use PhpParser\Node\Expr\Cast\Array_;

/**
 * @ORM\Entity(repositoryClass=EtiquetteRepository::class)
 */
class Etiquette
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
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $motsCles;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="etiquettes")
     */
    private $groupes;

    /**
     * @OA\Property(ref=@Model(type=Ressource::class))
     * @ORM\ManyToMany(targetEntity=Ressource::class, mappedBy="etiquettes")
     */
    private $ressources;

    /**
     * @OA\Property(ref=@Model(type=Musicien::class))
     * @ORM\ManyToMany(targetEntity=Musicien::class, mappedBy="etiquettes")
     */
    private $musiciens;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\ManyToMany(targetEntity=Evenement::class, mappedBy="etiquettes")
     */
    private $evenements;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="etiquettes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    
    public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->ressources = new ArrayCollection();
        $this->musiciens = new ArrayCollection();
        $this->evenements = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        return $this->motsCles;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getMotsCles(): ?string
    {
        return $this->motsCles;
    }
    
    public function setMotsCles(string $motsCles): self
    {
        $this->motsCles = $motsCles;

        return $this;
    }

    /**
     *   * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function getVisibleGroupes(): Array 
    {
        $arrayGroupes = [];

        foreach ($this->groupes as $groupe) {
            if($groupe->getEtat()->getId() == 1){
                $arrayGroupes[] = $groupe;
            }
        }

        return $arrayGroupes;
    }

    
    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addEtiquette($this);
        }

        return $this;
    }

    
    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeEtiquette($this);
        }

        return $this;
    }

    /**
     *   * @return Collection<int, Ressource>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }
    /**
     *   * @return Collection<int, Ressource>
     */
    public function getVisibleRessources(): Array
    {
        $arrayRessources = [];

        foreach ($this->ressources as $ressource) {
            if($ressource->getEtat()->getId() == 1){
                $arrayRessources[] = $ressource;
            }
        }

        return $arrayRessources;
    }

    
    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->addEtiquette($this);
        }

        return $this;
    }
    
    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            $ressource->removeEtiquette($this);
        }

        return $this;
    }

    /**
     *   * @return Collection<int, Musicien>
     */
    public function getMusiciens(): Collection
    {
        return $this->musiciens;
    }

    public function getVisibleMusiciens(): Array 
    {
        $arrayMusiciens = [];

        foreach ($this->musiciens as $musicien) {
            if($musicien->getEtat()->getId() == 1){
                $arrayMusiciens[] = $musicien;
            }
        }

        return $arrayMusiciens;
    }
     
    public function addMusicien(Musicien $musicien): self
    {
        if (!$this->musiciens->contains($musicien)) {
            $this->musiciens[] = $musicien;
            $musicien->addEtiquette($this);
        }

        return $this;
    }
    
    public function removeMusicien(Musicien $musicien): self
    {
        if ($this->musiciens->removeElement($musicien)) {
            $musicien->removeEtiquette($this);
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
            if($evenement->getEtat()->getId() == 1){
                $arrayEvenements[] = $evenement;
            }
        }

        return $arrayEvenements;
    }
    
    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->addEtiquette($this);
        }

        return $this;
    }
    
    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            $evenement->removeEtiquette($this);
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
