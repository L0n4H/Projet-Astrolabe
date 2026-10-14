<?php
namespace App\EventSubscriber;

use App\Entity\Membre;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class MembreListener
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    public function postUpdate(Membre $membre, LifecycleEventArgs $event): void
    {
        if ( !$membre->getGroupe() || !$membre->getMusicien() ) $this->em->remove($membre);
    }
}