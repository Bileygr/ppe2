<?php

namespace App\DataFixtures;

use \PDO;
use App\Entity\Formation;
use App\Entity\User;
use App\Entity\Offre; 
use App\Repository\UserRepository; 
use App\Repository\FormationRepository; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    // Cette fonction génère une date.
    function generateDate($start_date, $end_date){
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        $val = rand($min, $max);

        return date('Y-m-d H:i:s', $val);
    }

    // Cette fonction génère un nom pour un utilisateur.
    function generateNom() {
        $nomDeFamille = array("Martin", "Bernard", "Thomas", "Petit", "Robert", "Richard", "Durand", "Dubois", "Moreau", "Laurent", "Simon", "Michel", "Lefebvre", "Leroy", "Roux", "David", "Bertrand", "Morel", "Fournier", "Girard", "Bonnet", "Dupont", "Lambert", "Fontaine", "Rousseau", "Vincent", "Muller", "Lefevre", "Faure", "Andre", "Mercier", "Blanc", "Guerin", "Boyer", "Garnier", "Chevalier", "Francois", "Legrand", "Gauthier", "Garcia", "Perrin", "Robin", "Clement", "Morin", "Nicolas", "Henry", "Roussel", "Mathieu", "Gautier", "Masson");
        $prenom = array("Gabriel", "Emma", "Louis", "Raphael", "Jules", "Adam", "Lucas", "Leo", "Louise", "Jade", "Hugo", "Arthur", "Nathan", "Alice", "Liam", "Ethan", "Paul", "Chloe", "Lina", "Mila", "Tom", "Lea", "Manon", "Sacha", "Noah", "Gabin", "Nolan", "Enzo", "Mohamed", "Rose", "Anna", "Aaron", "Ines", "Camille", "Lola", "Timeo", "Theo", "Ambre", "Lena", "Zoe", "Mathis", "Juliette", "Axel", "Julia", "Victor", "Lou", "Antoine", "Valentin", "Sarah", "Lucie");
        $rng1 = rand(0,49);
        $rng2 = rand(0,49);

        $nom = array($nomDeFamille[$rng1], $prenom[$rng2]);

        return $nom;
    }

    // Cette fonction génère un numéro de téléphone. 
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

    // Cette fonction génère une adresse.
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

    // Cette fonction sert à se connecter à la base de données et retourne une instande PDO pour effectuer des requêtes SQL.
    public static function connexion(){
        $host = "127.0.0.1";
        $port = "3306";
        $bdd = "lycee_du_parc_de_villegenis";
        $user = "root";
        $password = "";

        try{
            $db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$bdd.";charset=utf8", $user, $password);
        }catch(Exception $e){
            echo "Échec lors de la connexion: ".$e->getMessage();
        }

        return $db;
    }

    // Cette fonction insert des offres dans la base de données.
    public static function insertionDesOffres($offre){
        $connection = AppFixtures::connexion();
        $requete = $connection->prepare("INSERT INTO offre(iduser_id, idformation_id, libelle, description, adresse, ville, codepostal, debut, fin, dateajout) VALUES(:iduser, :idformation, :libelle, :description, :adresse, :ville, :codepostal, :debut, :fin, NOW())");
        $resultat=$requete->execute(array("iduser" => $offre->getIduser(),
                                              "idformation" => $offre->getIdformation(),
                                              "libelle" => $offre->getLibelle(),
                                              "description" => $offre->getDescription(),
                                              "adresse" => $offre->getAdresse(),
                                              "ville" => $offre->getVille(),
                                              "codepostal" => $offre->getCodepostal(),
                                              "debut" => $offre->getDebut(),
                                              "fin" => $offre->getFin()));
        return $resultat;
    }

    public function load(ObjectManager $manager)
    {
        // Valeur que chaque boucle doit atteindre avant d'arrêter d'exécuter le code à l'intérieur.
        $nombreDePartenairesACreer = 24;
        $nombreDeAdministrateurACreer = 8;
        $nombreDeJeuneACreer = 49;
        $nombreDOffresACreer = 75;

        // Cette boucle crée des instances de 'user' qui ont le rôle de partenaire et les insert dans la base de données.
        $i=0;

        while($i <= $nombreDePartenairesACreer){
            $userpartenaire = new User();
            $nom = AppFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = AppFixtures::generateTelephone();
            $adresse = AppFixtures::generateAdresse();
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

        // Cette boucle crée des instances de 'user' qui ont le rôle d'administrateur et les insert dans la base de données.
        $i=0;

        while($i <= $nombreDeAdministrateurACreer){
            $useradmin = new User();
            $role = "";
            $nom = AppFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = AppFixtures::generateTelephone();
            $adresse = AppFixtures::generateAdresse();
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

        // Cette boucle crée des instances de 'user' qui ont le rôle de jeune et les insert dans la base de données.
        $i=0;

        while($i <= $nombreDeJeuneACreer){
            $userjeune = new User();
            $nom = AppFixtures::generateNom();
            $siret = rand(100000000,999999999);
            $telephone = AppFixtures::generateTelephone();
            $adresse = AppFixtures::generateAdresse();
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
        
        /* Cette boucle crée des instances de 'offre' et les insert dans la base de données.
        $i=0;

        while($i <= $nombreDOffresACreer){
            $offre = new Offre();
            $libelle = "Lorem ipsum dolor sit amet.";
            
            * Les IDs des utilisateurs qui pourront être attribué au champ 'iduser_id' des offres. 
            * Les IDs des formations qui pourront être attribué au champ 'idformation_id' des offres.
            
            $idDesUtilisateursEtDesFormations = array(rand(1, 25), rand(1, 3));
            $description = 
                "Lorem ipsum dolor sit amet, facer dolorum mea ei. Eu assum altera sed. At vix volutpat intellegat. Ei vero lobortis adipiscing eum. Liber affert postea quo an, dolore consectetuer ex usu, iisque voluptatum et nec. Ut sit zril tollit.

                Eu mundi viris eruditi sit. Errem electram gubergren in nec, ex.";
            $adresse = AppFixtures::generateAdresse();
            $date1 = AppFixtures::generateDate("2019/05/13", "2020/08/20");
            $date2 = AppFixtures::generateDate("2019/05/13", "2020/08/20");

            $offre->setLibelle($libelle);
            $offre->setIduser($idDesUtilisateursEtDesFormations[0]);
            $offre->setIdformation($idDesUtilisateursEtDesFormations[1]);
            $offre->setDescription($description);
            $offre->setAdresse($adresse[0]." Rue ".$adresse[1]." ".$adresse[2]);
            $offre->setVille($adresse[2]);
            $offre->setCodepostal($adresse[3]);
            if($date1 > $date2){
                $offre->setDebut($date2);
                $offre->setFin($date1);
            }elseif($date1 < $date2){
                $offre->setDebut($date1);
                $offre->setFin($date2);
            }
            
            $resultat = AppFixtures::insertionDesOffres($offre);

            $i = $i+1;
        }
	*/
        // Le code en dessous créé des utilisateurs que je veux toujours avoir dans ma base de données.
        $admin1 = new User();
        $admin2 = new User();
        $partenaire = new User();
        $jeune = new User();

        $formationDeveloppement = new Formation();
        $formationReseau = new Formation();
        $formationDepannageInformatique = new Formation();

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

        $partenaire->setNom("PropCorporation");
        $partenaire->setSIRET("123456789");
        $partenaire->setUsername();
        $partenaire->setRoles(array('ROLE_PARTENAIRE'));
        $partenaire->setPassword($this->passwordEncoder->encodePassword(
            $partenaire,
            'motdepasse'
        ));
       	$partenaire->setTelephone("0167547823");
        $partenaire->setEmail("prop@test.com");
        $partenaire->setAdresse("128 Boulevard des Champs-Elysee");
        $partenaire->setVille("Evry");
        $partenaire->setCodepostal("91000");

        $jeune->setNom("Samy");
        $jeune->setPrenom("Ghislain");
        $jeune->setUsername();
        $jeune->setRoles(array("ROLE_JEUNE"));
        $jeune->setPassword($this->passwordEncoder->encodePassword(
            $jeune,
            'motdepasse'
        ));
        $jeune->setTelephone("0607889572");
        $jeune->setEmail("ghislain.samy@gmail.com");
        $jeune->setAdresse("128 Boulevard des Champs-Elysee");
        $jeune->setVille("Evry");
        $jeune->setCodepostal("91000");

        $formationDepannageInformatique->setNom("Dépannage informatique");
        $formationDeveloppement->setNom("Développement");
        $formationReseau->setNom("Réseau");

        $manager->persist($admin1);
        $manager->persist($admin2);
        $manager->persist($partenaire);
        $manager->persist($jeune);
        $manager->persist($formationDepannageInformatique);
        $manager->persist($formationDeveloppement);
        $manager->persist($formationReseau);
        $manager->flush();
    }
}
