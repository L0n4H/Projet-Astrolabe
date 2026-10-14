<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\TypeRessource;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

     public function load(ObjectManager $manager): void
    {
        /**
         * ETAT
         */
        $etat1 = new Etat();
        $etat1->setStatut("Validé et affiché");
        $manager->persist($etat1);

        $etat2 = new Etat();
        $etat2->setStatut("Validé et caché");
        $manager->persist($etat2);

        $etat3 = new Etat();
        $etat3->setStatut("En attente de validation");
        $manager->persist($etat3);

        $etat4 = new Etat();
        $etat4->setStatut("Importé et à valider");
        $manager->persist($etat4);

        $etat5 = new Etat();
        $etat5->setStatut("Ressource invalide");
        $manager->persist($etat5);

        /**
         * TYPE RESSOURCE
         */
        $typeRessource = new TypeRessource();
        $typeRessource->setLabel("Image");
        $manager->persist($typeRessource);
        
        $typeRessource3 = new TypeRessource();
        $typeRessource3->setLabel("Lien");
        $manager->persist($typeRessource3);
        
        $typeRessource2 = new TypeRessource();
        $typeRessource2->setLabel("Youtube");
        $manager->persist($typeRessource2);
        
        $typeRessource4 = new TypeRessource();
        $typeRessource4->setLabel("Facebook");
        $manager->persist($typeRessource4);
        
        $typeRessource5 = new TypeRessource();
        $typeRessource5->setLabel("Twitter");
        $manager->persist($typeRessource5);
        
        $typeRessource6 = new TypeRessource();
        $typeRessource6->setLabel("Instagram");
        $manager->persist($typeRessource6);
    }
}
