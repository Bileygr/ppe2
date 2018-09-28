<?php
require_once("config/Connection.php");
require_once("app/models/Engine.php");
require_once("app/models/base/Administrateur.class.php");

class AdministrateurDAO{
	public function connecter($email, $mot_de_passe){
		$engine = new Engine();
		$connect = new Connect();

		$url = $engine->url();
		$connection = $connect->connexion();

		$requete = $connection->prepare("SELECT administrateur_id, administrateur_mot_de_passe_hash FROM administrateur WHERE administrateur_email = ?");
		$requete->execute(array($email));
		$resultat = $requete->fetch();

		$id = $resultat['administrateur_id'];
		$mot_de_passe_hash = $resultat['administrateur_mot_de_passe_hash'];

		if(password_verify($mot_de_passe, $mot_de_passe_hash)){
			$requete = $connection->prepare("UPDATE administrateur SET administrateur_derniere_connexion = NOW() WHERE administrateur_id = ?");
			$requete->execute(array($id));

			if($requete->rowcount()){
				$requete = $connection->prepare("SELECT administrateur_id, administrateur_super, administrateur_nom, 															   							   administrateur_prenom,administrateur_mot_de_passe_hash, administrateur_telephone,
												  	   administrateur_email, administrateur_adresse, administrateur_ville,
												  	   administrateur_code_postal, administrateur_derniere_connexion,
												  	   administrateur_creation
												FROM administrateur WHERE administrateur_id = ?");
				$requete->execute(array($id));

				if($requete->rowcount()){
					$resultat = $requete->fetch();

					$administrateur = new Administrateur($resultat['administrateur_id'], $resultat['administrateur_super'], $resultat['administrateur_nom'], $resultat['administrateur_prenom'], $resultat['administrateur_mot_de_passe_hash'], $resultat['administrateur_telephone'], $resultat['administrateur_email'], $resultat['administrateur_adresse'], $resultat['administrateur_ville'], $resultat['administrateur_code_postal'], $resultat['administrateur_derniere_connexion'], $resultat['administrateur_creation']);

					$requete 	= null;
					$connection 	= null;
					return $administrateur;
				}else{
					header("Location: ".$url."/administrateur/connexion");
				}
			}else{
				header("Location: ".$url."/administrateur/connexion");
			}
		}else{
			header("Location: ".$url."/administrateur/connexion");
		}
	}

	public function inscrire($administrateur){
		$connect = new Connect();
		$connection = $connect->connexion(); 

		$requete = $connection->prepare("INSERT INTO administrateur(administrateur_super, administrateur_nom, administrateur_prenom, 
													administrateur_mot_de_passe_hash, administrateur_telephone, administrateur_email,
													administrateur_adresse, administrateur_ville, administrateur_code_postal,
													administrateur_derniere_connexion, administrateur_creation)
												VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
		$requete->execute(array($administrateur->getAdministrateur_super(), $administrateur->getAdministrateur_nom(), $administrateur->getAdministrateur_prenom(), $administrateur->getAdministrateur_mot_de_passe_hash(), $administrateur->getAdministrateur_telephone(), $administrateur->getAdministrateur_email(), $administrateur->getAdministrateur_adresse(), $administrateur->getAdministrateur_ville(), $administrateur->getAdministrateur_code_postal()));

		$requete	= null;
		$connexion 	= null;	
	}

	public function lister(){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->query("SELECT * FROM administrateur");

		return 		$requete;
		$requete 	= null;
		$connection 	= null;
	}

	public function  modifier($administrateur){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("UPDATE administrateur SET administrateur_nom = ?, administrateur_prenom = ?, administrateur_super = ?, 	
																  administrateur_telephone = ?, administrateur_email = ?, administrateur_adresse = ?, administrateur_ville = ?, administrateur_code_postal = ? 
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

		$requete = null;
		$connection = null;
	}

	public function nombre_d_administrateurs(){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->query("SELECT COUNT(*) FROM administrateur");
		$resultat = $requete->fetch();
		$nombre_d_administrateurs = $resultat["COUNT(*)"];

		$requete = null;
		$connection = null;
		return $nombre_d_administrateurs;
	}

	public function suprimmer($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("DELETE FROM administrateur WHERE administrateur_id = ?");
		$requete->execute(array($id));

		$requete	= null;
		$connection 	= null;	
	}
}
?>