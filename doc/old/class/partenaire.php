<?php
class Partenaire{
	private $partenaire_id;
	private $partenaire_siret;
	private $partenaire_nom;
	private $partenaire_mot_de_passe_hash
;	private $partenaire_telephone;
	private $partenaire_email;
	private $partenaire_adresse;
	private $partenaire_ville;
	private $partenaire_code_postal;
	private $partenaire_derniere_connexion;
	private $partenaire_creation;

	function __construct($partenaire_id = null, $partenaire_siret, $partenaire_nom , $partenaire_mot_de_passe_hash, 
						 $partenaire_telephone, $partenaire_email, $partenaire_adresse, $partenaire_ville,
						 $partenaire_code_postal, $partenaire_derniere_connexion = null, $partenaire_creation = null){
		$this->partenaire_id 					= $partenaire_id;
		$this->partenaire_siret 				= $partenaire_siret;
		$this->partenaire_nom 					= $partenaire_nom;
		$this->partenaire_mot_de_passe_hash 	= $partenaire_mot_de_passe_hash;
		$this->partenaire_telephone 			= $partenaire_telephone;
		$this->partenaire_email 				= $partenaire_email;
		$this->partenaire_adresse 				= $partenaire_adresse;
		$this->partenaire_ville 				= $partenaire_ville;
		$this->partenaire_code_postal 			= $partenaire_code_postal;
		$this->partenaire_derniere_connexion 	= $partenaire_derniere_connexion;
		$this->partenaire_creation 				= $partenaire_creation;
	}

	public function setPartenaire_id($partenaire_id){return $this->partenaire_id = $partenaire_id;}
	public function setPartenaire_siret($partenaire_siret){return $this->partenaire_siret = $partenaire_siret;}
	public function setPartenaire_nom($partenaire_nom){return $this->partenaire_nom = $partenaire_nom;}
	public function setPartenaire_mot_de_passe_hash($partenaire_mot_de_passe_hash){return $this->partenaire_mot_de_passe_hash = $partenaire_mot_de_passe_hash;}
	public function setPartenaire_telephone($partenaire_telephone){return $this->partenaire_telephone = $partenaire_telephone;}
	public function setPartenaire_email($partenaire_email){return $this->partenaire_email = $partenaire_email;}
	public function setPartenaire_adresse($partenaire_adresse){return $this->partenaire_adresse = $partenaire_adresse;}
	public function setPartenaire_ville($partenaire_ville){return $this->partenaire_ville = $partenaire_ville;}
	public function setPartenaire_code_postal($partenaire_code_postal){return $this->partenaire_code_postal = $partenaire_code_postal;}
	public function setPartenaire_derniere_connexion($partenaire_derniere_connexion){return $this->partenaire_derniere_connexion = $partenaire_derniere_connexion;}
	public function setPartenaire_creation($partenaire_creation){return $this->partenaire_creation = $partenaire_creation;}

	public function getPartenaire_id(){return $this->partenaire_id;}
	public function getPartenaire_siret(){return $this->partenaire_siret;}
	public function getPartenaire_nom(){return $this->partenaire_nom;}
	public function getPartenaire_mot_de_passe_hash(){return $this->partenaire_mot_de_passe_hash;}
	public function getPartenaire_telephone(){return $this->partenaire_telephone;}
	public function getPartenaire_email(){return $this->partenaire_email;}
	public function getPartenaire_adresse(){return $this->partenaire_adresse;}
	public function getPartenaire_ville(){return $this->partenaire_ville;}
	public function getPartenaire_code_postal(){return $this->partenaire_code_postal;}
	public function getPartenaire_derniere_connexion(){return $this->partenaire_derniere_connexion;}
	public function getPartenaire_creation(){return $this->partenaire_creation;}
}
?>