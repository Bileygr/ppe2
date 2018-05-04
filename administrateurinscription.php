<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/administrateurDAO.php');

$moteur = new Moteur();
$moteur->assigner('titre', 'Inscription Administrateur');
$moteur->render('administrateurinscription');

if(isset($_POST['form_auth'])){
	$administrateur_super;

	if(isset($_POST['administrateur_super'])){
		$administrateur_super= 1;
	}else{
		$administrateur_super= 0;
	}

	$administrateur_nom = $_POST['administrateur_nom'];
	$administrateur_prenom = $_POST['administrateur_prenom'];
	$administrateur_mot_de_passe = $_POST['administrateur_mot_de_passe'];
	$administrateur_mot_de_passe_confirmation = $_POST['administrateur_mot_de_passe_confirmation'];
	$administrateur_telephone = $_POST['administrateur_telephone'];
	$administrateur_email = $_POST['administrateur_email'];
	$administrateur_adresse = $_POST['administrateur_adresse'];
	$administrateur_ville = $_POST['administrateur_ville'];
	$administrateur_code_postal = $_POST['administrateur_code_postal'];

	if(/*!empty($administrateur_super) &&*/ !empty($administrateur_nom) && !empty($administrateur_prenom) && !empty($administrateur_mot_de_passe) &&
		!empty($administrateur_mot_de_passe_confirmation) && !empty($administrateur_telephone) && !empty($administrateur_email) && !empty($administrateur_adresse) && !empty($administrateur_code_postal)){
		if(strlen($administrateur_mot_de_passe) >=12 && strlen($administrateur_mot_de_passe_confirmation) >= 12){
			if($administrateur_mot_de_passe == $administrateur_mot_de_passe_confirmation){
				$administrateur_mot_de_passe_hash = password_hash($administrateur_mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($administrateur_mot_de_passe, $administrateur_mot_de_passe_hash)){
					if(filter_var($administrateur_email, FILTER_VALIDATE_EMAIL)){
						if(strlen($administrateur_adresse) <= 38){
							if(strlen($administrateur_ville) <= 32){
								if(strlen($administrateur_code_postal) == 5){
									$administrateurDAO = new AdministrateurDAO();
									$administrateurDAO->inscrire($administrateur_super, $administrateur_nom, $administrateur_prenom, $administrateur_mot_de_passe_hash,
								$administrateur_telephone, $administrateur_email, $administrateur_adresse, $administrateur_ville, $administrateur_code_postal);

									header("Location: administrateurconnexion.php");
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
					echo 'Le mot de passe ne correspond pas au hash';
				}
			}else{
				echo 'Les mots de passe ne correspondent pas';
			}
		}else{
			echo 'Le mot de passe n\'est pas asse long 12 caracteres ou plus.';
		}
	}else{
		echo 'Les champs n\'ont pas tous ete remplis.';
	}

}
?>