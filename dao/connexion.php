<?php

class connect{
	private $host = "localhost";
	private $db = "ppe";
	private $user = "root";
	private $password = "";
	 
	private function connect(){

	}
}
try{
	$bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
}catch(Exception $e){
	echo 'Échec lors de la connexion:' . $e->getMessage();
}
?>