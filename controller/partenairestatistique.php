<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/candidatureDAO.php");
require_once("dao/class/offreDAO.php");

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$candidatures = $candidatureDAO->compterCandidaturePartenaire();
$formations = $offreDAO->compterFormationParPartenaire($_SESSION["partenaire_id"]);
$nbOffre = $offreDAO->nbPartenaireOffre($_SESSION["partenaire_id"]);

$candidature = "";
$formation = "";

$url = $engine->url();
$engine->deconnexion();
$engine->partenaire_session_check();
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nombre d'offre", $nbOffre);

while($resultat = $candidatures->fetch()){
  $candidature .= '["'.$resultat["partenaire_nom"].'", '.$resultat["COUNT(*)"].'], ';
}


while($resultat = $formations->fetch()){
  $formation .= '["'.$resultat["formation_nom"].'", '.$resultat["COUNT(*)"].'], ';
}

$engine->assign("information candidature", $candidature);
$engine->assign("information formation", $formation);

$engine->render("partenairestatistique.html");
?>