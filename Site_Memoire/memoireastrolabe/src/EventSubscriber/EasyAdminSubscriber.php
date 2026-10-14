<?php
namespace App\EventSubscriber;

use App\Entity\CategorieMusicale;
use App\Entity\Groupe;
use App\Entity\Membre;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterCrudActionEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityBuiltEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityDeletedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityUpdatedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeCrudActionEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private EntityManagerInterface $em;
    private UserPasswordHasherInterface $encoder;

    public function __construct(EntityManagerInterface $em, UserPasswordHasherInterface $encoder)
    {
        $this->em = $em;
        $this->encoder = $encoder;
    }

    public static function getSubscribedEvents()
    {
        return [
            AfterEntityUpdatedEvent::class => ['afterEntityUpdatedEvent'],
            BeforeEntityPersistedEvent::class => ['beforeEntityPersistedEvent']
        ];
    }

    public function afterEntityUpdatedEvent($event)
    {
        $entity = $event->getEntityInstance();

        if ( $entity instanceof User )
        {
            if ( $entity->getPlainPassword() )
            {
                $encodedPwd = $this->encoder->hashPassword($entity, $entity->getPlainPassword());
                $entity->setPassword($encodedPwd);
                $entity->setPlainPassword('');
                $this->em->flush();
            }
        }
        elseif ( $entity instanceof CategorieMusicale )
        {
            $entity->getCategoriePrincipale()->addCategorieMusicale($entity);
            $this->em->flush();
        }
        
        return;
    }


    public function beforeEntityPersistedEvent($event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof User)) {
            return;
        }

        $encodedPwd = $this->encoder->hashPassword($entity, $entity->getPlainPassword());
        $entity->setPassword($encodedPwd);
        $entity->setPlainPassword('');
    }
}