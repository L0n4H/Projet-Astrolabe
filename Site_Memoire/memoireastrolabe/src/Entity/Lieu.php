<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * @ORM\Entity(repositoryClass=LieuRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Lieu
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
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @OA\Property(type="string", maxLength=5)
     * @ORM\Column(type="string", length=5)
     */
    private $CP;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nomBatiment;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="lieu")
     */
    private $evenements;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="lieux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;
    
    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        $string = "(" . $this->CP . ") " . $this->ville;

        if ( $this->nomBatiment ) $string .= " - " . $this->nomBatiment;
        if ( $this->adresse ) $string .= " - " . $this->adresse;

        return $string;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getVille(): ?string
    {
        return $this->ville;
    }
    
    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
    
    public function getCP(): ?string
    {
        return $this->CP;
    }
    
    public function setCP(string $CP): self
    {
        $this->CP = $CP;

        return $this;
    }
    
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    
    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
    
    public function getNomBatiment(): ?string
    {
        return $this->nomBatiment;
    }
    
    public function setNomBatiment(?string $nomBatiment): self
    {
        $this->nomBatiment = $nomBatiment;

        return $this;
    }
    /**
     *   * @return Collection<int, Evenement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function getVisibleEvenements() : Array
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
            $evenement->setLieu($this);
        }

        return $this;
    }
    
    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getLieu() === $this) {
                $evenement->setLieu(null);
            }
        }

        return $this;
    }

    /**
     *   * @ORM\PreRemove
     */
    public function resetEvenements()
    {
        foreach( $this->evenements as $evenement )
        {
            $evenement->setLieu(null);
        }
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
