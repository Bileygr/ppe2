<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/administrateurDAO.php");

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();

$url = $engine->url();

$administrateur_id = $_SESSION["administrateur_id"];
$administrateur_nom = $_SESSION["administrateur_nom"];
$administrateur_prenom = $_SESSION["administrateur_prenom"];
$administrateur_super = $_SESSION["administrateur_super"];
$administrateur_telephone = $_SESSION["administrateur_telephone"];
$administrateur_email = $_SESSION["administrateur_email"];
$administrateur_adresse = $_SESSION["administrateur_adresse"];
$administrateur_ville = $_SESSION["administrateur_ville"];
$administrateur_code_postal = $_SESSION["administrateur_code_postal"];

$engine->assign("titre", "Administrateur Modifier ses Informations");
$engine->assign("nom", $administrateur_nom);
$engine->assign("prenom", $administrateur_prenom);
$engine->assign("status de super administrateur", $administrateur_super);
$engine->assign("telephone", $administrateur_telephone);
$engine->assign("email", $administrateur_email);
$engine->assign("adresse", $administrateur_adresse);
$engine->assign("ville", $administrateur_ville);
$engine->assign("code postal", $administrateur_code_postal);

if(isset($_POST['modifier'])){
	if(isset($_POST['super_administrateur_status'])){
		$super_administrateur_status = 1;
	}else{
		$super_administrateur_status = 0;
	}

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$code_postal = $_POST['code_postal'];

	if(!empty($nom) && !empty($prenom) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($code_postal)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			if(strlen($adresse) <= 38){
				if(strlen($ville) <= 32){
					if(strlen($code_postal) == 5){
						$administrateur = new Administrateur($administrateur_id, $super_administrateur_status, $nom, $prenom, null, $telephone, $email, $adresse, $ville, $code_postal, null, null);
				
						$administrateurDAO->modifier($administrateur);

						$engine->deconnecter();
					}else{
						header("Location: ".$url."/administrateur/modifier-mes-informations");
					}
				}else{
					header("Location: ".$url."/administrateur/modifier-mes-informations");
				}
			}else{
				header("Location: ".$url."/administrateur/modifier-mes-informations");
			}
		}else{
			header("Location: ".$url."/administrateur/modifier-mes-informations");
		}
	}else{
		header("Location: ".$url."/administrateur/modifier-mes-informations");
	}
}

$engine->render("administrateurModifierMesInformations.html");
?>