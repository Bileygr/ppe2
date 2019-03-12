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

    function generateNom() {
        $nomDeFamille = array("Martin", "Bernard", "Thomas", "Petit", "Robert", "Richard", "Durand", "Dubois", "Moreau", "Laurent", "Simon", "Michel", "Lefebvre", "Leroy", "Roux", "David", "Bertrand", "Morel", "Fournier", "Girard", "Bonnet", "Dupont", "Lambert", "Fontaine", "Rousseau", "Vincent", "Muller", "Lefevre", "Faure", "Andre", "Mercier", "Blanc", "Guerin", "Boyer", "Garnier", "Chevalier", "François", "Legrand", "Gauthier", "Garcia", "Perrin", "Robin", "Clément", "Morin", "Nicolas", "Henry", "Roussel", "Mathieu", "Gautier", "Masson");
        $prenom = array("Gabriel", "Emma", "Louis", "Raphaël", "Jules", "Adam", "Lucas", "Léo", "Louise", "Jade", "Hugo", "Arthur", "Nathan", "Alice", "Liam", "Ethan", "Paul", "Chloé", "Lina", "Mila", "Tom", "Léa", "Manon", "Sacha", "Noah", "Gabin", "Nolan", "Enzo", "Mohamed", "Rose", "Anna", "Aaron", "Inès", "Camille", "Lola", "Timéo", "Théo", "Ambre", "Léna", "Zoé", "Mathis", "Juliette", "Axel", "Julia", "Victor", "Lou", "Antoine", "Valentin", "Sarah", "Lucie");
        $rng1 = rand(0,49);
        $rng2 = rand(0,49);

        $nom = array($nomDeFamille[$rng1], $prenom[$rng2]);

        return $nom;
    }

    function generateTelephone() {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $telephone = '';
        $suffix = "";
        $rng = rand(0,1);

        for ($i = 0; $i < 8; $i++) {
            $telephone .= $characters[rand(0, $charactersLength - 1)];
        }

        if($rng == 0){
            $suffix = "01"; 
        }elseif ($rng == 1) {
            $suffix = "06";
        }

        return $suffix.$telephone;
    }

    function generateSiret() {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $siret = '';
        for ($i = 0; $i < 9; $i++) {
            $siret .= $characters[rand(0, $charactersLength - 1)];
        }

        return $siret;
    }

    function generateAdresse(){
        $numero = rand(1,2000);
        $rues = "Boulevard de l'Yerres";
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

        $adresse = array($numeroToString, $rues, $departement);

        return $adresse;
    }

    public function load(ObjectManager $manager)
    {
        $i=0;

        while($i <= 500){
            $userpartenaire = new User();
            $nom = UserFixtures::generateNom();
            $siret = UserFixtures::generateSiret(9);
            $telephone = UserFixtures::generateTelephone();
            $adresse = UserFixtures::generateAdresse();
            $departement = "";
            $suffix = "";
            foreach($adresse[2] as $departement => $ville){
                $departement;
            }
            $rng = rand(0, 9);
            $rng2 = rand(0,3000);
            $emailId = (string)$rng2;

            $userpartenaire->setNom($nom[0]."Corporation");
            $userpartenaire->setUsername();
            $userpartenaire->setSIRET($siret);
            $userpartenaire->setRoles(array('ROLE_PARTENAIRE'));
            $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
                $userpartenaire,
                'motdepasse'
             ));
            $userpartenaire->setTelephone($suffix.$telephone);
            $userpartenaire->setEmail($nom[0].$emailId."@test.com");
            $userpartenaire->setAdresse($adresse[0]." ".$adresse[1]);
            $userpartenaire->setVille("Evry");
            $userpartenaire->setCodepostal($departement);

            $manager->persist($userpartenaire);

            $i = $i+1;
        }

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

        $manager->persist($usersuperadmin);
        $manager->persist($useradmin);
        $manager->persist($userjeune);
        //$manager->persist($userpartenaire);
        $manager->flush();
    }
}
