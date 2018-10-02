<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/PartenaireDAO.class.php");

$engine = new Engine();
$partenaireDAO = new PartenaireDAO();

$url = $engine->url();
$engine->administrateur_session_check();

$engine->assign("titre", "Modification Partenaire");
$engine->assign("siret", $_SESSION["modifier_partenaire_siret"]);
$engine->assign("nom", $_SESSION["modifier_partenaire_nom"]);
$engine->assign("telephone", $_SESSION["modifier_partenaire_telephone"]);
$engine->assign("email", $_SESSION["modifier_partenaire_email"]);
$engine->assign("adresse", $_SESSION["modifier_partenaire_adresse"]);
$engine->assign("ville", $_SESSION["modifier_partenaire_ville"]);
$engine->assign("code postal", $_SESSION["modifier_partenaire_code_postal"]);

if(isset($_POST["modifier"])){
	$siret = $_POST["siret"];
	$nom = $_POST["nom"];
	$telephone = $_POST["telephone"];
	$email = $_POST["email"];
	$adresse = $_POST["adresse"];
	$ville = $_POST["ville"];
	$code_postal = $_POST["code_postal"];

	if(!empty($siret) && !empty($nom) && !empty($telephone) && !empty($email) && !empty($adresse)
		&& !empty($ville) && !empty($code_postal)){
		if(strlen($siret) == 9){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				if(strlen($adresse) <= 38){
					if(strlen($ville) <= 32){
						if(strlen($code_postal) == 5){
							$partenaire = new partenaire($_SESSION["modifier_partenaire_id"], $siret, $nom, null, $telephone, $email, $adresse, $ville, $code_postal, null,  null);

							$partenaireDAO->modifier($partenaire);

							unset($_SESSION["modifier_partenaire_id"], 
								  $_SESSION["modifier_partenaire_siret"],
	 						  	  $_SESSION["modifier_partenaire_nom"], 
	  						  	  $_SESSION["modifier_partenaire_telephone"],
	  						  	  $_SESSION["modifier_partenaire_email"],
	  						  	  $_SESSION["modifier_partenaire_adresse"],
	  						  	  $_SESSION["modifier_partenaire_ville"],
	  						  	  $_SESSION["modifier_partenaire_code_postal"]);

							header("Location: ".$url."/administrateur/gestion/partenaire");
						}else{
							header("Location: ".$url."/administrateur/gestion/partenaire/modification");
						}
					}else{
						header("Location: ".$url."/administrateur/gestion/partenaire/modification");
					}
				}else{
					header("Location: ".$url."/administrateur/gestion/partenaire/modification");
				}
			}else{
				header("Location: ".$url."/administrateur/gestion/partenaire/modification");
			}
		}else{
			header("Location: ".$url."/administrateur/gestion/partenaire/modification");
		}
	}else{
		header("Location: ".$url."/administrateur/gestion/partenaire/modification");
	}
}

$engine->render("administrateurgestionpartenairemodification.html");
?>
