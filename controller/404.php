<?php
require('framework/noyau/moteur.php');
session_start();

$moteur = new Moteur();
$moteur->assigner('titre', 'ERREUR');
$moteur->render('404');

var_dump($_SESSION);
?>