<?php

namespace App\Entity;

use App\Repository\TypeRessourceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Cache\ArrayResult;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRessourceRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class TypeRessource
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity=Ressource::class, mappedBy="type")
     */
    private $ressources;

    public function __construct()
    {
        $this->ressources = new ArrayCollection();
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
     * @return Collection<int, Ressource>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function getVisibleRessources(): Array
    {
        $arrayRes = array();

        foreach($this->ressources as $res)
            if($res->getEtat()->getId() == 1) $arrayRes[] = $res;

        return $arrayRes;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->setType($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            // set the owning side to null (unless already changed)
            if ($ressource->getType() === $this) {
                $ressource->setType(null);
            }
        }

        return $this;
    }

    /**
     * @ORM\PreRemove
     */
    public function resetRessources()
    {
        foreach( $this->ressources as $ressource )
        {
            $ressource->setType(null);
        }
    }
}
