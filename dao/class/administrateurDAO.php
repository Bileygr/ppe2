<?php
require_once('connexion.php');
require_once('class/administrateur.php');
require_once('dao/interface/administrateurInterface.php');

class AdministrateurDAO implements AdministrateurInterface{
	public function connecter($administrateur_email, $administrateur_mot_de_passe){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete 	= $connexion->prepare("SELECT administrateur_id, administrateur_mot_de_passe_hash FROM administrateur WHERE administrateur_email = ?");
		$requete->execute(array($administrateur_email));
		$resultat 	= $requete->fetch();

		$administrateur_id 					= $resultat['administrateur_id'];
		$administrateur_mot_de_passe_hash 	= $resultat['administrateur_mot_de_passe_hash'];

		if(password_verify($administrateur_mot_de_passe, $administrateur_mot_de_passe_hash)){
			$requete = $connexion->prepare("UPDATE administrateur SET administrateur_derniere_connexion = NOW() WHERE administrateur_id = ?");
			$requete->execute(array($administrateur_id));

			if($requete->rowcount()){
				$requete = $connexion->prepare("SELECT administrateur_id, administrateur_super, administrateur_nom, 															   							   administrateur_prenom,administrateur_mot_de_passe_hash, administrateur_telephone,
												  	   administrateur_email, administrateur_adresse, administrateur_ville,
												  	   administrateur_code_postal, administrateur_derniere_connexion,
												  	   administrateur_creation
												FROM administrateur WHERE administrateur_id = ?");
				$requete->execute(array($administrateur_id));

				if($requete->rowcount()){
					$resultat = $requete->fetch();

					$administrateur = new Administrateur($resultat['administrateur_id'], $resultat['administrateur_super'], $resultat['administrateur_nom'], $resultat['administrateur_prenom'], $resultat['administrateur_mot_de_passe_hash'], $resultat['administrateur_telephone'], $resultat['administrateur_email'], $resultat['administrateur_adresse'], $resultat['administrateur_ville'], $resultat['administrateur_code_postal'], $resultat['administrateur_derniere_connexion'], $resultat['administrateur_creation']);

					$requete 	= null;
					$connexion 	= null;
					return $administrateur;
				}else{

				}
			}else{

			}
		}else{

		}
	}

	public function inscrire($administrateur){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion(); 

		$requete = $connexion->prepare("INSERT INTO administrateur(administrateur_super, administrateur_nom, administrateur_prenom, 
													administrateur_mot_de_passe_hash, administrateur_telephone, administrateur_email,
													administrateur_adresse, administrateur_ville, administrateur_code_postal,
													administrateur_derniere_connexion, administrateur_creation)
												VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
		$requete->execute(array($administrateur->getAdministrateur_super(), 
								$administrateur->getAdministrateur_nom(), 
								$administrateur->getAdministrateur_prenom(), 
								$administrateur->getAdministrateur_mot_de_passe_hash(),
								$administrateur->getAdministrateur_telephone(), 
								$administrateur->getAdministrateur_email(), 
								$administrateur->getAdministrateur_adresse(), 
								$administrateur->getAdministrateur_ville(), 
								$administrateur->getAdministrateur_code_postal()));

		$requete	= null;
		$connexion 	= null;	
	}

	public function lister(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->query("SELECT * FROM administrateur");

		return 		$requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function  modifier($administrateur){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->prepare("UPDATE administrateur SET administrateur_nom = ?, administrateur_prenom = ?, administrateur_super = ?, 	
																  administrateur_telephone = ?, administrateur_email = ?,
																  administrateur_adresse = ?, administrateur_ville = ?, administrateur_code_postal = ? 
															  WHERE administrateur_id = ?");
		$requete->execute(array($administrateur->getAdministrateur_nom(),
								$administrateur->getAdministrateur_prenom(),
								$administrateur->getAdministrateur_super(),
								$administrateur->getAdministrateur_telephone(),
								$administrateur->getAdministrateur_email(),
								$administrateur->getAdministrateur_adresse(),
								$administrateur->getAdministrateur_ville(),
								$administrateur->getAdministrateur_code_postal(),
								$administrateur->getAdministrateur_id()));

		$requete 	= null;
		$connexion 	= null;
	}

	public function nbAdmin(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT COUNT(*) FROM administrateur");
		$resultat = $requete->fetch();
		$nbAdmin = $resultat["COUNT(*)"];

		$requete = null;
		$connexion = null;
		return $nbAdmin;
	}

	public function suprimmer($administrateur_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("DELETE FROM administrateur WHERE administrateur_id = ?");
		$requete->execute(array($administrateur_id));

		$requete	= null;
		$connexion 	= null;	
	}
}
?>