<?php
require('connexion.php');
require('../class/jeune.php');

class jeuneDAO{
	public function connecter($email, $mot_de_passe){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		}

		session_start();
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

			if(strlen($mot_de_passe) >= 12){
				$requete = $bdd->prepare("SELECT jeune_mot_de_passe_hash FROM jeune WHERE jeune_email = ?");
				$requete->execute(array($email));
				$resultat = $requete->fetch();
				$hash = $resultat['jeune_mot_de_passe_hash'];

				if(password_verify($mot_de_passe, $hash)) {
					$requete = $bdd->prepare("SELECT jeune_id, jeune_nom, jeune_prenom, jeune_email, jeune_telephone, jeune_adresse, jeune_ville, jeune_code_postal, jeune_derniere_connexion, jeune_date_ajout FROM jeune WHERE jeune_email = ? AND jeune_mot_de_passe_hash = ?");
					$requete->execute(array($email, $hash));
					$resultat = $requete->fetch();

					$_SESSION['jeune_id'] = $resultat['jeune_id'];
					$_SESSION['jeune_nom'] = $resultat['jeune_nom'];
					$_SESSION['jeune_prenom'] = $resultat['jeune_prenom'];
					$_SESSION['jeune_mot_de_passe_hash'] = $hash;
					$_SESSION['jeune_email'] = $resultat['jeune_email'];
					$_SESSION['jeune_telephone'] = $resultat['jeune_telephone'];
					$_SESSION['jeune_adresse'] = $resultat['jeune_adresse'];
					$_SESSION['jeune_ville'] = $resultat['jeune_ville'];
					$_SESSION['jeune_code_postal'] = $resultat['jeune_code_postal'];
					$_SESSION['jeune_derniere_connexion'] = $resultat['jeune_derniere_connexion'];
					$_SESSION['jeune_date_ajout'] = $resultat['jeune_date_ajout'];

					if($resultat){
						var_dump($_SESSION);
					}else{
						echo 'La requete a echouee.';
					}
				}else{
					echo 'Mot de passe errone.';
				}
			}else{
				echo 'La longeur du mot de passe est insuffisante, le mot de passe doit posseder 12 caracteres ou plus.';
			}
		}else{
			echo 'Le format de l\'email est invalide.';
		}
	}

	public function inscrire($nom, $prenom, $mot_de_passe, $email, $telephone, $adresse, $ville, $code_postal){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		}

		if(strlen($mot_de_passe) >= 12){
			$hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);

			if(password_verify($mot_de_passe, $hash)){

				if(filter_var($email, FILTER_VALIDATE_EMAIL)){

					if(strlen($telephone) == 10){

						if(strlen($adresse) <= 38){

							if(strlen($ville) <= 32){

								if(strlen($code_postal) <= 5){
									$requete = $bdd->prepare("INSERT INTO jeune(jeune_nom, jeune_prenom, jeune_mot_de_passe_hash, jeune_email, jeune_telephone, jeune_adresse, jeune_ville, jeune_code_postal, jeune_derniere_connexion, jeune_date_ajout) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
									$requete->execute(array($super_jeune, $nom, $prenom, $hash, $email, $telephone, $adresse, $ville, $code_postal));
									$resultat = $requete->rowCount();

									if($resultat){
										header("Location: test.html");
									}else{
										echo 'La requete a echouee.';
									}
								}else{
									echo'Un code postal devrait avoir 5 chiffre.';
								}
							}else{
								echo 'Une ville devrait avoir 35 caractere ou moins.';
							}
						}else{
							echo 'Une adresse devrait avoir 38 caracteres ou moins.';
						}
					}else{
						echo 'Un numero de telephone a 10 chiffres.';
					}
				}else{
					echo 'Le format de l\'email errone.';
				}
			}else{
				echo 'Le mot de passe ne correspond pas au hash.';
			}
		}else{
			echo 'La longeur du ;ot de passe est insuffisante, le mot de passe doit posseder 12 caracteres ou plus.';
		}
	}
}
?>