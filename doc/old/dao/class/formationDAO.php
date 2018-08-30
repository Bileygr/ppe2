<?php
require_once('connexion.php');
require_once('class/formation.php');
require_once('dao/interface/formationInterface.php');

class FormationDAO implements FormationInterface{
	public function lister(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT * FROM formation");

		return $requete;
		$requete 	= null;
		$connexion 	= null;
	}
} 
?>