<?php
require_once('dao/classes/jeuneDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

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

<!DOCTYPE html>
<html>
  <head>
    <title>Jeune Inscription</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Jeune Inscription</h1></a>
      <label for="jeune_nom" class="sr-only">Nom</label>
      <input type="text" id="jeune_nom" name="jeune_nom" class="form-control" placeholder="Nom" required autofocused><br/>
      <label for="jeune_prenom" class="sr-only">Prenom</label>
      <input type="text" id="jeune_prenom" name="jeune_prenom" class="form-control" placeholder="Prenom" required><br/>
      <label form="jeune_mot_de_passe" class="sr-only">Mot de passe</label>
      <input type="password" id="jeune_mot_de_passe" name="jeune_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
      <label for="jeune_mot_de_passe_confirmation" class="sr-only">Mot de passe confirmation</label>
      <input type="password" id="jeune_mot_de_passe_confirmation" name="jeune_mot_de_passe_confirmation" class="form-control" placeholder="Mot de passe confirmation" required><br/>
      <label for="jeune_telephone" class="sr-only">Telephone</label>
      <input type="text" id="jeune_telephone" name="jeune_telephone" class="form-control" placeholder="Telephone" required><br/>
      <label for="jeune_email" class="sr-only">Email</label>
      <input type="email" id="jeune_email" name="jeune_email" class="form-control" placeholder="Email" required><br/>
      <label type="jeune_adresse" class="sr-only">Adresse</label>
      <input type="text" id="jeune_adresse" name="jeune_adresse" class="form-control" placeholder="Adresse" required><br/>
      <label for="jeune_ville" class="sr-only">Ville</label>
      <input type="text" id="jeune_ville" name="jeune_ville" class="form-control" placeholder="Ville" required><br/>
      <label for="jeune_code_postal" class="sr-only">Code postal</label>
      <input type="text" id="jeune_code_postal" name="jeune_code_postal" class="form-control" placeholder="Code postal" required><br/>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Inscription">
    </form>
  </body>
</html>