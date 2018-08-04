<?php
require_once('connexion.php');
require_once('class/jeune.php');
require_once('dao/interface/jeuneInterface.php');

class JeuneDAO implements JeuneInterface{
	public function connecter($email, $mot_de_passe){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->prepare("SELECT jeune_id, jeune_mot_de_passe_hash FROM jeune WHERE jeune_email = ?");
		$requete->execute(array($email));
		$resultat = $requete->fetch();
	
		$id = $resultat["jeune_id"];
		$mot_de_passe_hash = $resultat["jeune_mot_de_passe_hash"];
		
		if(password_verify($mot_de_passe, $mot_de_passe_hash)){
			$requete = $connexion->prepare("UPDATE jeune SET jeune_derniere_connexion = NOW() WHERE jeune_id = ?");
			$requete->execute(array($id));
			
			if($requete->rowcount()){
				$requete = $connexion->prepare("SELECT jeune_id, jeune_nom, jeune_prenom, jeune_mot_de_passe_hash, jeune_telephone,
												  	   jeune_email, jeune_adresse, jeune_ville, jeune_code_postal, jeune_derniere_connexion,
												  	   jeune_creation
												FROM jeune WHERE jeune_id = ?");
				$requete->execute(array($id));
				$resultat = $requete->fetch();

				$jeune = new Jeune($resultat['jeune_id'], $resultat['jeune_nom'], $resultat['jeune_prenom'], $resultat['jeune_mot_de_passe_hash'], $resultat['jeune_telephone'], $resultat['jeune_email'], $resultat['jeune_adresse'], $resultat['jeune_ville'], $resultat['jeune_code_postal'], $resultat['jeune_derniere_connexion'], $resultat['jeune_creation']);

				$requete = null;
				$connexion = null;
				return $jeune;
			}else{

			}
		}else{

		}
	}

	public function inscrire($jeune){
		$connect = new Connect();
		$connexion = $connect->connexion();

		try{
			$requete = $connexion->prepare("INSERT INTO jeune(jeune_nom, jeune_prenom, jeune_mot_de_passe_hash, jeune_telephone, jeune_email, jeune_adresse, jeune_ville, jeune_code_postal, jeune_derniere_connexion, jeune_creation) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
			$requete->execute(array($jeune->getJeune_nom(),
									$jeune->getJeune_prenom(),
									$jeune->getJeune_mot_de_passe_hash(),
									$jeune->getJeune_telephone(),
									$jeune->getJeune_email(),
									$jeune->getJeune_adresse(),
									$jeune->getJeune_ville(),
									$jeune->getJeune_code_postal()));
		}catch(Exception $e){
			print $e->getMessage();
		}
		
		$requete = null;
		$connexion = null;
	}

	public function nbJeune(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT COUNT(*) FROM jeune");
		$resultat = $requete->fetch();
		$nbJeune = $resultat["COUNT(*)"];

		$requete = null;
		$connexion = null;
		return $nbJeune;
	}

	public function lister(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->query("SELECT jeune_id, jeune_nom, jeune_prenom, jeune_telephone, jeune_email, jeune_adresse, jeune_ville, jeune_code_postal, 												 jeune_derniere_connexion, jeune_creation FROM jeune");

		return 		$requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function modifier($jeune){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->prepare("UPDATE jeune SET jeune_nom = ?, jeune_prenom = ?, jeune_telephone = ?,
														 jeune_email = ?, jeune_adresse = ?, jeune_ville = ?, 
														 jeune_code_postal = ?
													 WHERE jeune_id = ?");
		$requete->execute(array($jeune->getJeune_nom(),
							   $jeune->getJeune_prenom(),
							   $jeune->getJeune_telephone(),
							   $jeune->getJeune_email(),
							   $jeune->getJeune_adresse(),
							   $jeune->getJeune_ville(),
							   $jeune->getJeune_code_postal(),
							   $jeune->getJeune_id()));

		$requete 	= null;
		$connexion 	= null;
	}

	public function suprimmer($jeune_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("DELETE FROM jeune WHERE jeune_id = ?");
		$requete->execute(array($jeune_id));

		$requete	= null;
		$connexion 	= null;	
	}
}
?>