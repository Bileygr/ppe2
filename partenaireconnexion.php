<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/partenaireDAO.php');

$moteur = new Moteur();
$moteur->assigner('titre', 'Connexion Partenaire');
$moteur->render('partenaireconnexion');

if(isset($_POST['form_auth'])){
	$partenaire_siret= $_POST['partenaire_siret'];
	$partenaire_mot_de_passe = $_POST['partenaire_mot_de_passe'];

	if(filter_var(strlen($partenaire_siret) == 9)){
		if(strlen($partenaire_mot_de_passe) >= 12){
			$partenaireDAO = new PartenaireDAO();
			$partenaire = $partenaireDAO->connecter($partenaire_siret, $partenaire_mot_de_passe);

			session_start();
			$_SESSION['partenaire_id'] = $partenaire->getPartenaire_id();
			$_SESSION['partenaire_siret'] = $partenaire->getPartenaire_siret();
			$_SESSION['partenaire_nom'] = $partenaire->getPartenaire_nom();
			$_SESSION['partenaire_mot_de_passe_hash'] = $partenaire->getPartenaire_mot_de_passe_hash();
			$_SESSION['partenaire_telephone'] = $partenaire->getPartenaire_telephone();
			$_SESSION['partenaire_email'] = $partenaire->getPartenaire_email();
			$_SESSION['partenaire_adresse'] = $partenaire->getPartenaire_adresse();
			$_SESSION['partenaire_ville'] = $partenaire->getPartenaire_ville();
			$_SESSION['partenaire_code_postal'] = $partenaire->getPartenaire_code_postal();
			$_SESSION['partenaire_derniere_connexion'] = $partenaire->getPartenaire_derniere_connexion();
			$_SESSION['partenaire_creation'] = $partenaire->getPartenaire_creation();

			header("Location: index.php");
		}
	}
}
?>