<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/AdministrateurDAO.class.php");
require_once("app/models/dao/JeuneDAO.class.php");
require_once("app/models/dao/OffreDAO.class.php");
require_once("app/models/dao/PartenaireDAO.class.php");

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();
$jeuneDAO = new JeuneDAO();
$offreDAO = new OffreDAO();
$partenaireDAO = new PartenaireDAO();

$nombre_d_administrateurs = $administrateurDAO->nombre_d_administrateurs();
$nombre_de_jeune = $jeuneDAO->nombre_de_jeunes();
$nombre_d_offres = $offreDAO->nombre_d_offres();
$nombre_de_partenaires = $partenaireDAO->nombre_de_partenaires();
$offres = $offreDAO->compter_les_formations();
$partenaires = $offreDAO->compter_les_partenaires();

$offre = "";
$partenaire = "";

$url = $engine->url();
$engine->deconnexion();
$engine->administrateur_session_check();

$engine->assign("titre", "Menu Administrateur");
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->assign("nombre d'administrateurs", $nombre_d_administrateurs);
$engine->assign("nombre de jeunes", $nombre_de_jeune);
$engine->assign("nombre d'offres", $nombre_d_offres);
$engine->assign("nombre de partenaires", $nombre_de_partenaires);

while($resultat = $offres->fetch()){
    $offre .= "[\"".$resultat["formation_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

while($resultat = $partenaires->fetch()){
	$partenaire .= "[\"".$resultat["partenaire_nom"]."\", ".$resultat["COUNT(*)"]."], ";
}

$engine->assign("statistique des offres", $offre);
$engine->assign("statistique des partenaires", $partenaire);

$engine->render("administrateurcamemberts.html");
?>
