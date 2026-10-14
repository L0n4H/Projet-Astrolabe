<?php

namespace App\Entity;

use App\Repository\InstrumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * @ORM\Entity(repositoryClass=InstrumentRepository::class)
 */
class Instrument
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
     * @OA\Property(ref=@Model(type=Membre::class))
     * @ORM\ManyToMany(targetEntity=Membre::class, mappedBy="instruments")
     */
    private $membres;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="instruments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;
    
    public function __construct()
    {
        $this->membres = new ArrayCollection();
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
     *   * @return Collection<int, Membre>
     */
    public function getMembres(): Collection
    {
        return $this->membres;
    }

    public function getVisibleMembres() : Array 
    {
        $arrayMembres = [];

        foreach ($this->membres as $membre) {
            if($membre->getVisibleGroupe() != null && $membre->getVisibleMusicien() != null) {
                $arrayMembres[] = $membre;
            }
        }

        return $arrayMembres;
    }
    
    public function addMembre(Membre $membre): self
    {
        if (!$this->membres->contains($membre)) {
            $this->membres[] = $membre;
            $membre->addInstrument($this);
        }

        return $this;
    }
    
    public function removeMembre(Membre $membre): self
    {
        if ($this->membres->removeElement($membre)) {
            $membre->removeInstrument($this);
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
