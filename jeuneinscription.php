<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/jeuneDAO.php');

$moteur = new Moteur();
$moteur->assigner('titre', 'Inscription Jeune');
$moteur->render('jeuneinscription');

if(isset($_POST['form_auth'])){
	$jeune_nom = $_POST['jeune_nom'];
	$jeune_prenom = $_POST['jeune_prenom'];
	$jeune_mot_de_passe = $_POST['jeune_mot_de_passe'];
	$jeune_mot_de_passe_confirmation = $_POST['jeune_mot_de_passe_confirmation'];
	$jeune_telephone = $_POST['jeune_telephone'];
	$jeune_email = $_POST['jeune_email'];
	$jeune_adresse = $_POST['jeune_adresse'];
	$jeune_ville = $_POST['jeune_ville'];
	$jeune_code_postal = $_POST['jeune_code_postal'];

	if(!empty($jeune_nom) && !empty($jeune_prenom) && !empty($jeune_mot_de_passe) &&
		!empty($jeune_mot_de_passe_confirmation) && !empty($jeune_telephone) && !empty($jeune_email) && !empty($jeune_adresse) && !empty($jeune_code_postal)){
		if(strlen($jeune_mot_de_passe) >=12 && strlen($jeune_mot_de_passe_confirmation) >= 12){
			if($jeune_mot_de_passe == $jeune_mot_de_passe_confirmation){
				$jeune_mot_de_passe_hash = password_hash($jeune_mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($jeune_mot_de_passe, $jeune_mot_de_passe_hash)){
					if(filter_var($jeune_email, FILTER_VALIDATE_EMAIL)){
						if(strlen($jeune_adresse) <= 38){
							if(strlen($jeune_ville) <= 32){
								if(strlen($jeune_code_postal) == 5){
									$jeune = new Jeune(null,
													   $jeune_nom, 
													   $jeune_prenom, 
													   $jeune_mot_de_passe_hash,
													   $jeune_telephone, 
													   $jeune_email, 
													   $jeune_adresse, 
													   $jeune_ville, 
													   $jeune_code_postal,
													   null,
													   null);
									//exit(var_dump($jeune));
									$jeuneDAO = new JeuneDAO();
									$jeuneDAO->inscrire($jeune);

									header("Location: jeuneconnexion.php");
								}else{
									exit('La longeur du code postal est incorrecte il devrait faire 5 caracteres.');
								}
							}else{
								exit('La longeur de la ville est incorrecte il devrait faire 32 caracteres ou moins.');
							}
						}else{
							exit('La longeur de l\'adresse est incorrecte il devrait faire 38 caracteres ou moins.');
						}
					}else{
						exit('Le format de l\'email est incorrecte.');
					}
				}else{
					exit('Le mot de passe ne correspond pas au hash');
				}
			}else{
				exit('Les mots de passe ne correspondent pas');
			}
		}else{
			exit('Le mot de passe n\'est pas asse long 12 caracteres ou plus.');
		}
	}else{
		exit('Les champs n\'ont pas tous ete remplis.');
	}
}
?>