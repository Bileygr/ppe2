<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/administrateurDAO.php');
require_once('dao/class/jeuneDAO.php');
require_once('dao/class/offreDAO.php');
require_once('dao/class/partenaireDAO.php');

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();
$jeuneDAO = new JeuneDAO();
$offreDAO = new OffreDAO();
$partenaireDAO = new PartenaireDAO();

$nbAdmin = $administrateurDAO->nbAdmin();
$nbJeune = $jeuneDAO->nbJeune();
$nbOffre = $offreDAO->nbOffre();
$nbPartenaire = $partenaireDAO->nbPartenaire();
$offres = $offreDAO->compterFormation();
$partenaires = $offreDAO->compterPartenaire();

$offre_resultat = "";
$partenaire_resultat = "";

$url = $engine->url();
$engine->deconnexion();
$engine->administrateur_session_check();
$engine->assign("titre", "Administrateur Profil");
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->assign("nombre d'administrateur", $nbAdmin);
$engine->assign("nombre de jeune", $nbJeune);
$engine->assign("nombre d'offre", $nbOffre);
$engine->assign("nombre de partenaire", $nbPartenaire);

while($offre = $offres->fetch()){
    $offre_resultat .= '["'.$offre["formation_nom"].'", '.$offre["COUNT(*)"].'], ';
}

while($partenaire = $partenaires->fetch()){
	$partenaire_resultat .= '["'.$partenaire["partenaire_nom"].'", '.$partenaire["COUNT(*)"].'], ';
}

$engine->assign("bloc offre_stat", $offre_resultat);
$engine->assign("bloc partenaire_stat", $partenaire_resultat);

$engine->render("administrateurstatistique.html");
?>