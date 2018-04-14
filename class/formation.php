<?php

class Formation{
	private $formation_id;
	private $formation_nom;

	function __construct($formation_id, $formation_nom){
		$this->formation_id = $formation_id;
		$this->formation_nom = $formation_nom;
	}

	private function getFormation_id($formation_id){$this->formation_id = $formation_id;}
	private function getFormation_nom($formation_nom){$this->formation_nom = $formation_nom;}

	private function setFormation_id($formation_id){return $this->formation_id = $formation_id;}
	private function setFormation_nom($formation_nom){return $this->formation_nom = $formation_nom;}
}
?>