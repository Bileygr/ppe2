"<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/partenaireDAO.php");

$engine = new Engine();
$partenaireDAO = new PartenaireDAO();

$url = $engine->url();
$engine->partenaire_session_check();

$engine->assign("siret", $_SESSION["partenaire_siret"]);
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("telephone", $_SESSION["partenaire_telephone"]);
$engine->assign("email", $_SESSION["partenaire_email"]);
$engine->assign("adresse", $_SESSION["partenaire_adresse"]);
$engine->assign("ville", $_SESSION["partenaire_ville"]);
$engine->assign("code postal", $_SESSION["partenaire_code_postal"]);

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
							$partenaire = new partenaire($_SESSION["partenaire_id"], $siret, $nom, null, $telephone, $email, $adresse, $ville, $code_postal, null, null);
							$partenaireDAO->modifier($partenaire);

							$engine->deconnecter();
						}else{
							header("Location: ".$url."/partenaire/modifier-mes-informations");
						}
					}else{
						header("Location: ".$url."/partenaire/modifier-mes-informations");
					}
				}else{
					header("Location: ".$url."/partenaire/modifier-mes-informations");
				}
			}else{
				header("Location: ".$url."/partenaire/modifier-mes-informations");
			}
		}else{
			header("Location: ".$url."/partenaire/modifier-mes-informations");
		}
	}else{
		header("Location: ".$url."/partenaire/modifier-mes-informations");
	}
}

$engine->render("partenairemodifiermesinformations.html");
?>