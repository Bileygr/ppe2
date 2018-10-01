<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/AdministrateurDAO.class.php");

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();

$url = $engine->url();
$engine->super_admin_session_check($_SESSION["administrateur_super"]);
$engine->assign("titre", "Inscription Administrateur");

if(isset($_POST["ajouter"])){
	if(isset($_POST["super_administrateur_status"])){
		$super_administrateur_status= 1;
	}else{
		$super_administrateur_status= 0;
	}

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$mot_de_passe = $_POST["mot_de_passe"];
	$mot_de_passe_confirmation = $_POST["mot_de_passe_confirmation"];
	$telephone = $_POST["telephone"];
	$email = $_POST["email"];
	$adresse = $_POST["adresse"];
	$ville = $_POST["ville"];
	$code_postal = $_POST["code_postal"];

	if(!empty($nom) && !empty($prenom) && !empty($mot_de_passe) &&
		!empty($mot_de_passe_confirmation) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($code_postal)){
		if(strlen($mot_de_passe) >=12 && strlen($mot_de_passe_confirmation) >= 12){
			if($mot_de_passe == $mot_de_passe_confirmation){
				$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);
				
				if(password_verify($mot_de_passe, $mot_de_passe_hash)){
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						if(strlen($adresse) <= 38){
							if(strlen($ville) <= 32){
								if(strlen($code_postal) == 5){
									$administrateur = new Administrateur(null, $super_administrateur_status, $nom, $prenom, $mot_de_passe_hash, $telephone,$email, $adresse, $ville, $code_postal, null, null);
									$administrateurDAO->inscrire($administrateur);

									header("Location: ".$url."/administrateur/tableau/administrateur");
								}else{
									header("Location: ".$url."/administrateur/inscription");
								}
							}else{
								header("Location: ".$url."/administrateur/inscription");
							}
						}else{
							header("Location: ".$url."/administrateur/inscription");
						}
					}else{
						header("Location: ".$url."/administrateur/inscription");
					}
				}else{
					header("Location: ".$url."/administrateur/inscription");
				}
			}else{
				header("Location: ".$url."/administrateur/inscription");
			}
		}else{
			header("Location: ".$url."/administrateur/inscription");
		}
	}else{
		header("Location: ".$url."/administrateur/inscription");
	}
}

$engine->render("administrateurinscription.html");
?>
