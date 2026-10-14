<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 * @Vich\Uploadable
 */
class Evenement
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
     * @OA\Property(ref=@Model(type=TypeEvenement::class))
     * @ORM\ManyToOne(targetEntity=TypeEvenement::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeEvenement;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @OA\Property(type="string", maxLength=255)
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $image;

    /**
     * @OA\Property(type="string")
     * @Vich\UploadableField(mapping="evenement_images", fileNameProperty="image")
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
     * @ORM\ManyToMany(targetEntity=Etiquette::class, inversedBy="evenements")
     */
    private $etiquettes;

    /**
     * @OA\Property(ref=@Model(type=Ressource::class))
     * @ORM\ManyToMany(targetEntity=Ressource::class, inversedBy="evenements", cascade={"remove","persist"})
     */
    private $ressources;

    /**
     * @OA\Property(ref=@Model(type=Lieu::class))
     * @ORM\ManyToOne(targetEntity=Lieu::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lieu;

    /**
     * @ORM\OneToMany(targetEntity=Passage::class, mappedBy="evenement", cascade={"persist", "remove"})
     */
    private $passages;

    /**
     * @OA\Property(ref=@Model(type=GenreMusical::class))
     * @ORM\ManyToMany(targetEntity=GenreMusical::class, inversedBy="evenements")
     */
    private $genresMusicaux;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="evenements")
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
        $this->ressources = new ArrayCollection();
        $this->passages = new ArrayCollection();
        $this->genresMusicaux = new ArrayCollection();
    }
    
    public function __toString() : string
    {
        return $this->titre . " à " . $this->lieu->getVille();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getTypeEvenement(): ?TypeEvenement
    {
        return $this->typeEvenement;
    }

    public function getVisibleTypeEvenements(): ?TypeEvenement 
    {
        return (!is_null($this->typeEvenement) && $this->typeEvenement->getEtat()->getId() == 1) ? $this->typeEvenement : null ;
    }
    
    public function setTypeEvenement(?TypeEvenement $typeEvenement): self
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }
    
    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }
    
    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
    
    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }
    
    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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
    
    public function getTitre(): ?string
    {
        return $this->titre;
    }
    
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     *   * @return Collection<int, Etiquette>
     */
    public function getEtiquettes(): Collection
    {
        return $this->etiquettes;
    }

    public function getVisibleEtiquettes(): Array 
    {
        $arrayEtiquettes = [];

        foreach ($this->etiquettes as $etiquette) {
            if($etiquette->getEtat()->getId() == 1){
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
     *   * @return Collection<int, Ressource>
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
    
    public function getLieu(): ?Lieu
    {
        return $this->lieu;
    }

    public function getVisibleLieu(): ?Lieu {
        return ($this->lieu->getEtat()->getId() == 1) ? $this->lieu : null;
    }
    
    public function setLieu(?Lieu $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     *   * @return Collection<int, Passage>
     */
    public function getPassages(): Collection
    {
        return $this->passages;
    }

    public function getVisiblePassages() {
        $arrayPassages = [];

        foreach ($this->passages as $passage) {
            if($passage->getVisibleGroupe() != null) {
                $arrayPassages[] = $passage;
            }
        }

        return $arrayPassages;
    }
    
    public function addPassage(Passage $passage): self
    {
        if (!$this->passages->contains($passage)) {
            $this->passages[] = $passage;
            $passage->setEvenement($this);
        }

        return $this;
    }
    
    public function removePassage(Passage $passage): self
    {
        if ($this->passages->removeElement($passage)) {
            // set the owning side to null (unless already changed)
            if ($passage->getEvenement() === $this) {
                $passage->setEvenement(null);
            }
        }

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
    
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
    
    public function getImage():?string
    {
        return $this->image;
    }

    /**
     *   * @return Collection<int, GenreMusical>
     */
    public function getGenresMusicaux(): Collection
    {
        return $this->genresMusicaux;
    }

    public function getVisibleGenresMusicaux(): Array 
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

    public function setGenresMusicaux(array $genres): self
    {
        $this->genresMusicaux = $genres;

        return $this;
    }
    
    public function removeGenreMusical(GenreMusical $genresMusicaux): self
    {
        $this->genresMusicaux->removeElement($genresMusicaux);

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
