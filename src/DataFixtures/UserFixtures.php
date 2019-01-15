<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
	private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $useradmin = new User();
        $userjeune = new User();
        $userpartenaire = new User();
        $roles = array(array('ROLE_ADMINISTRATEUR'), array('ROLE_JEUNE'), array('ROLE_PARTENAIRE'));

        $useradmin->setNom("Keita");
        $useradmin->setPrenom("Cheik-Siramakan");
        $useradmin->setUsername();
        $useradmin->setSIRET(0);
        $useradmin->setRoles(0);
        $useradmin->setPassword($this->passwordEncoder->encodePassword(
        	$useradmin,
            'motdepasse'
         ));
        $useradmin->setTelephone("0605557802");
        $useradmin->setEmail("chesirkei@hotmail.fr");
        $useradmin->setAdresse("57 Boulevard de l'Yerres");
        $useradmin->setVille("Evry");
        $useradmin->setCodepostal("91000");

        $userjeune->setNom("Ghislain");
        $userjeune->setPrenom("Ghislain");
        $userjeune->setUsername();
        $userjeune->setSIRET(0);
        $useradmin->setRoles(1);
        $userjeune->setPassword($this->passwordEncoder->encodePassword(
        	$userjeune,
            'motdepasse'
         ));
        $userjeune->setTelephone("0605557803");
        $userjeune->setEmail("ghislain.test@gmail.com");
        $userjeune->setAdresse("128 Allée des Champs Elysées");
        $userjeune->setVille("Evry");
        $userjeune->setCodepostal("91000");

        $userpartenaire->setNom("ImmoCorp");
        $userpartenaire->setPrenom("");
        $userpartenaire->setUsername();
        $userpartenaire->setSIRET("123456789");
        $useradmin->setRoles(2);
        $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
        	$userpartenaire,
            'motdepasse'
         ));
        $userpartenaire->setTelephone("0605557804");
        $userpartenaire->setEmail("immocorp@gmail.com");
        $userpartenaire->setAdresse("140 Allée des Champs Elysées");
        $userpartenaire->setVille("Evry");
        $userpartenaire->setCodepostal("91000");

        $manager->persist($useradmin);
        $manager->persist($userjeune);
        $manager->persist($userpartenaire);
        $manager->flush();
    }
}
