<?php
require_once('classes/jeune.php');
require_once('dao/classes/jeuneDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['jeune_id'])){
	header("Location: ".$url);
}

$jeune_id 			= $_SESSION['jeune_id'];
$jeune_nom 			= $_SESSION['jeune_nom'];
$jeune_prenom 		= $_SESSION['jeune_prenom'];
$jeune_telephone 	= $_SESSION['jeune_telephone'];
$jeune_email 		= $_SESSION['jeune_email'];
$jeune_adresse 		= $_SESSION['jeune_adresse'];
$jeune_ville 		= $_SESSION['jeune_ville'];
$jeune_code_postal 	= $_SESSION['jeune_code_postal'];

if(isset($_POST['form_auth'])){
	$jeune_nom 			= $_POST['jeune_nom'];
	$jeune_prenom 		= $_POST['jeune_prenom'];
	$jeune_telephone 	= $_POST['jeune_telephone'];
	$jeune_email 		= $_POST['jeune_email'];
	$jeune_adresse 		= $_POST['jeune_adresse'];
	$jeune_ville 		= $_POST['jeune_ville'];
	$jeune_code_postal 	= $_POST['jeune_code_postal'];

	if(!empty($jeune_nom) && !empty($jeune_prenom) && !empty($jeune_telephone) && !empty($jeune_email) && !empty($jeune_adresse) && !empty($jeune_code_postal)){
		if(filter_var($jeune_email, FILTER_VALIDATE_EMAIL)){
			if(strlen($jeune_adresse) <= 38){
				if(strlen($jeune_ville) <= 32){
					if(strlen($jeune_code_postal) == 5){
						$jeune = new Jeune($jeune_id,
										   $jeune_nom, 
										   $jeune_prenom, 
										   null,
										   $jeune_telephone, 
										   $jeune_email, 
										   $jeune_adresse, 
										   $jeune_ville, 
										   $jeune_code_postal,
										   null,
										   null);
						$jeuneDAO = new JeuneDAO();
						$jeuneDAO->modifier($jeune);

						unset($_SESSION['modifier_jeune_id'], 
	 						  $_SESSION['modifier_jeune_nom'], 
	  						  $_SESSION['modifier_jeune_prenom'], 
	  						  $_SESSION['modifier_jeune_telephone'],
	  						  $_SESSION['modifier_jeune_email'],
	  						  $_SESSION['modifier_jeune_adresse'],
	  						  $_SESSION['modifier_jeune_ville'],
	  						  $_SESSION['modifier_jeune_code_postal']);

						header("Location: ".$url."jeune/profil");
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
		echo 'Les champs n\'ont pas tous ete remplis.';
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Jeune Modification</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Jeune Modification</h1></a>
      <label for="jeune_nom" class="sr-only">Nom</label>
      <input type="text" id="jeune_nom" name="jeune_nom" class="form-control" placeholder="Nom" value="<?= $jeune_nom ?>" autofocused><br/>
      <label for="jeune_prenom" class="sr-only">Prénom</label>
      <input type="text" id="jeune_prenom" name="jeune_prenom" class="form-control" placeholder="Prénom" value="<?= $jeune_prenom ?>"><br/>
      <label for="jeune_telephone" class="sr-only">Téléphone</label>
      <input type="text" id="jeune_telephone" name="jeune_telephone" class="form-control" placeholder="Téléphone" value="<?= $jeune_telephone ?>"><br/>
      <label for="jeune_email" class="sr-only">Email</label>
      <input type="email" id="jeune_email" name="jeune_email" class="form-control" placeholder="Email" value="<?= $jeune_email ?>"><br/>
      <label type="jeune_adresse" class="sr-only">Adresse</label>
      <input type="text" id="jeune_adresse" name="jeune_adresse" class="form-control" placeholder="Adresse" value="<?= $jeune_adresse ?>"><br/>
      <label for="jeune_ville" class="sr-only">Ville</label>
      <input type="text" id="jeune_ville" name="jeune_ville" class="form-control" placeholder="Ville" value="<?= $jeune_ville ?>"><br/>
      <label for="jeune_code_postal" class="sr-only">Code postal</label>
      <input type="text" id="jeune_code_postal" name="jeune_code_postal" class="form-control" placeholder="Code Postal" value="<?= $jeune_code_postal ?>"><br/>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Modifier">
    </form>
  </body>
</html>