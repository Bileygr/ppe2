<?php
require_once('config/Connection.php');
require_once('app/models/base/Formation.class.php');

class FormationDAO{
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
