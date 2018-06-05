<?php
require_once('connexion.php');
require_once('classes/formation.php');
require_once('dao/interfaces/formationInterface.php');

class FormationDAO implements FormationInterface{
	public function obtenirFormation(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT * FROM formation");

		return $requete;
		$requete 	= null;
		$connexion 	= null;
	}
} 
?>