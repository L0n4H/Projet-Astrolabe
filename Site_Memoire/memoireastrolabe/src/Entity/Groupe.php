<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
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
 * @ORM\Entity(repositoryClass=GroupeRepository::class)
 * @Vich\Uploadable
 */
class Groupe
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
     * @ORM\Column(type="string", length="10", nullable=true)
     */
    private $dateCreation;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="text", nullable=true)
     */
    private $biographie;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $image;

    /**
     * @OA\Property(type="string")
     * @Vich\UploadableField(mapping="groupe_images", fileNameProperty="image")
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
     * @ORM\ManyToMany(targetEntity=Etiquette::class, inversedBy="groupes")
     */
    private $etiquettes;

    /**
     * @OA\Property(ref=@Model(type=GenreMusical::class))
     * @ORM\ManyToMany(targetEntity=GenreMusical::class, inversedBy="groupes")
     */
    private $genresMusicaux;

    /**
     * @OA\Property(ref=@Model(type=Label::class))
     * @ORM\ManyToMany(targetEntity=Label::class, inversedBy="groupes")
     */
    private $labels;

    /**
     * @OA\Property(ref=@Model(type=Nationalite::class))
     * @ORM\ManyToMany(targetEntity=Nationalite::class, inversedBy="groupes")
     * @ORM\JoinTable(name="groupe_nationalite",
     *     joinColumns={@ORM\JoinColumn(name="groupe_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="nationalite_id", referencedColumnName="id")}
     * )
     */
    private $nationalites;

    /**
     * @OA\Property(ref=@Model(type=Passage::class))
     * @ORM\OneToMany(targetEntity=Passage::class, mappedBy="groupe", cascade={"remove"})
     */
    private $passages;

    /**
     * @OA\Property(ref=@Model(type=Membre::class))
     * @ORM\OneToMany(targetEntity=Membre::class, mappedBy="groupe", cascade={"remove","persist"})
     */
    private $membres;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="groupes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\ManyToMany(targetEntity=Ressource::class, inversedBy="groupes",cascade={"remove","persist"})
     */
    private $ressources;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImage;
    
    public function __construct()
    {
        $this->etiquettes = new ArrayCollection();
        $this->genresMusicaux = new ArrayCollection();
        $this->labels = new ArrayCollection();
        $this->nationalites = new ArrayCollection();
        $this->passages = new ArrayCollection();
        $this->membres = new ArrayCollection();
        $this->ressources = new ArrayCollection();
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
    
    public function getDateCreation(): ?string
    {
        return $this->dateCreation;
    }
    
    public function setDateCreation(?string $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
    
    public function getBiographie(): ?string
    {
        return $this->biographie;
    }
    
    public function setBiographie(?string $biographie): self
    {
        $this->biographie = $biographie;

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
    
    public function getImage(): ?string 
    {
        return $this->image;
    }

    /**
     *   * @return Collection<int, Etiquette>
     */
    public function getEtiquettes(): Collection
    {
        return $this->etiquettes;
    }

    public function getVisibleEtiquettes() : Array 
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

    /**
     *   * @return Collection<int, GenreMusical>
     */
    public function getGenresMusicaux(): Collection
    {
        return $this->genresMusicaux;
    }

    public function getVisibleGenresMusicaux() : Array 
    {
        $arrayGenresMusicaux = [];

        foreach ($this->genresMusicaux as $genreMusical) {
            if($genreMusical->getEtat()->getId() == 1) {
                $arrayGenresMusicaux[] = $genreMusical;
            }
        }

        return $arrayGenresMusicaux;
    }
    
    public function addGenreMusical(GenreMusical $genresMusicaux): self
    {
        if (!$this->genresMusicaux->contains($genresMusicaux)) {
            $this->genresMusicaux[] = $genresMusicaux;
        }

        return $this;
    }
    
    public function removeGenreMusical(GenreMusical $genresMusicaux): self
    {
        $this->genresMusicaux->removeElement($genresMusicaux);

        return $this;
    }

    /**
     *   * @return Collection<int, Label>
     */
    public function getLabels(): Collection
    {
        return $this->labels;
    }
    
    public function addLabel(Label $label): self
    {
        if (!$this->labels->contains($label)) {
            $this->labels[] = $label;
        }

        return $this;
    }
    
    public function removeLabel(Label $label): self
    {
        $this->labels->removeElement($label);

        return $this;
    }
    
    /**
     * @return Collection<int, Nationalite>
     */
    public function getNationalites(): Collection
    {
        return $this->nationalites;
    }

    /**
     * @return Nationalite[]
     */
    public function getVisibleNationalites(): array
    {
        $nationalites = [];

        foreach ($this->nationalites as $nationalite) {
            if ($nationalite->getEtat() && $nationalite->getEtat()->getId() === 1) {
                $nationalites[] = $nationalite;
            }
        }

        return $nationalites;
    }

    /**
     * @return string[]
     */
    public function getVisibleNationaliteNames(): array
    {
        return array_map(
            static function (Nationalite $nationalite): ?string {
                return $nationalite->getNom();
            },
            $this->getVisibleNationalites()
        );
    }

    public function getNationalite(): ?Nationalite
    {
        return $this->nationalites->first() ?: null;
    }

    public function getVisibleNationalite(): ?Nationalite
    {
        return $this->getVisibleNationalites()[0] ?? null;
    }

    public function addNationalite(Nationalite $nationalite): self
    {
        if (!$this->nationalites->contains($nationalite)) {
            $this->nationalites[] = $nationalite;
            $nationalite->addGroupe($this);
        }

        return $this;
    }

    public function removeNationalite(Nationalite $nationalite): self
    {
        if ($this->nationalites->removeElement($nationalite)) {
            $nationalite->removeGroupe($this);
        }

        return $this;
    }

    public function setNationalite(?Nationalite $nationalite): self
    {
        if ($nationalite === null) {
            foreach ($this->nationalites->toArray() as $currentNationalite) {
                $this->removeNationalite($currentNationalite);
            }
        } else {
            $this->addNationalite($nationalite);
        }

        return $this;
    }

    /**
     *   * @return Collection<int, Passage>
     */
    public function getPassages(): Collection
    {
        return $this->passages;
    }

    public function getVisiblePassages() : Array 
    {
        $arrayPassages = [];

        foreach ($this->passages as $passage) {
            if($passage->getVisibleGroupe() != null) {
                $arrayPassages[] = $passage;
            }
        }

        return $arrayPassages;
    }
    public function getVisibleLabels() : Array 
    {
        $arrayLabels = [];

        foreach ($this->labels as $label) {
            if($label->getVisibleGroupes() != null) {
                $arrayLabels[] = $label;
            }
        }

        return $arrayLabels;
    }
    public function addPassage(Passage $passage): self
    {
        if (!$this->passages->contains($passage)) {
            $this->passages[] = $passage;
            $passage->setGroupe($this);
        }

        return $this;
    }
    
    public function removePassage(Passage $passage): self
    {
        if ($this->passages->removeElement($passage)) {
            // set the owning side to null (unless already changed)
            if ($passage->getGroupe() === $this) {
                $passage->setGroupe(null);
            }
        }

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
            $membre->setGroupe($this);
        }

        return $this;
    }
    
    public function removeMembre(Membre $membre): self
    {
        if ($this->membres->removeElement($membre)) {
            if ($membre->getGroupe() === $this) {
                $membre->setGroupe(null);
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

    /**
     * @return Collection<int, Ressource>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function getVisibleRessources() : Array 
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
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        $this->ressources->removeElement($ressource);

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
