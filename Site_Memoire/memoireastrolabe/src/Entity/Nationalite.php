<?php

namespace App\Entity;

use App\Repository\NationaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Validator as validator;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


/**
 * @ORM\Entity(repositoryClass=NationaliteRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Nationalite
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
     * @OA\Property(type="string", maxLength=50)
     * @ORM\Column(type="string", length=50, unique=true)
     * @validator\ContainsLessThanString
     */
    private $nom;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="nationalites")
     */
    private $groupes;

    /**
     * @OA\Property(ref=@Model(type=Musicien::class))
     * @ORM\OneToMany(targetEntity=Musicien::class, mappedBy="nationalite")
     */
    private $musiciens;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="nationalites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $codeISO;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->musiciens = new ArrayCollection();
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
     * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function getVisibleGroupes(): Array 
    {
        $arrayGroupes = [];

        foreach ($this->groupes as $groupe) {
            if($groupe->getEtat()->getId() == 1) {
                $arrayGroupes[] = $groupe;
            }
        }

        return $arrayGroupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addNationalite($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeNationalite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Musicien>
     */
    public function getMusiciens(): Collection
    {
        return $this->musiciens;
    }

    public function getVisibleMusiciens() : Array 
    {
        $arrayMusiciens = [];

        foreach ($this->musiciens as $musicien) {
            if($musicien->getEtat()->getId() == 1) {
                $arrayMusiciens[] = $musicien;
            }
        }

        return $arrayMusiciens;
    }

    public function addMusicien(Musicien $musicien): self
    {
        if (!$this->musiciens->contains($musicien)) {
            $this->musiciens[] = $musicien;
            $musicien->setNationalite($this);
        }

        return $this;
    }

    public function removeMusicien(Musicien $musicien): self
    {
        if ($this->musiciens->removeElement($musicien)) {
            // set the owning side to null (unless already changed)
            if ($musicien->getNationalite() === $this) {
                $musicien->setNationalite(null);
            }
        }

        return $this;
    }

    /**
     * @ORM\PreRemove
     */
    public function resetMusiciens()
    {
        foreach( $this->musiciens as $musicien )
        {
            $musicien->setNationalite(null);
        }
    }

    /**
     * @ORM\PreRemove
     */
    public function resetGroupes()
    {
        foreach ($this->groupes->toArray() as $groupe) {
            $groupe->removeNationalite($this);
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

    public function getCodeISO(): ?string
    {
        return $this->codeISO;
    }

    public function setCodeISO(string $codeISO): self
    {
        $this->codeISO = $codeISO;

        return $this;
    }
}
