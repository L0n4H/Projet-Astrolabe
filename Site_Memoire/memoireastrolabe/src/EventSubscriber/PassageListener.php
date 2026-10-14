<?php
namespace App\EventSubscriber;

use App\Entity\Passage;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class PassageListener
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    public function postUpdate(Passage $passage, LifecycleEventArgs $event): void
    {
        if ( !$passage->getEvenement() ||  !$passage->getGroupe()) $this->em->remove($passage);
    }
}