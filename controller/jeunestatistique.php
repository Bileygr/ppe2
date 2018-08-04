<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/candidatureDAO.php');

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();

$formations = $candidatureDAO->compterCandidatureParFormation($_SESSION["jeune_id"]);
$nbCandidature = $candidatureDAO->nbCandidatures($_SESSION['jeune_id']);
$partenaires = $candidatureDAO->compterCandidatureParPartenaire($_SESSION["jeune_id"]);

$formation = "";
$partenaire = "";

$url = $engine->url();
$engine->deconnexion();
$engine->jeune_session_check();
$engine->assign("titre", "Profil Jeune");
$engine->assign("nom", $_SESSION["jeune_nom"]);
$engine->assign("prenom", $_SESSION["jeune_prenom"]);
$engine->assign("nombre de candidature", $nbCandidature);

while($resultat = $formations->fetch()){
  $formation .= '["'.$resultat["formation_nom"].'", '.$resultat["COUNT(*)"].'], ';
}

while($resultat = $partenaires->fetch()){
  $partenaire .= '["'.$resultat["partenaire_nom"].'", '.$resultat["COUNT(*)"].'], ';
}

$engine->assign("statistique formation", $formation);
$engine->assign("statistique partenaire", $partenaire);

$engine->render("jeunestatistique.html");
?>