<?php

class Jeune{
	public $jeune_id;
	public $jeune_nom;
	public $jeune_prenom;
	public $jeune_mot_de_passe_hash;
	public $jeune_telephone;
	public $jeune_email;
	public $jeune_adresse;
	public $jeune_ville;
	public $jeune_code_postal;
	public $jeune_derniere_connexion;
	public $jeune_creation;

	function __construct($jeune_id = null, $jeune_nom, $jeune_prenom, $jeune_mot_de_passe_hash, $jeune_telephone, $jeune_email, $jeune_adresse, $jeune_ville, $jeune_code_postal, $jeune_derniere_connexion = null, $jeune_creation = null){
		$this->jeune_id = $jeune_id;
		$this->jeune_nom = $jeune_nom;
		$this->jeune_prenom = $jeune_prenom;
		$this->jeune_mot_de_passe_hash = $jeune_mot_de_passe_hash;
		$this->jeune_telephone = $jeune_telephone;
		$this->jeune_email = $jeune_email;
		$this->jeune_adresse = $jeune_adresse;
		$this->jeune_ville = $jeune_ville;
		$this->jeune_code_postal = $jeune_code_postal;
		$this->jeune_derniere_connexion = $jeune_derniere_connexion;
		$this->jeune_creation = $jeune_creation;
	}

	public function setJeune_id($jeune_id){return $this->jeune_id = $jeune_id;}
	public function setJeune_nom($jeune_nom){return $this->jeune_nom = $jeune_nom;}
	public function setJeune_prenom($jeune_prenom){return $this->jeune_prenom = $jeune_prenom;}
	public function setJeune_mot_de_passe_hash($jeune_mot_de_passe_hash){return $this->jeune_mot_de_passe_hash = $jeune_mot_de_passe_hash;}
	public function setJeune_telephone($jeune_telephone){return $this->jeune_telephone = $jeune_telephone;}
	public function setJeune_email($jeune_email){return $this->jeune_email = $jeune_email;}
	public function setJeune_adresse($jeune_adresse){return $this->jeune_adresse = $jeune_adresse;}
	public function setJeune_ville($jeune_ville){return $this->jeune_ville = $jeune_ville;}
	public function setJeune_code_postal($jeune_code_postal){return $this->jeune_code_postal = $jeune_code_postal;}
	public function setJeune_derniere_connexion($jeune_derniere_connexion){return $this->jeune_derniere_connexion = $jeune_derniere_connexion;}
	public function setJeune_creation($jeune_creation){return $this->jeune_creation = $jeune_creation;}

	public function getJeune_id(){$this->jeune_id;}
	public function getJeune_nom(){$this->jeune_nom;}
	public function getJeune_prenom(){$this->jeune_prenom;}
	public function getJeune_mot_de_passe_hash(){$this->jeune_mot_de_passe_hash;}
	public function getJeune_telephone(){$this->jeune_telephone;}
	public function getJeune_email(){$this->jeune_email;}
	public function getJeune_adresse(){$this->jeune_adresse;}
	public function getJeune_ville(){$this->jeune_ville;}
	public function getJeune_code_postal(){$this->jeune_code_postal;}
	public function getJeune_derniere_connexion(){$this->jeune_derniere_connexion;}
	public function getJeune_creation(){$this->jeune_creation;}
}
?>