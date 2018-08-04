<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/partenaireDAO.php');

$engine = new Engine();
$url = $engine->url();
$engine->assign("titre", "Partenaire Connexion");

if(isset($_POST['form_auth'])){
	$siret = $_POST['siret'];
	$mot_de_passe = $_POST['mot_de_passe'];

	if(filter_var(strlen($siret) == 9)){
		if(strlen($mot_de_passe) >= 12){
			session_destroy();
			session_start();
			$partenaireDAO = new PartenaireDAO();
			$partenaire = $partenaireDAO->connecter($siret, $mot_de_passe);

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

			header("Location: ".$url."/partenaire/profil");
		}
	}else{
		exit("<h1>Erreur: La longeur du SIRET est incorrecte.</h1>");
	}
}

$engine->render("partenaireconnexion.html");
?>