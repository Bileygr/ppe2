<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/candidatureDAO.php");
require_once("dao/class/offreDAO.php");

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$candidatures = $candidatureDAO->compter_les_candidatures_partenaire();
$formations = $offreDAO->compter_formations_par_partenaires($_SESSION["partenaire_id"]);
$nombre_d_offres = $offreDAO->nombre_d_offres_par_partenaires($_SESSION["partenaire_id"]);

$candidature = "";
$formation = "";

$url = $engine->url();
$engine->deconnexion();
$engine->partenaire_session_check();

$engine->assign("titre", "Menu Partenaire");
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nombre d'offres", $nombre_d_offres);

while($resultat = $candidatures->fetch()){
  $candidature .= "[\"".$resultat["partenaire_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}


while($resultat = $formations->fetch()){
  $formation .= "[\"".$resultat["formation_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

$engine->assign("statistique des candidatures", $candidature);
$engine->assign("statistique des formations", $formation);

$engine->render("partenairestatistique.html");
?>