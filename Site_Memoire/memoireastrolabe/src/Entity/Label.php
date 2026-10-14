<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * @ORM\Entity(repositoryClass=LabelRepository::class)
 * @Vich\Uploadable
 */
class Label
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
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255)
     */
    private $dateCreation;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $logo;

    /**
     * @OA\Property(type="string")
     * @Vich\UploadableField(mapping="label_images", fileNameProperty="logo")
     * @var File|null
     */
    private $logoFile;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="labels")
     */
    private $groupes;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="labels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienLogo;
       
    public function __construct()
    {
        $this->groupes = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        return $this->nom . " (" . $this->dateCreation . ")";
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
    
    public function getDateCreation(): ?string
    {
        return $this->dateCreation;
    }
    
    public function setDateCreation(string $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
    
    public function setLogoFile(?File $logo = null)
    {
        $this->logoFile = $logo;

        if ($logo) {
            $this->updatedAt = new \DateTime('now');
        }
    }
    
    public function getLogoFile():?File
    {
        return $this->logoFile;
    }

    public function setLogo(?string $logo)
    {
        $this->logo = $logo;
    }
    
    public function getLogo() : ?string
    {
        return $this->logo;
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
            $groupe->addLabel($this);
        }

        return $this;
    }
    
    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeLabel($this);
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

    public function getLienLogo(): ?string
    {
        return $this->lienLogo;
    }

    public function setLienLogo(?string $lienLogo): self
    {
        $this->lienLogo = $lienLogo;

        return $this;
    }

}
