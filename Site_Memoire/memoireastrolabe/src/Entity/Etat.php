<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;



/**
 * @ORM\Entity(repositoryClass=EtatRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Etat
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
    private $statut;

    /**
     * @OA\Property(ref=@Model(type=Ressource::class))
     * @ORM\OneToMany(targetEntity=Ressource::class, mappedBy="etat")
     */
    private $ressources;

    /**
     * @ORM\OneToMany(targetEntity=Lieu::class, mappedBy="etat")
     */
    private $lieux;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="etat")
     */
    private $evenements;

    /**
     * @ORM\OneToMany(targetEntity=TypeEvenement::class, mappedBy="etat")
     */
    private $typeEvenements;

    /**
     * @ORM\OneToMany(targetEntity=Groupe::class, mappedBy="etat")
     */
    private $groupes;

    /**
     * @ORM\OneToMany(targetEntity=GenreMusical::class, mappedBy="etat")
     */
    private $genresMusicaux;

    /**
     * @ORM\OneToMany(targetEntity=Instrument::class, mappedBy="etat")
     */
    private $instruments;

    /**
     * @ORM\OneToMany(targetEntity=Musicien::class, mappedBy="etat")
     */
    private $musiciens;

    /**
     * @ORM\OneToMany(targetEntity=Nationalite::class, mappedBy="etat")
     */
    private $nationalites;

    /**
     * @ORM\OneToMany(targetEntity=Label::class, mappedBy="etat")
     */
    private $labels;

    /**
     * @ORM\OneToMany(targetEntity=Etiquette::class, mappedBy="etat")
     */
    private $etiquettes;
    
    public function __construct()
    {
        $this->ressources = new ArrayCollection();
        $this->lieux = new ArrayCollection();
        $this->evenements = new ArrayCollection();
        $this->typeEvenements = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->genresMusicaux = new ArrayCollection();
        $this->instruments = new ArrayCollection();
        $this->musiciens = new ArrayCollection();
        $this->nationalites = new ArrayCollection();
        $this->labels = new ArrayCollection();
        $this->etiquettes = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        return $this->statut;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getStatut(): ?string
    {
        return $this->statut;
    }
    
    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
 
    /**
     *   * @return Collection<int, Ressource>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->setEtat($this);
        }

        return $this;
    }
    
    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            // set the owning side to null (unless already changed)
            if ($ressource->getEtat() === $this) {
                $ressource->setEtat(null);
            }
        }

        return $this;
    }

    /**
     *   * @ORM\PreRemove
     */
    public function resetRessources()
    {
        foreach( $this->ressources as $ressource )
        {
            $ressource->setEtat(null);
        }
    }

    /**
     * @return Collection<int, Lieu>
     */
    public function getLieux(): Collection
    {
        return $this->lieux;
    }

    public function addLieux(Lieu $lieux): self
    {
        if (!$this->lieux->contains($lieux)) {
            $this->lieux[] = $lieux;
            $lieux->setEtat($this);
        }

        return $this;
    }

    public function removeLieux(Lieu $lieux): self
    {
        if ($this->lieux->removeElement($lieux)) {
            // set the owning side to null (unless already changed)
            if ($lieux->getEtat() === $this) {
                $lieux->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evenement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->setEtat($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getEtat() === $this) {
                $evenement->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TypeEvenement>
     */
    public function getTypeEvenements(): Collection
    {
        return $this->typeEvenements;
    }

    public function addTypeEvenement(TypeEvenement $typeEvenement): self
    {
        if (!$this->typeEvenements->contains($typeEvenement)) {
            $this->typeEvenements[] = $typeEvenement;
            $typeEvenement->setEtat($this);
        }

        return $this;
    }

    public function removeTypeEvenement(TypeEvenement $typeEvenement): self
    {
        if ($this->typeEvenements->removeElement($typeEvenement)) {
            // set the owning side to null (unless already changed)
            if ($typeEvenement->getEtat() === $this) {
                $typeEvenement->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->setEtat($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            // set the owning side to null (unless already changed)
            if ($groupe->getEtat() === $this) {
                $groupe->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GenreMusical>
     */
    public function getGenresMusicaux(): Collection
    {
        return $this->genresMusicaux;
    }

    public function addGenresMusicaux(GenreMusical $genresMusicaux): self
    {
        if (!$this->genresMusicaux->contains($genresMusicaux)) {
            $this->genresMusicaux[] = $genresMusicaux;
            $genresMusicaux->setEtat($this);
        }

        return $this;
    }

    public function removeGenresMusicaux(GenreMusical $genresMusicaux): self
    {
        if ($this->genresMusicaux->removeElement($genresMusicaux)) {
            // set the owning side to null (unless already changed)
            if ($genresMusicaux->getEtat() === $this) {
                $genresMusicaux->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Instrument>
     */
    public function getInstruments(): Collection
    {
        return $this->instruments;
    }

    public function addInstrument(Instrument $instrument): self
    {
        if (!$this->instruments->contains($instrument)) {
            $this->instruments[] = $instrument;
            $instrument->setEtat($this);
        }

        return $this;
    }

    public function removeInstrument(Instrument $instrument): self
    {
        if ($this->instruments->removeElement($instrument)) {
            // set the owning side to null (unless already changed)
            if ($instrument->getEtat() === $this) {
                $instrument->setEtat(null);
            }
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

    public function addMusicien(Musicien $musicien): self
    {
        if (!$this->musiciens->contains($musicien)) {
            $this->musiciens[] = $musicien;
            $musicien->setEtat($this);
        }

        return $this;
    }

    public function removeMusicien(Musicien $musicien): self
    {
        if ($this->musiciens->removeElement($musicien)) {
            // set the owning side to null (unless already changed)
            if ($musicien->getEtat() === $this) {
                $musicien->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Nationalite>
     */
    public function getNationalites(): Collection
    {
        return $this->nationalites;
    }

    public function addNationalite(Nationalite $nationalite): self
    {
        if (!$this->nationalites->contains($nationalite)) {
            $this->nationalites[] = $nationalite;
            $nationalite->setEtat($this);
        }

        return $this;
    }

    public function removeNationalite(Nationalite $nationalite): self
    {
        if ($this->nationalites->removeElement($nationalite)) {
            // set the owning side to null (unless already changed)
            if ($nationalite->getEtat() === $this) {
                $nationalite->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Label>
     */
    public function getLabels(): Collection
    {
        return $this->labels;
    }

    public function addLabel(Label $label): self
    {
        if (!$this->labels->contains($label)) {
            $this->labels[] = $label;
            $label->setEtat($this);
        }

        return $this;
    }

    public function removeLabel(Label $label): self
    {
        if ($this->labels->removeElement($label)) {
            // set the owning side to null (unless already changed)
            if ($label->getEtat() === $this) {
                $label->setEtat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Etiquette>
     */
    public function getEtiquettes(): Collection
    {
        return $this->etiquettes;
    }

    public function addEtiquette(Etiquette $etiquette): self
    {
        if (!$this->etiquettes->contains($etiquette)) {
            $this->etiquettes[] = $etiquette;
            $etiquette->setEtat($this);
        }

        return $this;
    }

    public function removeEtiquette(Etiquette $etiquette): self
    {
        if ($this->etiquettes->removeElement($etiquette)) {
            // set the owning side to null (unless already changed)
            if ($etiquette->getEtat() === $this) {
                $etiquette->setEtat(null);
            }
        }

        return $this;
    }
}