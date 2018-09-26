<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/administrateurDAO.php");

$engine = new Engine();

$url = $engine->url();
$engine->super_admin_session_check($_SESSION["administrateur_super"]);

$engine->assign("titre", "Administrateur Modification");
$engine->assign("id", $_SESSION["modifier_administrateur_id"]);
$engine->assign("nom", $_SESSION["modifier_administrateur_nom"]);
$engine->assign("prenom", $_SESSION["modifier_administrateur_prenom"]);
$engine->assign("status de super administrateur", $_SESSION["modifier_administrateur_super"]);
$engine->assign("telephone", $_SESSION["modifier_administrateur_telephone"]);
$engine->assign("email", $_SESSION["modifier_administrateur_email"]);
$engine->assign("adresse", $_SESSION["modifier_administrateur_adresse"]);
$engine->assign("ville", $_SESSION["modifier_administrateur_ville"]);
$engine->assign("code postal", $_SESSION["modifier_administrateur_code_postal"]);

if(isset($_POST["modifier"])){
	if(isset($_POST["super_administrateur_status"])){
		$super_administrateur_status = 1;
	}else{
		$super_administrateur_status = 0;
	}

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
						$administrateur = new Administrateur($_SESSION["modifier_administrateur_id"], $super_administrateur_status, $nom, $prenom, null, $telephone, $email, $adresse, $ville, $code_postal, null, null);

						$administrateurDAO = new AdministrateurDAO();
						$administrateurDAO->modifier($administrateur);

						unset($_SESSION["modifier_administrateur_id"], 
	 						  $_SESSION["modifier_administrateur_nom"], 
	  						  $_SESSION["modifier_administrateur_prenom"], 
	  						  $_SESSION["modifier_administrateur_super"], 
	  						  $_SESSION["modifier_administrateur_telephone"],
	  						  $_SESSION["modifier_administrateur_email"],
	  						  $_SESSION["modifier_administrateur_adresse"],
	  						  $_SESSION["modifier_administrateur_ville"],
	  						  $_SESSION["modifier_administrateur_code_postal"]);

						header("Location: ".$url."/administrateur/tableau/administrateur");
					}else{
						header("Location: ".$url."/administrateur/administrateur-modification");
					}
				}else{
					header("Location: ".$url."/administrateur/administrateur-modification");
				}
			}else{
				header("Location: ".$url."/administrateur/administrateur-modification");
			}
		}else{
			header("Location: ".$url."/administrateur/administrateur-modification");
		}
	}else{
		header("Location: ".$url."/administrateur/administrateur-modification");
	}
}

$engine->render("administrateurModification.html");
?>