<?php
require('connexion.php');
require('../class/administrateur.php');
require('../interface/administrateurDAOInterface.php');

class AdministrateurDAO implements AdministrateurDAOInterface{
	public function connecter($email, $mot_de_passe){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
		}catch(Exception $e){
			echo 'Échec lors de la connexion:' . $e->getMessage();
		}

		session_start();
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

			if(strlen($mot_de_passe) >= 12){
				$requete = $bdd->prepare("SELECT administrateur_mot_de_passe_hash FROM administrateur WHERE administrateur_email = ?");
				$requete->execute(array($email));
				$resultat = $requete->fetch();
				$hash = $resultat['administrateur_mot_de_passe_hash'];

				if(password_verify($mot_de_passe, $hash)) {
					$requete = $bdd->prepare("SELECT administrateur_id, adresse_id, super_administrateur, administrateur_nom, administrateur_prenom, administrateur_email, administrateur_telephone, administrateur_derniere_connexion, administrateur_date_ajout FROM administrateur WHERE administrateur_email = ? AND administrateur_mot_de_passe_hash = ?");
					$requete->execute(array($email, $hash));
					$resultat = $requete->fetch();

					$_SESSION['administrateur_id'] = $resultat['administrateur_id'];
					$_SESSION['adresse_id'] = $resultat['adresse_id'];
					$_SESSION['super_administarteur'] = $resultat['super_administrateur'];
					$_SESSION['administrateur_nom'] = $resultat['administrateur_nom'];
					$_SESSION['administrateur_prenom'] = $resultat['administrateur_prenom'];
					$_SESSION['administrateur_mot_de_passe_hash'] = $hash;
					$_SESSION['administrateur_email'] = $resultat['administrateur_email'];
					$_SESSION['administrateur_telephone'] = $resultat['administrateur_telephone'];
					$_SESSION['administrateur_derniere_connexion'] = $resultat['administrateur_derniere_connexion'];
					$_SESSION['administrateur_date_ajout'] = $resultat['administrateur_date_ajout'];

					if($resultat){
						echo 'Connexion réussi.';
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

	public function inscrire($super_administrateur, $nom, $prenom, $mot_de_passe, $email, $telephone, $adresse, $ville, $code_postal){
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
									$requete = $bdd->prepare("INSERT INTO adresse(adresse_adresse, adresse_ville, adresse_code_postal, adresse_date_ajout) 
															  VALUES(?, ?, ?, NOW());");
									$requete->execute(array($adresse, $ville, $code_postal));
									$resultat = $requete->rowCount();
									$adresse_id = intval($bdd->lastInsertId());

									if($resultat){
										$requete = $bdd->prepare("INSERT INTO administrateur(adresse_id, super_administrateur, administrateur_nom, administrateur_prenom, administrateur_mot_de_passe_hash, administrateur_email, administrateur_telephone, administrateur_derniere_connexion, administrateur_date_ajout) VALUES(?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
										$requete->execute(array($adresse_id, $super_administrateur, $nom, $prenom, $hash, $email, $telephone));
										$resultat = $requete->rowCount();

										if($resultat){
											header("Location: test.html");
										}else{
											echo 'La requete a echouee.';
										}
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