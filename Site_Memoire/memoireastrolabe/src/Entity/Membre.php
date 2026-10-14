<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


/**
 * @ORM\Entity(repositoryClass=MembreRepository::class)
 */
class Membre
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
     * @OA\Property(ref=@Model(type=Musicien::class))
     * @ORM\ManyToOne(targetEntity=Musicien::class, inversedBy="membres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $musicien;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="membres")
     * @ORM\JoinColumn(nullable=true)
     */
    private $groupe;

    /**
     * @OA\Property(ref=@Model(type=Instrument::class))
     * @ORM\ManyToMany(targetEntity=Instrument::class, inversedBy="membres")
     * @ORM\JoinColumn(nullable=true)
     */
    private $instruments;
  
    /**
     * @ORM\Column(type="boolean")
     */
    private $actif;
    

    public function __construct()
    {
        $this->instruments = new ArrayCollection();
    }

    public function __toString()
    {
        return "( " . $this->groupe . " ) " . $this->musicien;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMusicien(): ?Musicien
    {
        return $this->musicien;
    }

    public function getVisibleMusicien() : ?Musicien
    {
        return ($this->musicien->getEtat()->getId() == 1) ? $this->musicien : null;
    }

    public function setMusicien(?Musicien $musicien): self
    {
        $this->musicien = $musicien;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function getVisibleGroupe() : ?Groupe
    {
        return ($this->groupe->getEtat()->getId() == 1) ? $this->groupe : null;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * @return Collection<int, Instrument>
     */
    public function getInstruments(): Collection
    {
        return $this->instruments;
    }

    public function getVisibleInstruments() : Array 
    {
        $arrayMusicien = [];

        foreach ($this->instruments as $instrument) {
            if($instrument->getEtat()->getId() == 1) {
                $arrayMusicien[] = $instrument;
            }
        }

        return $arrayMusicien;
    }

    public function addInstrument(Instrument $instrument): self
    {
        if (!$this->instruments->contains($instrument)) {
            $this->instruments[] = $instrument;
        }

        return $this;
    }

    public function removeInstrument(Instrument $instrument): self
    {
        $this->instruments->removeElement($instrument);

        return $this;
    }
    
    public function getActif() : bool
    {
        return $this->actif;
    }
    public function setActif(bool $actif) : self
    {
        $this->actif = $actif;
        return $this;
    }
}
