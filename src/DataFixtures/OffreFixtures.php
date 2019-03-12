<?php

namespace App\DataFixtures;

use App\Entity\Offre;
use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class OffreFixtures extends Fixture
{
	private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
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
    /*
        $i=0;

        while($i <= 24){
            $offre = new Offre();
            $repository = $this->getDoctrine()->getRepository(Formation::class);
            $libelle = "Lorem ipsum dolor sit amet.";
            $description = 
            "Lorem ipsum dolor sit amet, facer dolorum mea ei. Eu assum altera sed. At vix volutpat intellegat. Ei vero lobortis adipiscing eum. Liber affert postea quo an, dolore consectetuer ex usu, iisque voluptatum et nec. Ut sit zril tollit.

            Eu mundi viris eruditi sit. Errem electram gubergren in nec, ex."
            $formations = $repository->findAll();
            $formationid = $formation["id"];

            foreach ($formation["id"] as $key => $value) {
                # code...
            }

            $libelle = UserFixtures::generateLibelle();
            $adresse = UserFixtures::generateAdresse();

            $offre->setLibelle($nom[0]."Corporation");
            $offre->setIduser();
            $offre->setIdformation();
            $offre->setDescription($siret);
            $offre->setAdresse($adresse[0]." Rue ".$adresse[1]." ".$adresse[2]);
            $offre->setVille($adresse[2]);
            $offre->setCodepostal($adresse[3]);
            $offre->setDebut();
            $offre->setFin();

            $manager->persist($offre);

            $i = $i+1;
        }
        $manager->flush();
        */
    }
}