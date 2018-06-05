<?php

class Offre{
	private $offre_id;
	private $partenaire_id;
	private $formation_id;
	private $offre_titre;
	private $offre_description;
	private $offre_debut;
	private $offre_fin;
	private $offre_creation;

	function __construct($offre_id, $partenaire_id, $formation_id, $offre_titre, $offre_description, 
						 $offre_debut, $offre_fin, $offre_creation){
		$this->offre_id = $offre_id;
		$this->partenaire_id = $partenaire_id;
		$this->formation_id = $formation_id;
		$this->offre_titre = $offre_titre;
		$this->offre_description = $offre_description;
		$this->offre_debut = $offre_debut;
		$this->offre_fin = $offre_fin;
		$this->offre_creation = $offre_creation;
	}

	public function setOffre_id($offre_id){return $this->offre_id = $offre_id;}
	public function setPartenaire_id($partenaire_id){return $this->partenaire_id = $partenaire_id;}
	public function setFormation_id($formation_id){return $this->formation_id = $formation_id;}
	public function setOffre_titre($offre_titre){return $this->offre_titre = $offre_titre;}
	public function setOffre_description($offre_description){return $this->offre_description = $offre_description;}
	public function setOffre_debut($offre_debut){return $this->offre_debut = $offre_debut;}
	public function setOffre_fin($offre_fin){return $this->offre_fin = $offre_fin;}
	public function setOffre_creation($offre_creation){return $this->offre_creation = $offre_creation;}

	public function getOffre_id(){return $this->offre_id;}
	public function getPartenaire_id(){return $this->partenaire_id;}
	public function getFormation_id(){return $this->formation_id;}
	public function getOffre_titre(){return $this->offre_titre;}
	public function getOffre_description(){return $this->offre_description;}
	public function getOffre_debut(){return $this->offre_debut;}
	public function getOffre_fin(){return $this->offre_fin;}
	public function getOffre_creation(){return $this->offre_creation;}
}
?>