<?php

class Administrateur{
	private $administrateur_id;
	private $super_administrateur;
	private $administrateur_nom;
	private $administrateur_prenom;
	private $administrateur_mot_de_passe_hash;
	private $administrateur_email;
	private $administrateur_telephone;
	private $administrateur_adresse;
	private $administrateur_ville;
	private $administrateur_code_postal;
	private $administrateur_derniere_connexion;
	private $administrateur_date_ajout;

	function __construct($administrateur_id, $super_administrateur, $administrateur_nom, $administrateur_prenom, $administrateur_mot_de_passe_hash, $administrateur_email, $administrateur_telephone, $administrateur_adresse, $administrateur_ville, $administrateur_code_postal, $administrateur_derniere_connexion, $administrateur_date_ajout){
		$this->administrateur_id = $administrateur_id;
		$this->super_administrateur = $super_administrateur;
		$this->administrateur_nom = $administrateur_nom;
		$this->administrateur_prenom = $administrateur_prenom;
		$this->administrateur_mot_de_passe_hash = $administrateur_mot_de_passe_hash;
		$this->administrateur_email = $administrateur_email;
		$this->administrateur_telephone = $administrateur_telephone;
		$this->administrateur_adresse = $administrateur_adresse;
		$this->administrateur_ville = $administrateur_ville;
	 	$this->administrateur_code_postal = $administrateur_code_postal;																					
	 	$this->administrateur_derniere_connexion = $administrateur_derniere_connexion;
	 	$this->administrateur_date_ajout = $administrateur_date_ajout;																				
	}

	private function getAdministrateur_id(){$this->administrateur_id;}
	private function getSuper_administrateur(){$this->super_administrateur;}
	private function getAdministrateur_nom(){$this->administrateur_nom;}
	private function getAdministrateur_prenom(){$this->administrateur_prenom;}
	private function getAdministrateur_mot_de_passe_hash(){$this->administrateur_mot_de_passe_hash;}
	private function getAdministrateur_email(){$this->administrateur_email;}
	private function getAdministrateur_telephone(){$this->administrateur_telephone;}
	private function getAdministrateur_adresse(){$this->administrateur_adresse;}
	private function getAdministrateur_ville(){$this->administrateur_ville;}
	private function getAdministrateur_code_postal(){$this->administrateur_code_postal;}
	private function getAdministrateur_derniere_connexion(){$this->administrateur_derniere_connexion;}
	private function getAdministrateur_date_ajout(){$this->administrateur_date_ajout;}

	private function setAdministrateur_id($administrateur_id){return $this->administrateur_id = $administrateur_id;}
	private function setSuper_administrateur($super_administrateur){return $this->super_administrateur = $super_administrateur;}
	private function setAdministrateur_nom($administrateur_nom){return $this->administrateur_nom = $administrateur_nom;}
	private function setAdministrateur_prenom($administrateur_prenom){return $this->administrateur_prenom = $administrateur_prenom;}
	private function setAdministrateur_mot_de_passe_hash($administrateur_mot_de_passe_hash){return $this->administrateur_mot_de_passe_hash = $administrateur_mot_de_passe_hash;}
	private function setAdministrateur_email($administrateur_email){return $this->administrateur_email = $administrateur_email;}
	private function setAdministrateur_telephone($administrateur_telephone){return $this->administrateur_telephone = $administrateur_telephone;}
	private function setAdministrateur_adresse($administrateur_adresse){return $this->administrateur_adresse = $administrateur_adresse;}
	private function setAdministrateur_ville($administrateur_ville){return $this->administrateur_ville = $administrateur_ville;}
	private function setAdministrateur_code_postal($administrateur_code_postal){return $this->administrateur_code_postal = $administrateur_code_postal;}
	private function setAdministrateur_derniere_connexion($administrateur_derniere_connexion){return $this->administrateur_derniere_connexion = $administrateur_derniere_connexion;}
	private function setAdministrateur_date_ajout($administrateur_date_ajout){return $this->administrateur_date_ajout = $administrateur_date_ajout;}
}
?>