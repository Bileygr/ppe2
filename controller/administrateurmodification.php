<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/administrateurDAO.php');

$engine = new Engine();

$engine->assign("administrateur_id", $_SESSION['modifier_administrateur_id']);
$engine->assign("administrateur_nom", $_SESSION['modifier_administrateur_nom']);
$engine->assign("administrateur_prenom", $_SESSION['modifier_administrateur_prenom']);
$engine->assign("administrateur_super", $_SESSION['modifier_administrateur_super']);
$engine->assign("administrateur_telephone", $_SESSION['modifier_administrateur_telephone']);
$engine->assign("administrateur_email", $_SESSION['modifier_administrateur_email']);
$engine->assign("administrateur_adresse", $_SESSION['modifier_administrateur_adresse']);
$engine->assign("administrateur_ville", $_SESSION['modifier_administrateur_ville']);
$engine->assign("administrateur_code_postal", $_SESSION['modifier_administrateur_code_postal']);

if(isset($_POST['form_auth'])){
	if(isset($_POST['administrateur_super'])){
		$administrateur_super= 1;
	}else{
		$administrateur_super= 0;
	}

	$administrateur_nom 		= $_POST['administrateur_nom'];
	$administrateur_prenom 		= $_POST['administrateur_prenom'];
	$administrateur_telephone 	= $_POST['administrateur_telephone'];
	$administrateur_email 		= $_POST['administrateur_email'];
	$administrateur_adresse 	= $_POST['administrateur_adresse'];
	$administrateur_ville 		= $_POST['administrateur_ville'];
	$administrateur_code_postal = $_POST['administrateur_code_postal'];

	if(!empty($administrateur_nom) && !empty($administrateur_prenom) && !empty($administrateur_telephone) && !empty($administrateur_email) && !empty($administrateur_adresse) && !empty($administrateur_code_postal)){
		if(filter_var($administrateur_email, FILTER_VALIDATE_EMAIL)){
			if(strlen($administrateur_adresse) <= 38){
				if(strlen($administrateur_ville) <= 32){
					if(strlen($administrateur_code_postal) == 5){
						$administrateur = new Administrateur($administrateur_id,
															 $administrateur_super, 
															 $administrateur_nom, 
															 $administrateur_prenom, 
															 null,
															 $administrateur_telephone, 
															 $administrateur_email, 
															 $administrateur_adresse, 
															 $administrateur_ville, 
															 $administrateur_code_postal,
															 null,
															 null);
						$administrateurDAO = new AdministrateurDAO();
						$administrateurDAO->modifier($administrateur);

						unset($_SESSION['modifier_administrateur_id'], 
	 						  $_SESSION['modifier_administrateur_nom'], 
	  						  $_SESSION['modifier_administrateur_prenom'], 
	  						  $_SESSION['modifier_administrateur_super'], 
	  						  $_SESSION['modifier_administrateur_telephone'],
	  						  $_SESSION['modifier_administrateur_email'],
	  						  $_SESSION['modifier_administrateur_adresse'],
	  						  $_SESSION['modifier_administrateur_ville'],
	  						  $_SESSION['modifier_administrateur_code_postal']);

						header("Location: ".$url."administrateur/tableau/administrateur");
					}else{
						echo 'La longeur du code postal est incorrecte il devrait faire 5 caracteres.';
					}
				}else{
					echo 'La longeur de la ville est incorrecte il devrait faire 32 caracteres ou moins.';
				}
			}else{
				echo 'La longeur de l\'adresse est incorrecte il devrait faire 38 caracteres ou moins.';
			}
		}else{
			echo 'Le format de l\'email est incorrecte.';
		}
	}else{
		echo 'Les champs n\'ont pas tous ete remplis.';
	}
}

$engine->render("administrateurmodification.html");
?>