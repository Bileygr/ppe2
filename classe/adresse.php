<?php

class Adresse{
	private $adresse_id;
	private $adresse_adresse;
	private $adresse_ville;
	private $adresse_code_postal;
	private $adresse_date_ajout;

	function __construct($adresse_id, $adresse_adresse, $adresse_ville, $adresse_code_postal, $adresse_date_ajout){
		$this->adresse_id = $adresse_id;
		$this->adresse_adresse = $adresse_adresse;
		$this->adresse_ville = $adresse_ville;
		$this->adresse_code_postal = $adresse_code_postal;
		$this->adresse_date_ajout = $adresse_date_ajout;																			
	}

	private function getAdresse_id(){$this->adresse_id;}
	private function getAdresse_adresse(){$this->adresse_adresse;}
	private function getAdresse_ville(){$this->adresse_ville;}
	private function getAdresse_code_postal(){$this->adresse_code_postal;}
	private function getAdresse_date_ajout(){$this->adresse_date_ajout;}

	private function setAdresse_id($adresse_id){return $this->adresse_id = $adresse_id;}
	private function setAdresse_adresse($adresse_adresse){return $this->adresse_adresse = $adresse_adresse;}
	private function setAdresse_ville($adresse_ville){return $this->adresse_ville = $adresse_ville;}
	private function setAdresse_code_postal($adresse_code_postal){return $this->adresse_code_postal = $adresse_code_postal;}
	private function setAdresse_date_ajout($adresse_date_ajout){return $this->adresse_date_ajout = $adresse_date_ajout;}
}
?>