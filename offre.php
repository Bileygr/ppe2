<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/offreDAO.php');

$offreDAO = new OffreDAO();
$requete = $offreDAO->rechercher();
$resultat = $requete->fetch();

while ($resultat = $requete->fetch()) {
	$test[] = $resultat["partenaire_nom"];
	$test2[] = $resultat["formation_nom"];
	$test3[] = $resultat["offre_nom"];
	$test4[] = $resultat["offre_debut"];
	$test5[] = $resultat["offre_fin"];
	$test6[] = $resultat["offre_creation"];
}

var_dump($test, $test2, $test3, $test4, $test5, $test6);

$moteur = new Moteur();
$moteur->assigner('titre', 'Offres');
$moteur->assigner('offre', '$resultat');
$moteur->assigner('partenaire', $test);
$moteur->render('offre');
?>