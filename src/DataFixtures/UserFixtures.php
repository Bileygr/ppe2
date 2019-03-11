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

    function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function load(ObjectManager $manager)
    {
        $usersuperadmin = new User();
        $useradmin = new User();
        $userjeune = new User();
        $userpartenaire = new User();

        $usersuperadmin->setNom("Guerfi");
        $usersuperadmin->setPrenom("Souhila");
        $usersuperadmin->setUsername();
        $usersuperadmin->setRoles(array('ROLE_SUPER_ADMINISTRATEUR'));
        $usersuperadmin->setPassword($this->passwordEncoder->encodePassword(
            $usersuperadmin,
            'motdepasse'
         ));
        $usersuperadmin->setTelephone("0603007639");
        $usersuperadmin->setEmail("sguerfi12@yahoo.fr");
        $usersuperadmin->setAdresse("6 Villa Simon Demeure");
        $usersuperadmin->setVille("Evry");
        $usersuperadmin->setCodepostal("91000");

        $useradmin->setNom("Keita");
        $useradmin->setPrenom("Cheik-Siramakan");
        $useradmin->setUsername();
        $useradmin->setRoles(array('ROLE_ADMINISTRATEUR'));
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
        $userjeune->setRoles(array('ROLE_JEUNE'));
        $userjeune->setPassword($this->passwordEncoder->encodePassword(
        	$userjeune,
            'motdepasse'
         ));
        $userjeune->setTelephone("0605557803");
        $userjeune->setEmail("ghislain.test@gmail.com");
        $userjeune->setAdresse("128 Allée des Champs Elysées");
        $userjeune->setVille("Evry");
        $userjeune->setCodepostal("91000");
        
        /*
            $userpartenaire->setNom("ImmoCorp");
            $userpartenaire->setUsername();
            $userpartenaire->setSIRET("123456789");
            $userpartenaire->setRoles(array('ROLE_PARTENAIRE'));
            $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
            	$userpartenaire,
                'motdepasse'
             ));
            $userpartenaire->setTelephone("0605557804");
            $userpartenaire->setEmail("immocorp@gmail.com");
            $userpartenaire->setAdresse("140 Allée des Champs Elysées");
            $userpartenaire->setVille("Evry");
            $userpartenaire->setCodepostal("91000");
        */

        /*
            Creer 500  partenaires
        */
        $i=0;

        while($i <= 500){
            $userpartenaire = new User();
            $nom = UserFixtures::generateRandomString(10);
            $siret = rand(9, 9);
            $telephone = rand(10,10);
            $telephoneToString = (string)$telephone;
            $siretToString = (string)$siret;

            $userpartenaire->setNom($nom);
            $userpartenaire->setUsername();
            $userpartenaire->setSIRET($siretToString);
            $userpartenaire->setRoles(array('ROLE_PARTENAIRE'));
            $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
                $userpartenaire,
                'motdepasse'
             ));
            $userpartenaire->setTelephone($telephoneToString);
            $userpartenaire->setEmail($nom."@test.com");
            $userpartenaire->setAdresse("140 Allée des Champs Elysées");
            $userpartenaire->setVille("Evry");
            $userpartenaire->setCodepostal("91000");

            $manager->persist($userpartenaire);

            $i = $i+1;
        }

        $manager->persist($usersuperadmin);
        $manager->persist($useradmin);
        $manager->persist($userjeune);
        // $manager->persist($userpartenaire);
        $manager->flush();
    }
}
