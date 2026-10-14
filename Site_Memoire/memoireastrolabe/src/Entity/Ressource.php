<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
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
 * @ORM\Entity(repositoryClass=RessourceRepository::class)
 * @Vich\Uploadable
 */
class Ressource
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
     */
    private $lien;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $nom;

    /**
     * @OA\Property(ref=@Model(type=ressources::class))
     * @Vich\UploadableField(mapping="ressources", fileNameProperty="nom")
     * @var File|null
     */
    private $file;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @OA\Property(ref=@Model(type=TypeRessource::class))
     * @ORM\ManyToOne(targetEntity=TypeRessource::class, inversedBy="ressources")
     * @ORM\JoinColumn(nullable=true)
     */
    private $type;

    /**
     * @OA\Property(ref=@Model(type=Etiquette::class))
     * @ORM\ManyToMany(targetEntity=Etiquette::class, inversedBy="ressources")
     */
    private $etiquettes;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\ManyToMany(targetEntity=Evenement::class, mappedBy="ressources")
     */
    private $evenements;

    /**
     * @OA\Property(ref=@Model(type=Etat::class))
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="ressources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $credits;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="ressources")
     */
    private $groupes;

    public function __construct()
    {
        $this->etiquettes = new ArrayCollection();
        $this->evenements = new ArrayCollection();
        $this->groupes = new ArrayCollection();
    }

    public function __toString() : string
    {
        $str = $this->type;
        if ( $this->titre ) $str .= " - " . $this->titre;
        return $str;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function setFile(?File $file = null)
    {
        $this->file = $file;

        if ($file) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getFile():?File
    {
        return $this->file;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getType(): ?TypeRessource
    {
        return $this->type;
    }

    public function setType(?TypeRessource $type): self
    {
        $this->type = $type;

        return $this;
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
        $arrayEtiquettes = array();

        foreach($this->etiquettes as $etiquette)
            if($etiquette->getEtat()->getId() == 1) $arrayEtiquettes[] = $etiquette;
        
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

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }
  
    public function getVisibleEvenements(): Array
    {
        $arrayEvenements = array();

        foreach($this->evenements as $evenement)
            if($evenement->getEtat()->getId() == 1) $arrayEvenements[] = $evenement;
        
        return $arrayEvenements;
    }


    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->addRessource($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            $evenement->removeRessource($this);
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCredits(): ?string
    {
        return $this->credits;
    }

    public function setCredits(?string $credits): self
    {
        $this->credits = $credits;

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
        $arraygroupes = array();

        foreach($this->groupes as $groupe)
            if($groupe->getEtat()->getId() == 1) $arraygroupes[] = $groupe;
        
        return $arraygroupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addRessource($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeRessource($this);
        }

        return $this;
    }
}
