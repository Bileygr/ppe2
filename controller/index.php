<?php
include_once('index.php');
require('framework/noyau/moteur.php');
session_start();

$moteur = new Moteur();
$moteur->assigner('titre', 'Index');
$moteur->render('index');

var_dump($_SESSION);
?>