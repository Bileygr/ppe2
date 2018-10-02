<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/CandidatureDAO.class.php");
require_once("app/models/dao/OffreDAO.class.php");

$partenaire_id = $_SESSION["partenaire_id"];

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$candidatures = $candidatureDAO->compter_les_candidatures_partenaire();
$formations = $offreDAO->compter_formations_par_partenaires($partenaire_id);
$nombre_de_candidatures_par_partenaires = $candidatureDAO->nombre_de_candidatures_par_partenaires($partenaire_id);
$nombre_d_offres = $offreDAO->nombre_d_offres_par_partenaires($partenaire_id);

$candidature = "";
$formation = "";

$url = $engine->url();
$engine->deconnexion();
$engine->partenaire_session_check();

$engine->assign("titre", "Menu Partenaire");
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nombre de candidatures", $nombre_de_candidatures_par_partenaires);
$engine->assign("nombre d'offres", $nombre_d_offres);

while($resultat = $candidatures->fetch()){
  $candidature .= "[\"".$resultat["partenaire_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}


while($resultat = $formations->fetch()){
  $formation .= "[\"".$resultat["formation_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

$engine->assign("statistique des candidatures", $candidature);
$engine->assign("statistique des formations", $formation);

$engine->render("partenairecamemberts.html");
?>
