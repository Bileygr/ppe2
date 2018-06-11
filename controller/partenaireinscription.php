<?php
require_once('classes/partenaire.php');
require_once('dao/classes/partenaireDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(isset($_POST['form_auth'])){
	$partenaire_siret 						= $_POST['partenaire_siret'];
	$partenaire_nom 						= $_POST['partenaire_nom'];
	$partenaire_mot_de_passe 				= $_POST['partenaire_mot_de_passe'];
	$partenaire_mot_de_passe_confirmation 	= $_POST['partenaire_mot_de_passe_confirmation'];
	$partenaire_telephone 					= $_POST['partenaire_telephone'];
	$partenaire_email 						= $_POST['partenaire_email'];
	$partenaire_adresse 					= $_POST['partenaire_adresse'];
	$partenaire_ville 						= $_POST['partenaire_ville'];
	$partenaire_code_postal 				= $_POST['partenaire_code_postal'];

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

<!DOCTYPE html>
<html>
  <head>
    <title>Partenaire Inscription</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Partenaire Inscription</h1></a>
      <label for="partenaire_siret" class="sr-only">SIRET</label>
      <input type="text" id="partenaire_siret" name="partenaire_siret" class="form-control" placeholder="SIRET" required autofocused><br/>
      <label for="partenaire_nom" class="sr-only">Nom</label>
      <input type="text" id="partenaire_nom" name="partenaire_nom" class="form-control" placeholder="Nom" required><br/>
      <label form="partenaire_mot_de_passe" class="sr-only">Mot de passe</label>
      <input type="password" id="partenaire_mot_de_passe" name="partenaire_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
      <label for="partenaire_mot_de_passe_confirmation" class="sr-only">Mot de passe confirmation</label>
      <input type="password" id="partenaire_mot_de_passe_confirmation" name="partenaire_mot_de_passe_confirmation" class="form-control" placeholder="Mot de passe confirmation" required><br/>
      <label for="partenaire_telephone" class="sr-only">Telephone</label>
      <input type="text" id="partenaire_telephone" name="partenaire_telephone" class="form-control" placeholder="Telephone" required><br/>
      <label for="partenaire_email" class="sr-only">Email</label>
      <input type="email" id="partenaire_email" name="partenaire_email" class="form-control" placeholder="Email" required><br/>
      <label type="partenaire_adresse" class="sr-only">Adresse</label>
      <input type="text" id="partenaire_adresse" name="partenaire_adresse" class="form-control" placeholder="Adresse" required><br/>
      <label for="partenaire_ville" class="sr-only">Ville</label>
      <input type="text" id="partenaire_ville" name="partenaire_ville" class="form-control" placeholder="Ville" required><br/>
      <label for="partenaire_code_postal" class="sr-only">Code postal</label>
      <input type="text" id="partenaire_code_postal" name="partenaire_code_postal" class="form-control" placeholder="Code postal" required><br/>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Inscription"><br/>
    </form>
  </body>
</html>
