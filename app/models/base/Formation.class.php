<?php
class Formation{
	private $formation_id;
	private $formation_nom;
	private $formation_creation;

	function __construct($formation_id, $formation_nom, $formation_creation){
		$this->formation_id 		= $formation_id;
		$this->formation_nom 		= $formation_nom;
		$this->formation_creation 	= $formation_creation;
	}

	public function setFormation_id($formation_id){return $this->formation_id = $formation_id;}
	public function setFormation_nom($formation_nom){return $this->formation_nom = $formation_nom;}
	public function setFormation_creation($formation_creation){return $this->formation_creation = $formation_creation;}

	public function getFormation_id(){$this->formation_id;}
	public function getFormation_nom(){$this->formation_nom ;}
	public function getFormation_creation(){$this->formation_creation;}

	public function toString(){
		echo "Formation [Formation_id= ".$this->formation_id.", Formation_nom= ".$this->formation_nom.", Formation_creation= ".$this->formation_creation."]";
	}
}
?>