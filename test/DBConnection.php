<?php
require_once("config/Connection.php");

$connect = new Connect();
$dbconnection = $connect->DBConnection();

if($dbconnection == true){
	echo "La connexion à la base de données a réussie.";
}elseif($dbconnection == false){
	echo "La connexion à la base de données a échouée.";
}

$query = $dbconnection->query("SELECT * FROM jeune");
$results = $query->fetch();

var_dump($results);
?>