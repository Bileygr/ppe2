<?php

class Offre{
	private $offre_id;
	private $partenaire_id;
	private $formation_id;
	private $offre_titre;
	private $offre_description;
	private $offre_adresse;
	private $offre_ville;
	private $offre_code_postal;
	private $offre_debut;
	private $offre_fin;
	private $offre_creation;

	function __construct($offre_id, $partenaire_id, $formation_id, $offre_titre, $offre_description, 
						 $offre_adresse, $offre_ville, $offre_code_postal, $offre_debut, $offre_fin, $offre_creation){
		$this->offre_id = $offre_id;
		$this->partenaire_id = $partenaire_id;
		$this->formation_id = $formation_id;
		$this->offre_titre = $offre_titre;
		$this->offre_description = $offre_description;
		$this->offre_adresse = $offre_adresse;
		$this->offre_ville = $offre_ville;
		$this->offre_code_postal = $offre_code_postal;
		$this->offre_debut = $offre_debut;
		$this->offre_fin = $offre_fin;
		$this->offre_creation = $offre_creation;
	}

	private function setOffre_id($offre_id){return $this->offre_id = $offre_id;}
	private function setPartenaire_id($partenaire_id){return $this->partenaire_id = $partenaire_id;}
	private function setFormation_id($formation_id){return $this->formation_id = $formation_id;}
	private function setOffre_titre($offre_titre){return $this->offre_titre = $offre_titre;}
	private function setOffre_description($offre_description){return $this->offre_description = $offre_description;}
	private function setOffre_adresse($offre_adresse){return $this->offre_adresse = $offre_adresse;}
	private function setOffre_ville($offre_ville){return $this->offre_ville = $offre_ville;}
	private function setOffre_code_postal($offre_code_postal){return $this->offre_code_postal = $offre_code_postal;}
	private function setOffre_debut($offre_debut){return $this->offre_debut = $offre_debut;}
	private function setOffre_fin($offre_fin){return $this->offre_fin = $offre_fin;}
	private function setOffre_creation($offre_creation){return $this->offre_creation = $offre_creation;}

	private function getOffre_id(){return $this->offre_id;}
	private function getPartenaire_id(){return $this->partenaire_id;}
	private function getFormation_id(){return $this->formation_id;}
	private function getOffre_titre(){return $this->offre_titre;}
	private function getOffre_description(){return $this->offre_description;}
	private function getOffre_adresse(){return $this->offre_adresse;}
	private function getOffre_ville(){return $this->offre_ville;}
	private function getOffre_code_postal(){return $this->offre_code_postal;}
	private function getOffre_debut(){return $this->offre_debut;}
	private function getOffre_fin(){return $this->offre_fin;}
	private function getOffre_creation(){return $this->offre_creation;}
}
?>