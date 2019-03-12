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
        $nomDeFamille = array("Martin", "Bernard", "Thomas", "Petit", "Robert", "Richard", "Durand", "Dubois", "Moreau", "Laurent", "Simon", "Michel", "Lefebvre", "Leroy", "Roux", "David", "Bertrand", "Morel", "Fournier", "Girard", "Bonnet", "Dupont", "Lambert", "Fontaine", "Rousseau", "Vincent", "Muller", "Lefevre", "Faure", "Andre", "Mercier", "Blanc", "Guerin", "Boyer", "Garnier", "Chevalier", "Francois", "Legrand", "Gauthier", "Garcia", "Perrin", "Robin", "Clement", "Morin", "Nicolas", "Henry", "Roussel", "Mathieu", "Gautier", "Masson");
        $prenom = array("Gabriel", "Emma", "Louis", "Raphael", "Jules", "Adam", "Lucas", "Leo", "Louise", "Jade", "Hugo", "Arthur", "Nathan", "Alice", "Liam", "Ethan", "Paul", "Chloe", "Lina", "Mila", "Tom", "Lea", "Manon", "Sacha", "Noah", "Gabin", "Nolan", "Enzo", "Mohamed", "Rose", "Anna", "Aaron", "Ines", "Camille", "Lola", "Timeo", "Theo", "Ambre", "Lena", "Zoe", "Mathis", "Juliette", "Axel", "Julia", "Victor", "Lou", "Antoine", "Valentin", "Sarah", "Lucie");
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

    function generateAdresse(){
        $numero = rand(1,2000);
        $rue = array("Charles de Gaulle", "Louis Pasteur", "Victor Hugo", "Jean Jaures", "Jean Moulin", "Leon Gambetta", "General Leclerc", "Jules Ferry", "Marechal Foch", "Georges Clemenceau", "De l'Eglise", "du Moulin", "du Chateau", "de la Mairie", "des Ecoles", "de la Gare", "Principale", "du Stade", "de la Fontaine", "Pasteur", "des Jardins");
        $ville = array("Paris", "Marseille","Lyon", "Toulouse", "Nice", "Nantes", "Montpellier", "Strasbourg", "Bordeaux", "Lille");
        $departement = array("75", "13", "69", "31", "06", "44", "34", "67", "33", "59");

        $rng = rand(0, 9);
        $rng2 = rand(0, 20);
        $rng3 = rand(0,9);

        $adresse = array((string)$numero, $rue[$rng2] , $ville[$rng3], $departement[$rng3]);

        return $adresse;
    }

    public function load(ObjectManager $manager)
    {
        $i=0;

        while($i <= 24){
            $userpartenaire = new User();
            $nom = UserFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = UserFixtures::generateTelephone();
            $adresse = UserFixtures::generateAdresse();
            $emailId = (string)rand(0, 3000);

            $userpartenaire->setNom($nom[0]."Corporation");
            $userpartenaire->setSIRET($siret);
            $userpartenaire->setUsername();
            $userpartenaire->setRoles(array('ROLE_PARTENAIRE'));
            $userpartenaire->setPassword($this->passwordEncoder->encodePassword(
                $userpartenaire,
                'motdepasse'
             ));
            $userpartenaire->setTelephone($telephone);
            $userpartenaire->setEmail(strtolower($nom[0]).$emailId."@test.com");
            $userpartenaire->setAdresse($adresse[0]." Rue ".$adresse[1]." ".$adresse[2]);
            $userpartenaire->setVille($adresse[2]);
            $userpartenaire->setCodepostal($adresse[3]);

            $manager->persist($userpartenaire);

            $i = $i+1;
        }

        $i=0;

        while($i <= 8){
            $useradmin = new User();
            $role = "";
            $nom = UserFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = UserFixtures::generateTelephone();
            $adresse = UserFixtures::generateAdresse();
            $emailId = (string)rand(0, 3000);
            $rng = rand(0, 1);

            if($rng == 0){  
                $role = "ROLE_ADMINISTRATEUR"; 
            }elseif ($rng == 1) {
                $role = "ROLE_SUPER_ADMINISTRATEUR";
            }

            $useradmin->setNom($nom[0]);
            $useradmin->setPrenom($nom[1]);
            $useradmin->setUsername();
            $useradmin->setRoles(array($role));
            $useradmin->setPassword($this->passwordEncoder->encodePassword(
                $useradmin,
                'motdepasse'
             ));
            $useradmin->setTelephone($telephone);
            $useradmin->setEmail(strtolower($nom[0]).$emailId."@test.com");
            $useradmin->setAdresse($adresse[0]." Rue ".$adresse[1]." ".$adresse[2]);
            $useradmin->setVille($adresse[2]);
            $useradmin->setCodepostal($adresse[3]);

            $manager->persist($useradmin);

            $i = $i+1;
        }

        $i=0;

        while($i <= 48){
            $userjeune = new User();
            $nom = UserFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = UserFixtures::generateTelephone();
            $adresse = UserFixtures::generateAdresse();
            $emailId = (string)rand(0, 3000);
            $rng = rand(0, 1);

            $userjeune->setNom($nom[0]);
            $userjeune->setPrenom($nom[1]);
            $userjeune->setUsername();
            $userjeune->setRoles(array("ROLE_JEUNE"));
            $userjeune->setPassword($this->passwordEncoder->encodePassword(
                $userjeune,
                'motdepasse'
             ));
            $userjeune->setTelephone($telephone);
            $userjeune->setEmail(strtolower($nom[0]).$emailId."@test.com");
            $userjeune->setAdresse($adresse[0]." Rue ".$adresse[1]." ".$adresse[2]);
            $userjeune->setVille($adresse[2]);
            $userjeune->setCodepostal($adresse[3]);

            $manager->persist($userjeune);

            $i = $i+1;
        }

        $admin1 = new User();
        $admin2 = new User();

        $admin1->setNom("Guerfi");
        $admin1->setPrenom("Souhila");
        $admin1->setUsername();
        $admin1->setRoles(array('ROLE_SUPER_ADMINISTRATEUR'));
        $admin1->setPassword($this->passwordEncoder->encodePassword(
            $admin1,
            'motdepasse'
         ));
        $admin1->setTelephone("0603007639");
        $admin1->setEmail("sguerfi12@yahoo.fr");
        $admin1->setAdresse("6 Villa Simon Demeure");
        $admin1->setVille("Evry");
        $admin1->setCodepostal("91000");

        $admin2->setNom("Keita");
        $admin2->setPrenom("Cheik-Siramakan");
        $admin2->setUsername();
        $admin2->setRoles(array('ROLE_ADMINISTRATEUR'));
        $admin2->setPassword($this->passwordEncoder->encodePassword(
            $admin2,
            'motdepasse'
         ));
        $admin2->setTelephone("0605557802");
        $admin2->setEmail("chesirkei@hotmail.fr");
        $admin2->setAdresse("57 Boulevard de l'Yerres");
        $admin2->setVille("Evry");
        $admin2->setCodepostal("91000");

        $manager->persist($admin1);
        $manager->persist($admin2);
        $manager->flush();
    }
}