<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/jeuneDAO.php");

$engine = new Engine(); 
$jeuneDAO = new JeuneDAO();

$url = $engine->url();
$engine->assign("titre", "Connexion jeune");

if(isset($_POST["connecter"])){
	$email = $_POST["email"];
	$mot_de_passe = $_POST["mot_de_passe"];
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		if(strlen($mot_de_passe) >= 12){
			session_destroy();
			session_start();
			$jeune = $jeuneDAO->connecter($email, $mot_de_passe);

			$_SESSION["jeune_id"] = $jeune->getJeune_id();
			$_SESSION["jeune_nom"] = $jeune->getJeune_nom();
			$_SESSION["jeune_prenom"] = $jeune->getJeune_prenom();
			$_SESSION["jeune_mot_de_passe_hash"] = $jeune->getjeune_mot_de_passe_hash();
			$_SESSION["jeune_telephone"] = $jeune->getJeune_telephone();
			$_SESSION["jeune_email"] = $jeune->getJeune_email();
			$_SESSION["jeune_adresse"] = $jeune->getJeune_adresse();
			$_SESSION["jeune_ville"] = $jeune->getJeune_ville();
			$_SESSION["jeune_code_postal"] = $jeune->getJeune_code_postal();
			$_SESSION["jeune_derniere_connexion"] = $jeune->getJeune_derniere_connexion();
			$_SESSION["jeune_creation"] = $jeune->getJeune_creation();

			header("Location: ".$url);
		}else{
			header("Location: ".$url."/jeune/connexion");
		}
	}else{
		header("Location: ".$url."/jeune/connexion");
	}
}

$engine->render("jeuneConnexion.html");
?>