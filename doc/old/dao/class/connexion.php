<?php
class Connect{
	public function connexion(){
		$hote = "82.123.7.148";
		$port = "1017";
		$base_de_donnee = "ppe";
		$utilisateur = "ppe";
		$mot_de_passe = "@Crownclown_91";

		try{
			$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$base_de_donnee.';charset=utf8', $utilisateur, $mot_de_passe);
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		 }

		return $bdd;
	}
}
?>