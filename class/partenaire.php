<?php
namespace class;

class partenaire{
	private $partenaire_id;
	private $partenaire_siret;
	private $partenaire_nom;
	private $partenaire_mot_de_passe_hash;
	private $partenaire_email;
	private $partenaire_telephone;
	private $partenaire_adresse;
	private $partenaire_ville;
	private $partenaire_code_postal;
	private $partenaire_derniere_connexion;
	private $partenaire_date_ajout;

	settype($partenaire_id, "integer");
	settype($partenaire_siret, "integer");
	settype($partenaire_nom, "string");
	settype($partenaire_prenom, "string");
	settype($partenaire_mot_de_passe_hash, "string");
	setttype($partenaire_email, "string");
	settype($partenaire_telephone, "string");
	settype($partenaire_adresse, "string");
	settype($partenaire_ville, "string");
	settype($partenaire_code_postal, "string");
	settype($partenaire_derniere_connexion, "string");
	settype($partenaire_date_ajout, "string");

	private function getPartenaire_id($partenaire_id){$this->partenaire_id = $partenaire_id;}
	private function getPartenaire_siret$partenaire_siret){$this->partenaire_siret = $partenaire_siret;}
	private function getPartenaire_nom($partenaire_nom){$this->partenaire_nom = $partenaire_nom;}
	private function getPartenaire_mot_de_passe_hash($partenaire_mot_de_passe_hash){$this->partenaire_mot_de_passe_hash = $partenaire_mot_de_passe_hash;}
	private function getPartenaire_email($partenaire_email){$this->partenaire_email = $partenaire_email;}
	private function getPartenaire_telephone($partenaire_telephone){$this->partenaire_telephone = $partenaire_telephone;}
	private function getPartenaire_adresse($partenaire_adresse){$this->partenaire_adresse = $partenaire_adresse;}
	private function getPartenaire_ville($partenaire_ville){$this->partenaire_ville = $partenaire_ville;}
	private function getPartenaire_code_postal($partenaire_code_postal){$this->partenaire_code_postal = $partenaire_code_postal;}
	private function getPartenaire_derniere_connexion($partenaire_derniere_connexion){$this->partenaire_derniere_connexion = $partenaire_derniere_connexion;}
	private function getPartenaire_date_ajout($partenaire_date_ajout){$this->partenaire_date_ajout = $partenaire_date_ajout;}

	private function setPartenaire_id($partenaire_id){return $this->partenaire_id = $partenaire_id;}
	private function setPartenaire_siret($partenaire_siret){return $this->partenaire_siret = $partenaire_siret;}
	private function setPartenaire_nom($partenaire_nom){return $this->partenaire_nom = $partenaire_nom;}
	private function setPartenaire_mot_de_passe_hash($partenaire_mot_de_passe_hash){return $this->partenaire_mot_de_passe_hash = $partenaire_mot_de_passe_hash;}
	private function setPartenaire_email($partenaire_email){return $this->partenaire_email = $partenaire_email;}
	private function setPartenaire_telephone($partenaire_telephone){return $this->partenaire_telephone = $partenaire_telephone;}
	private function setPartenaire_adresse($partenaire_adresse){return $this->partenaire_adresse = $partenaire_adresse;}
	private function setPartenaire_ville($partenaire_ville){return $this->partenaire_ville = $partenaire_ville;}
	private function setPartenaire_code_postal($partenaire_code_postal){return $this->partenaire_code_postal = $partenaire_code_postal;}
	private function setPartenaire_derniere_connexion($partenaire_derniere_connexion){return $this->partenaire_derniere_connexion = $partenaire_derniere_connexion;}
	private function setPartenaire_date_ajout($partenaire_date_ajout){return $this->partenaire_date_ajout = $partenaire_date_ajout;}
}
?>