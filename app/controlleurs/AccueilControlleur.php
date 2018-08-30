<?php
session_start();
require_once("app/modeles/moteur.php");

$moteur = new Moteur();
//$moteur->assigner("date", date('Y'));
$moteur->presenter("accueil.html");
?>