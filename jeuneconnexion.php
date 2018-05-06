<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/jeuneDAO.php');

$moteur = new Moteur();
$moteur->assigner('titre', 'Connexion Jeune');
$moteur->render('jeuneconnexion');

if(isset($_POST['form_auth'])){
	$jeune_email = $_POST['jeune_email'];
	$jeune_mot_de_passe = $_POST['jeune_mot_de_passe'];

	if(filter_var(strlen($jeune_siret) == 9)){
		if(strlen($jeune_mot_de_passe) >= 12){
			$jeuneDAO = new JeuneDAO();
			$jeune = $jeuneDAO->connecter($jeune_email, $jeune_mot_de_passe);

			session_start();
			$_SESSION['jeune_id'] = $jeune->getJeune_id();
			$_SESSION['jeune_nom'] = $jeune->getJeune_nom();
			$_SESSION['jeune_prenom'] = $jeune->getJeune_prenom();
			$_SESSION['jeune_mot_de_passe_hash'] = $jeune->getjeune_mot_de_passe_hash();
			$_SESSION['jeune_telephone'] = $jeune->getJeune_telephone();
			$_SESSION['jeune_email'] = $jeune->getJeune_email();
			$_SESSION['jeune_adresse'] = $jeune->getJeune_adresse();
			$_SESSION['jeune_ville'] = $jeune->getJeune_ville();
			$_SESSION['jeune_code_postal'] = $jeune->getJeune_code_postal();
			$_SESSION['jeune_derniere_connexion'] = $jeune->getJeune_derniere_connexion();
			$_SESSION['jeune_creation'] = $jeune->getJeune_creation();

			header("Location: index.php");
		}
	}
}
?>