<?php
class Connect{
	public function connexion(){
		$hote 			= "localhost";
		$base_de_donnee = "cheik_ppe";
		$utilisateur	= "root";
		$mot_de_passe 	= "";

		try{
			$bdd = new PDO('mysql:host='.$hote.';dbname='.$base_de_donnee.';charset=utf8', $utilisateur, $mot_de_passe);
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		 }

		return $bdd;
	}
}
?>