<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/partenaireDAO.php');

$engine = new Engine();
$url = $engine->url();
$engine->assign("titre", "Partenaire Inscription");

if(isset($_POST['form_auth'])){
	$siret = $_POST['siret'];
	$nom = $_POST['nom'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$mot_de_passe_confirmation = $_POST['mot_de_passe_confirmation'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$code_postal = $_POST['code_postal'];

	if(!empty($siret) && !empty($nom) && !empty($mot_de_passe) && !empty($mot_de_passe_confirmation) && !empty($telephone) && !empty($email) && !empty($telephone) && !empty($adresse) && !empty($ville) && !empty($code_postal)){
		if(strlen($mot_de_passe) >= 12 && strlen($mot_de_passe_confirmation) >= 12){
			if($mot_de_passe == $mot_de_passe_confirmation){
				$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($mot_de_passe, $mot_de_passe_hash)){
					if(strlen($telephone) == 10){
						if(filter_var($email, FILTER_VALIDATE_EMAIL)){
							if(strlen($adresse) <= 38){
								if(strlen($ville) <= 32){
									if(strlen($code_postal) == 5){
											$partenaire = new Partenaire(null, $siret, $nom, $mot_de_passe_hash, $telephone, $email, $adresse, $ville, $code_postal, null, null);
											$partenaireDAO = new PartenaireDAO();
											$partenaireDAO->inscrire($partenaire);

										if(isset($_SESSION["administrateur_id"])){
											header("Location: ".$url."administrateur/tableau/partenaire");
										}else{
											header("Location: ".$url."partenaire/connexion");
										}
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
						echo 'Erreur la longeur du nméro de téléphone est incorrecte.';
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

$engine->render("partenaireinscription.html");
?>
