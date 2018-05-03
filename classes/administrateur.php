<?php
class Administrateur{
	public $administrateur_id;
	public $administrateur_super;
	public $administrateur_nom;
	public $administrateur_prenom;
	public $administrateur_mot_de_passe_hash;
	public $administrateur_email;
	public $administrateur_telephone;
	public $administrateur_adresse;
	public $administrateur_ville;
	public $administrateur_code_postal;
	public $administrateur_derniere_connexion;
	public $administrateur_creation;

	function __construct($administrateur_id, $administrateur_super, $administrateur_nom, $administrateur_prenom, $administrateur_mot_de_passe_hash, $administrateur_telephone, $administrateur_email, $administrateur_adresse, $administrateur_ville, $administrateur_code_postal, $administrateur_derniere_connexion, $administrateur_creation){
		$this->administrateur_id = $administrateur_id;
		$this->administrateur_super = $administrateur_super;
		$this->administrateur_nom = $administrateur_nom;
		$this->administrateur_prenom = $administrateur_prenom;
		$this->administrateur_mot_de_passe_hash = $administrateur_mot_de_passe_hash;
		$this->administrateur_telephone = $administrateur_telephone;	
		$this->administrateur_email = $administrateur_email;												
		$this->administrateur_adresse = $administrateur_adresse;
		$this->administrateur_ville = $administrateur_ville;
		$this->administrateur_code_postal = $administrateur_code_postal;
	 	$this->administrateur_derniere_connexion = $administrateur_derniere_connexion;
	 	$this->administrateur_creation = $administrateur_creation;																				
	}

	public function setAdministrateur_id($administrateur_id){
		$this->administrateur_id = $administrateur_id;}
	public function setAdministrateur_super($administrateur_super){$this->administrateur_super = $administrateur_super;}
	public function setAdministrateur_nom($administrateur_nom){$this->administrateur_nom = $administrateur_nom;}
	public function setAdministrateur_prenom($administrateur_prenom){return $this->administrateur_prenom = $administrateur_prenom;}
	public function setAdministrateur_mot_de_passe_hash($administrateur_mot_de_passe_hash){return $this->administrateur_mot_de_passe_hash = $administrateur_mot_de_passe_hash;}
	public function setAdministrateur_telephone($administrateur_telephone){return $this->administrateur_telephone = $administrateur_telephone;}
	public function setAdministrateur_email($administrateur_email){return $this->administrateur_email = $administrateur_email;}
	public function setAdministrateur_adresse($administrateur_adresse){return $this->administrateur_adresse = $administrateur_adresse;}
	public function setAdministrateur_ville($administrateur_ville){return $this->administrateur_ville = $administrateur_ville;}
	public function setAdministrateur_code_postal($administrateur_code_postal){return $this->administrateur_code_postal = $administrateur_code_postal;}
	public function setAdministrateur_derniere_connexion($administrateur_derniere_connexion){return $this->administrateur_derniere_connexion = $administrateur_derniere_connexion;}
	public function setAdministrateur_creation($administrateur_creation){return $this->administrateur_dcreation= $administrateur_creation;}

	public function getAdministrateur_id(){return $this->administrateur_id;}
	public function getAdministrateur_super(){return $this->administrateur_super;}
	public function getAdministrateur_nom(){return $this->administrateur_nom;}
	public function getAdministrateur_prenom(){return $this->administrateur_prenom;}
	public function getAdministrateur_mot_de_passe_hash(){return $this->administrateur_mot_de_passe_hash;}
	public function getAdministrateur_telephone(){return $this->administrateur_telephone;}
	public function getAdministrateur_email(){return $this->administrateur_email;}
	public function getAdministrateur_adresse(){return $this->administrateur_adresse;}
	public function getAdministrateur_ville(){return $this->administrateur_ville;}
	public function getAdministrateur_code_postal(){return $this->administrateur_code_postal;}
	public function getAdministrateur_derniere_connexion(){return $this->administrateur_derniere_connexion;}
	public function getAdministrateur_creation(){return $this->administrateur_creation;}
}
?>