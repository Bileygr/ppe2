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

    function generateRandomTelephone($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomSiret($length = 9) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateAdresse(){
        $numero = rand(1,2000);
        $rues = UserFixtures::generateRandomString(10);
        $villes = ["Paris", "Marseille", "Lyon", "Toulouse", "Nice", "Nantes", "Montpellier", "Strasbourg", "Bordeaux", "Lille"];
        $departement = array("75" => "Paris", "13" => "Marseille", "69" =>"Lyon", "31" => "Toulouse", "06" => "Nice", "44" => "Nantes", "34" => "Montpellier", "67" => "Strasbourg", "33" => "Bordeaux", "59" => "Lille");
        $codepostal = rand(1,95);

        $paramName = "";

        foreach($departement as $paramName => $paramValue){
            $paramName;
        }

        $numeroToString = (string)$numero;
        $codepostalToString = (string)$codepostal;
        $rng = rand(0, 9);

        $adresse = $numeroToString." ".$rues." ".$departement[$rng];

        return $adresse;
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
            $siret = UserFixtures::generateRandomSiret(9);
            $telephone = UserFixtures::generateRandomString(10);
            $adresse = UserFixtures::generateAdresse();
            //$telephoneToString = (string)$telephone;
            //$siretToString = (string)$siret;

            $userpartenaire->setNom($nom);
            $userpartenaire->setUsername();
            $userpartenaire->setSIRET($siret);
            $userpartenaire->setRoles(array('ROLE_PARTENAIRE'));
            $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
                $userpartenaire,
                'motdepasse'
             ));
            $userpartenaire->setTelephone($telephone);
            $userpartenaire->setEmail($nom."@test.com");
            $userpartenaire->setAdresse($adresse);
            $userpartenaire->setVille("Evry");
            $userpartenaire->setCodepostal("91000");

            $manager->persist($userpartenaire);

            $i = $i+1;
        }

        $manager->persist($usersuperadmin);
        $manager->persist($useradmin);
        $manager->persist($userjeune);
        //$manager->persist($userpartenaire);
        $manager->flush();
    }
}
