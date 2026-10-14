<?php

namespace App\Entity;

use App\Repository\PassageRepository;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * @ORM\Entity(repositoryClass=PassageRepository::class)
 */
class Passage
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
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @OA\Property(type="string")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @OA\Property(ref=@Model(type=Groupe::class))
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="passages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $groupe;

    /**
     * @OA\Property(ref=@Model(type=Evenement::class))
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="passages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $evenement;

    public function __toString()
    {
         
        $strRet =  $this->evenement . " | " . $this->groupe;
        if(!is_null($this->dateDebut) && !is_null($this->dateFin)) 
        {
            $strRet .=" ( " . $this->dateDebut->format("d/m/Y à H:i") . " - " . $this->dateFin->format("d/m/Y à H:i") . " )" ;
        }  
        return  $strRet;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function getVisibleGroupe() {
        return ($this->groupe->getEtat()->getId() == 1) ? $this->groupe : null;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function getVisibleEvenement(): ?Evenement 
    {
        return ($this->evenement->getEtat()->getId() == 1) ? $this->evenement : null;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
