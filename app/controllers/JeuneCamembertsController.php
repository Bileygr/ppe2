<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/CandidatureDAO.class.php");

$jeune_id = $_SESSION["jeune_id"];

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();

$formations = $candidatureDAO->compter_les_candidatures_par_formations($jeune_id);
$nombre_de_candidatures = $candidatureDAO->nombre_de_candidatures($jeune_id);
$partenaires = $candidatureDAO->compter_les_candidatures_partenaire($jeune_id);

$formation = "";
$partenaire = "";

$url = $engine->url();
$engine->deconnexion();
$engine->jeune_session_check();

$engine->assign("titre", "Menu Jeune");
$engine->assign("nom", $_SESSION["jeune_nom"]);
$engine->assign("prenom", $_SESSION["jeune_prenom"]);
$engine->assign("nombre de candidature", $nombre_de_candidatures);

while($resultat = $formations->fetch()){
  $formation .= "[\"".$resultat["formation_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

while($resultat = $partenaires->fetch()){
  $partenaire .= "[\"".$resultat["partenaire_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

$engine->assign("statistique formation", $formation);
$engine->assign("statistique partenaire", $partenaire);

$engine->render("jeunecamemberts.html");
?>
