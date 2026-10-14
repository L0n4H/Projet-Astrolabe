<?php

namespace App\Entity;

use App\Repository\TypeEvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use PhpParser\Node\Expr\Cast\Array_;

/**
 * @ORM\Entity(repositoryClass=TypeEvenementRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class TypeEvenement
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
    private $label;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="typeEvenement")
     */
    private $evenements;

    /**
     * @OA\Property(ref=@Model(type=Etat::class))
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="typeEvenements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }

    public function __toString() : string
    {
        return $this->label;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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
        $arrayEvents = array();
        foreach($this->evenements as $event)
            if($event->getEtat()->getId() == 1 ) $arrayEvents[] = $event;
        return $arrayEvents;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->setTypeEvenement($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getTypeEvenement() === $this) {
                $evenement->setTypeEvenement(null);
            }
        }

        return $this;
    }

    /**
     * @ORM\PreRemove
     */
    public function resetEvenements()
    {
        foreach( $this->evenements as $evenement )
        {
            $evenement->setTypeEvenement(null);
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
