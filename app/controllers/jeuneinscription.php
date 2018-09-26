<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/jeuneDAO.php");

$engine = new Engine();
$jeuneDAO = new JeuneDAO();

$url = $engine->url();
$engine->assign("titre", "Inscription Jeune");

if(isset($_POST["inscrire"])){
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
		!empty($mot_de_passe_confirmation) && !empty($telephone) && !empty($email) && !empty($adresse) && !empty($ville) && !empty($code_postal)){
		if(strlen($mot_de_passe) >=12 && strlen($mot_de_passe_confirmation) >= 12){
			if($mot_de_passe == $mot_de_passe_confirmation){
				$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($mot_de_passe, $mot_de_passe_hash)){
					if(strlen($telephone) == 10){
						if(filter_var($email, FILTER_VALIDATE_EMAIL)){
							if(strlen($adresse) <= 38){
								if(strlen($ville) <= 32){
									if(strlen($code_postal) == 5){
										$jeune = new Jeune(null, $nom, $prenom, $mot_de_passe_hash, $telephone, $email, $adresse, $ville, $code_postal, null, null);
										$jeuneDAO->inscrire($jeune);

										header("Location: ".$url."/jeune/connexion");
									}else{
										header("Location: ".$url."/jeune/inscription");
									}
								}else{
									header("Location: ".$url."/jeune/inscription");
								}
							}else{
								header("Location: ".$url."/jeune/inscription");
							}
						}else{
							header("Location: ".$url."/jeune/inscription");
						}
					}else{
						header("Location: ".$url."/jeune/inscription");
					}
				}else{
					header("Location: ".$url."/jeune/inscription");
				}
			}else{
				header("Location: ".$url."/jeune/inscription");
			}
		}else{
			header("Location: ".$url."/jeune/inscription");
		}
	}else{
		header("Location: ".$url."/jeune/inscription");
	}
}

$engine->render("jeuneInscription.html");
?>