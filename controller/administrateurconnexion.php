<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/administrateurDAO.php');

$engine = new Engine();
$url = $engine->url();
$engine->assign("titre", "Administrateur Connexion");

if(isset($_POST['form_auth'])){
	$email = $_POST['email'];
	$mot_de_passe = $_POST['mot_de_passe'];

	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		if(strlen($mot_de_passe) >= 12){
			$administrateurDAO 	= new AdministrateurDAO();
			$administrateur = $administrateurDAO->connecter($email, $mot_de_passe);
			
			$_SESSION['administrateur_id'] 					= $administrateur->getAdministrateur_id();
			$_SESSION['administrateur_super'] 				= $administrateur->getAdministrateur_super();
			$_SESSION['administrateur_nom'] 				= $administrateur->getAdministrateur_nom();
			$_SESSION['administrateur_prenom'] 				= $administrateur->getAdministrateur_prenom();
			$_SESSION['administrateur_mot_de_passe_hash'] 	= $administrateur->getAdministrateur_mot_de_passe_hash();
			$_SESSION['administrateur_telephone'] 			= $administrateur->getAdministrateur_telephone();
			$_SESSION['administrateur_email'] 				= $administrateur->getAdministrateur_email();
			$_SESSION['administrateur_adresse'] 			= $administrateur->getAdministrateur_adresse();
			$_SESSION['administrateur_ville'] 				= $administrateur->getAdministrateur_ville();
			$_SESSION['administrateur_code_postal']			= $administrateur->getAdministrateur_code_postal();
			$_SESSION['administrateur_derniere_connexion'] 	= $administrateur->getAdministrateur_derniere_connexion();
			$_SESSION['administrateur_creation'] 			= $administrateur->getAdministrateur_creation();

			header("Location: ".$url."/administrateur/profil");
		}
	}
}

$engine->render("administrateurconnexion.html");
?>