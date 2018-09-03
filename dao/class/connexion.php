<?php
class Connect{
	public function connexion(){
		$hote = "127.0.0.1";
		$port = "";
		$base_de_donnee = "ppe";
		$utilisateur = "root";
		$mot_de_passe = "";

		try{
			$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$base_de_donnee.';charset=utf8', $utilisateur, $mot_de_passe);
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		 }

		return $bdd;
	}
}
?>
