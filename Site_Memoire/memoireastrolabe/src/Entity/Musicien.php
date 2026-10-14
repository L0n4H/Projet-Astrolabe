<?php

namespace App\Entity;

use App\Repository\MusicienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use App\Validator as validator; 
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


/**
 * @ORM\Entity(repositoryClass=MusicienRepository::class)
 * @Vich\Uploadable
 */
class Musicien
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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @validator\ContainsLessThanString
     */
    private $nomScene;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @validator\ContainsLessThanString
     */
    private $nom;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @validator\ContainsLessThanString
     */
    private $prenom;

    /**
     * @OA\Property(type="string", maxLength=10)
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $dateNaissance;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $image;

    /**
     * @OA\Property(type="string")
     * @Vich\UploadableField(mapping="musicien_images", fileNameProperty="image")
     * @var File|null
     */
    private $imageFile;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @OA\Property(ref=@Model(type=Etiquette::class))
     * @ORM\ManyToMany(targetEntity=Etiquette::class, inversedBy="musiciens")
     */
    private $etiquettes;

    /**
     * @OA\Property(ref=@Model(type=Nationalite::class))
     * @ORM\ManyToOne(targetEntity=Nationalite::class, inversedBy="musiciens")
     * @ORM\JoinColumn(nullable=true)
     */
    private $nationalite;

    /**
     * @OA\Property(ref=@Model(type=Membre::class))
     * @ORM\OneToMany(targetEntity=Membre::class, mappedBy="musicien", cascade={"remove"})
     */
    private $membres;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="musiciens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImage;

    public function __construct()
    {
        $this->etiquettes = new ArrayCollection();
        $this->membres = new ArrayCollection();
    }

    public function __toString() : string
    {
        if ( $this->nomScene ) return $this->nomScene;
        else return $this->nom . " " . $this->prenom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomScene(): ?string
    {
        return $this->nomScene;
    }

    public function setNomScene(?string $nomScene): self
    {
        $this->nomScene = $nomScene;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function setImageFile(?File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile() :?File
    {
        return $this->imageFile;
    }

    public function setImage(?string $image)
    {
        $this->image = $image;
    }

    public function getImage():?string
    {
        return $this->image;
    }

    /**
     * @return Collection<int, Etiquette>
     */
    public function getEtiquettes(): Collection
    {
        return $this->etiquettes;
    }

    public function getVisibleEtiquettes(): Array 
    {
        $arrayEtiquettes = [];

        foreach ($this->etiquettes as $etiquette) {
            if($etiquette->getEtat()->getId() == 1) {
                $arrayEtiquettes[] = $etiquette;
            }
        }

        return $arrayEtiquettes;
    }

    public function addEtiquette(Etiquette $etiquette): self
    {
        if (!$this->etiquettes->contains($etiquette)) {
            $this->etiquettes[] = $etiquette;
        }

        return $this;
    }

    public function removeEtiquette(Etiquette $etiquette): self
    {
        $this->etiquettes->removeElement($etiquette);

        return $this;
    }

    public function getNationalite(): ?Nationalite
    {
        return $this->nationalite;
    }

    public function getVisibleNationalite(): ?Nationalite
    {
        return $this->nationalite->getEtat()->getId() != 1 ? $this->nationalite : null;
    }

    public function setNationalite(?Nationalite $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return Collection<int, Membre>
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
            $membre->setMusicien($this);
        }

        return $this;
    }

    public function removeMembre(Membre $membre): self
    {
        if ($this->membres->removeElement($membre)) {
            // set the owning side to null (unless already changed)
            if ($membre->getMusicien() === $this) {
                $membre->setMusicien(null);
            }
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

    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    public function setLienImage(?string $lienImage): self
    {
        $this->lienImage = $lienImage;

        return $this;
    }
}
