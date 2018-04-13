<?php
namespace class;

class jeune{
	private $jeune_id;
	private $jeune_nom;
	private $jeune_prenom;
	private $jeune_mot_de_passe_hash;
	private $jeune_email;
	private $jeune_telephone;
	private $jeune_adresse;
	private $jeune_ville;
	private $jeune_code_postal;
	private $jeune_derniere_connexion;
	private $jeune_date_ajout;

	settype($jeune_id, "integer");
	settype($super_jeune, "integer");
	settype($jeune_nom, "string");
	settype($jeune_prenom, "string");
	settype($jeune_mot_de_passe_hash, "string");
	settype($jeune_email, "string");
	settype($jeune_telephone, "string");
	settype($jeune_adresse, "string");
	settype($jeune_ville, "string");
	settype($jeune_code_postal, "string");
	settype($jeune_derniere_connexion, "string");
	settype($jeune_date_ajout, "string");

	private function getJeune_id($jeune_id){$this->jeune_id = $jeune_id;}
	private function getJeune_nom($jeune_nom){$this->jeune_nom = $jeune_nom;}
	private function getJeune_prenom($jeune_prenom){$this->jeune_prenom = $jeune_prenom;}
	private function getJeune_mot_de_passe_hash($jeune_mot_de_passe_hash){$this->jeune_mot_de_passe_hash = $jeune_mot_de_passe_hash;}
	private function getJeune_email($jeune_email){$this->jeune_email = $jeune_email;}
	private function getJeune_telephone($jeune_telephone){$this->jeune_telephone = $jeune_telephone;}
	private function getJeune_adresse($jeune_adresse){$this->jeune_adresse = $jeune_adresse;}
	private function getJeune_ville($jeune_ville){$this->jeune_ville = $jeune_ville;}
	private function getJeune_code_postal($jeune_code_postal){$this->jeune_code_postal = $jeune_code_postal;}
	private function getJeune_derniere_connexion($jeune_derniere_connexion){$this->jeune_derniere_connexion = $jeune_derniere_connexion;}
	private function getJeune_date_ajout($jeune_date_ajout){$this->jeune_date_ajout = $jeune_date_ajout;}

	private function setJeune_id($jeune_id){return $this->jeune_id = $jeune_id;}
	private function setJeune_nom($jeune_nom){return $this->jeune_nom = $jeune_nom;}
	private function setJeune_prenom($jeune_prenom){return $this->jeune_prenom = $jeune_prenom;}
	private function setJeune_mot_de_passe_hash($jeune_mot_de_passe_hash){return $this->jeune_mot_de_passe_hash = $jeune_mot_de_passe_hash;}
	private function setJeune_email($jeune_email){return $this->jeune_email = $jeune_email;}
	private function setJeune_telephone($jeune_telephone){return $this->jeune_telephone = $jeune_telephone;}
	private function setJeune_adresse($jeune_adresse){return $this->jeune_adresse = $jeune_adresse;}
	private function setJeune_ville($jeune_ville){return $this->jeune_ville = $jeune_ville;}
	private function setJeune_code_postal($jeune_code_postal){return $this->jeune_code_postal = $jeune_code_postal;}
	private function setJeune_derniere_connexion($jeune_derniere_connexion){return $this->jeune_derniere_connexion = $jeune_derniere_connexion;}
	private function setJeune_date_ajout($jeune_date_ajout){return $this->jeune_date_ajout = $jeune_date_ajout;}
}
?>