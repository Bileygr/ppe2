<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/jeuneDAO.php");

$engine = new Engine();
$jeuneDAO = new JeuneDAO();

$url = $engine->url();

$engine->assign("titre", "Modification Jeune");
$engine->assign("nom", $_SESSION["modifier_jeune_nom"]);
$engine->assign("prenom", $_SESSION["modifier_jeune_prenom"]);
$engine->assign("telephone", $_SESSION["modifier_jeune_telephone"]);
$engine->assign("email", $_SESSION["modifier_jeune_email"]);
$engine->assign("adresse", $_SESSION["modifier_jeune_adresse"]);
$engine->assign("ville", $_SESSION["modifier_jeune_ville"]);
$engine->assign("code postal", $_SESSION["modifier_jeune_code_postal"]);

if(isset($_POST["modifier"])){
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$telephone = $_POST["telephone"];
	$email = $_POST["email"];
	$adresse = $_POST["adresse"];
	$ville = $_POST["ville"];
	$code_postal = $_POST["code_postal"];

	if(!empty($nom) && !empty($prenom) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($code_postal)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			if(strlen($adresse) <= 38){
				if(strlen($ville) <= 32){
					if(strlen($code_postal) == 5){
						$jeune = new Jeune($_SESSION["modifier_jeune_id"], $nom, $prenom, null, $telephone, $email, $adresse, $ville, $code_postal, null, null);
						$jeuneDAO->modifier($jeune);

						unset($_SESSION['modifier_jeune_id'], 
	 						  $_SESSION['modifier_jeune_nom'], 
	  						  $_SESSION['modifier_jeune_prenom'], 
	  						  $_SESSION['modifier_jeune_telephone'],
	  						  $_SESSION['modifier_jeune_email'],
	  						  $_SESSION['modifier_jeune_adresse'],
	  						  $_SESSION['modifier_jeune_ville'],
	  						  $_SESSION['modifier_jeune_code_postal']);

						header("Location: ".$url."/administrateur/tableau/jeune");
					}else{
						header("Location: ".$url."/administrateur/jeune-modification");
					}
				}else{
					header("Location: ".$url."/administrateur/jeune-modification");
				}
			}else{
				header("Location: ".$url."/administrateur/jeune-modification");
			}
		}else{
			header("Location: ".$url."/administrateur/jeune-modification");
		}
	}else{
		header("Location: ".$url."/administrateur/jeune-modification");
	}
}

$engine->render("administrateurJeunemodification.html");
?>