<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FormationFixtures extends Fixture
{
	public function load(ObjectManager $manager)
    {
        $formationDev = new Formation();
        $formationReseau = new Formation();
        $formationDepannage = new Formation();

        $formationDepannage->setNom("Dépannage informatique");
        $formationDev->setNom("Développement");
        $formationReseau->setNom("Réseau");

        $manager->persist($formationDepannage);
        $manager->persist($formationDev);
        $manager->persist($formationReseau);
        $manager->flush();
    }
}
