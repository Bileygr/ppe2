<?php
require_once('classes/administrateur.php');
require_once('dao/classes/administrateurDAO.php');

$url = "http://localhost:8000/ppe2/";

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

	if(!empty($administrateur_nom) && !empty($administrateur_prenom) && !empty($administrateur_mot_de_passe) &&
		!empty($administrateur_mot_de_passe_confirmation) && !empty($administrateur_telephone) && !empty($administrateur_email) && !empty($administrateur_adresse) && !empty($administrateur_code_postal)){
		if(strlen($administrateur_mot_de_passe) >=12 && strlen($administrateur_mot_de_passe_confirmation) >= 12){
			if($administrateur_mot_de_passe == $administrateur_mot_de_passe_confirmation){
				$administrateur_mot_de_passe_hash = password_hash($administrateur_mot_de_passe, PASSWORD_BCRYPT);
				if(password_verify($administrateur_mot_de_passe, $administrateur_mot_de_passe_hash)){
					if(filter_var($administrateur_email, FILTER_VALIDATE_EMAIL)){
						if(strlen($administrateur_adresse) <= 38){
							if(strlen($administrateur_ville) <= 32){
								if(strlen($administrateur_code_postal) == 5){
									$administrateur = new Administrateur(null,
																		 $administrateur_super, 
																		 $administrateur_nom, 
																		 $administrateur_prenom, 
																		 $administrateur_mot_de_passe_hash,
																		 $administrateur_telephone, 
																		 $administrateur_email, 
																		 $administrateur_adresse, 
																		 $administrateur_ville, 
																		 $administrateur_code_postal,
																		 null,
																		 null);
									$administrateurDAO = new AdministrateurDAO();
									$administrateurDAO->inscrire($administrateur);

									header("Location: ".$url."administrateur/connexion");
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

<!DOCTYPE html>
<html>
  <head>
    <title>Administrateur Inscription</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Administrateur Inscription</h1></a>
      <label for="administrateur_nom" class="sr-only">Nom</label>
      <input type="text" id="administrateur_nom" name="administrateur_nom" class="form-control" placeholder="Nom" required autofocused><br/>
      <label for="administrateur_prenom" class="sr-only">Prenom</label>
      <input type="text" id="administrateur_prenom" name="administrateur_prenom" class="form-control" placeholder="Prenom" required><br/>
      <label form="administrateur_mot_de_passe" class="sr-only">Mot de passe</label>
      <input type="password" id="administrateur_mot_de_passe" name="administrateur_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
      <label for="administrateur_mot_de_passe_confirmation" class="sr-only">Mot de passe confirmation</label>
      <input type="password" id="administrateur_mot_de_passe_confirmation" name="administrateur_mot_de_passe_confirmation" class="form-control" placeholder="Mot de passe confirmation" required><br/>
      <label for="administrateur_telephone" class="sr-only">Telephone</label>
      <input type="text" id="administrateur_telephone" name="administrateur_telephone" class="form-control" placeholder="Telephone" required><br/>
      <label for="administrateur_email" class="sr-only">Email</label>
      <input type="email" id="administrateur_email" name="administrateur_email" class="form-control" placeholder="Email" required><br/>
      <label type="administrateur_adresse" class="sr-only">Adresse</label>
      <input type="text" id="administrateur_adresse" name="administrateur_adresse" class="form-control" placeholder="Adresse" required><br/>
      <label for="administrateur_ville" class="sr-only">Ville</label>
      <input type="text" id="administrateur_ville" name="administrateur_ville" class="form-control" placeholder="Ville" required><br/>
      <label for="administrateur_code_postal" class="sr-only">Code postal</label>
      <input type="text" id="administrateur_code_postal" name="administrateur_code_postal" class="form-control" placeholder="Code postal" required><br/>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" id="administrateur_super" name="administrateur_super" value=""> Super Administrateur
        </label>
      </div>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Inscription">
    </form>
  </body>
</html>