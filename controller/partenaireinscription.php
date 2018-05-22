<?php
require('framework/noyau/moteur.php');
require_once('classes/partenaire.php');
require_once('dao/classes/partenaireDAO.php');

$moteur = new Moteur();
$moteur->assigner('titre', 'Inscription Partenaire');
$moteur->render('partenaireinscription');

if(isset($_POST['form_auth'])){
	$partenaire_siret = $_POST['partenaire_siret'];
	$partenaire_nom = $_POST['partenaire_nom'];
	$partenaire_mot_de_passe = $_POST['partenaire_mot_de_passe'];
	$partenaire_mot_de_passe_confirmation = $_POST['partenaire_mot_de_passe_confirmation'];
	$partenaire_telephone = $_POST['partenaire_telephone'];
	$partenaire_email = $_POST['partenaire_email'];
	$partenaire_adresse = $_POST['partenaire_adresse'];
	$partenaire_ville = $_POST['partenaire_ville'];
	$partenaire_code_postal = $_POST['partenaire_code_postal'];

	if(!empty($partenaire_siret) && !empty($partenaire_nom) && !empty($partenaire_mot_de_passe) && !empty($partenaire_mot_de_passe_confirmation) && !empty($partenaire_telephone) && !empty($partenaire_email) && !empty($partenaire_telephone) && !empty($partenaire_adresse) && !empty($partenaire_ville) && !empty($partenaire_code_postal)){
		if(strlen($partenaire_mot_de_passe) >= 12 && strlen($partenaire_mot_de_passe_confirmation) >= 12){
			if($partenaire_mot_de_passe == $partenaire_mot_de_passe_confirmation){
				$partenaire_mot_de_passe_hash = password_hash($partenaire_mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($partenaire_mot_de_passe, $partenaire_mot_de_passe_hash)){
					if(filter_var($partenaire_email, FILTER_VALIDATE_EMAIL)){
						if(strlen($partenaire_adresse) <= 38){
							if(strlen($partenaire_ville) <= 32){
								if(strlen($partenaire_code_postal) == 5){
										$partenaire = new Partenaire(null,
																     $partenaire_siret, 
																     $partenaire_nom, 
																     $partenaire_mot_de_passe_hash, 
																     $partenaire_telephone, 
																     $partenaire_email, 
																     $partenaire_adresse, 
																     $partenaire_ville, 
																     $partenaire_code_postal,
																     null,
																     null);
										$partenaireDAO = new PartenaireDAO();
										$partenaireDAO->inscrire($partenaire);

									header("Location: partenaireconnexion.php");
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
						echo 'Erreur le format de l\email est incorrecte';
					}
				}else{
					echo 'Erreur le mot de passe ne correspond pas au hash';
				}
			}else{
				echo 'Erreur les mots de passe ne correspondent pas.';
			}
		}else{
			echo 'Erreur la longeur du ;ot de passe est incorrecte il devrait y avoit 12 caracteres ou plus.';
		}
	}else{
		echo 'Erreur certains champs n\'ont pas ete remplis.';
	}

}
?>