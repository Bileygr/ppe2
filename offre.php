<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/offreDAO.php');

$offreDAO = new OffreDAO();
$resultat = $offreDAO->rechercher();

//var_dump($resultat);

$moteur = new Moteur();
$moteur->assigner('titre', 'Offres');
$moteur->assigner('partenaire', '<td>'.$resultat['partenaire_nom'].'</td>');
$moteur->assigner('formation', '<td>'.$resultat['formation_nom'].'</td>');
$moteur->assigner('nom', '<td>'.$resultat['offre_nom'].'</td>');
$moteur->assigner('début', '<td>'.$resultat['offre_debut'].'</td>');
$moteur->assigner('fin', '<td>'.$resultat['offre_fin'].'</td>');
$moteur->assigner('création', '<td>'.$resultat['offre_creation'].'</td>');
$moteur->render('offre');
?>