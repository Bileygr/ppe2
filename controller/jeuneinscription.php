<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/jeuneDAO.php');

$engine = new Engine();
$url = $engine->url();
$engine->assign("titre", "Jeune Inscription");

if(isset($_POST['form_auth'])){
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$mot_de_passe_confirmation = $_POST['mot_de_passe_confirmation'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$code_postal = $_POST['code_postal'];

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

										$jeuneDAO = new JeuneDAO();
										$jeuneDAO->inscrire($jeune);

										if(isset($_SESSION["administrateur_id"])){
											header("Location: ".$url."administrateur/tableau/jeune");
										}else{
											header("Location: ".$url."jeune/connexion");
										}
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
						exit('La longeur du téléphone est incorrecte.');
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

$engine->render("jeuneinscription.html");
?>