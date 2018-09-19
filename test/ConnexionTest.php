<?php
require_once("config/Connection.php");

$connect = new Connect();
$connection = $connect->connection();

if($connection == true){
	echo "La connection a la base de donnee a reussie.";
}else{
 	echo "La connection a la base de donnees a echouee.";
 }
?>
