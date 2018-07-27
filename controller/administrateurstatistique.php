<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/offreDAO.php');

var_dump($_SESSION);

$url = "http://localhost:8000/ppe2/";

$engine = new Engine();
$offreDAO = new OffreDAO();

$engine->assign("titre", "Administrateur Profil");
$engine->assign("url", $url);
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->render("administrateurstatistique.html");

if(!isset($_SESSION['administrateur_id'])){
  header("Location: ".$url);
}

if(isset($_POST['deconnexion'])){
  if(session_destroy()){
    header("Location: ".$url);
  }
}

$offre = $offreDAO->compterFormation();
$partenaire = $offreDAO->compterPartenaire();
?>