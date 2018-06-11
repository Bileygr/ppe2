<?php
require_once('classes/administrateur.php');
require_once('dao/classes/administrateurDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['administrateur_id'])){
	header("Location: ".$url);
}

$administrateur_id 			= $_SESSION['modifier_administrateur_id'];
$administrateur_nom 		= $_SESSION['modifier_administrateur_nom'];
$administrateur_prenom 		= $_SESSION['modifier_administrateur_prenom'];
$administrateur_super 		= $_SESSION['modifier_administrateur_super'];
$administrateur_telephone 	= $_SESSION['modifier_administrateur_telephone'];
$administrateur_email 		= $_SESSION['modifier_administrateur_email'];
$administrateur_adresse 	= $_SESSION['modifier_administrateur_adresse'];
$administrateur_ville 		= $_SESSION['modifier_administrateur_ville'];
$administrateur_code_postal = $_SESSION['modifier_administrateur_code_postal'];

if(isset($_POST['form_auth'])){
	if(isset($_POST['administrateur_super'])){
		$administrateur_super= 1;
	}else{
		$administrateur_super= 0;
	}

	$administrateur_nom 		= $_POST['administrateur_nom'];
	$administrateur_prenom 		= $_POST['administrateur_prenom'];
	$administrateur_telephone 	= $_POST['administrateur_telephone'];
	$administrateur_email 		= $_POST['administrateur_email'];
	$administrateur_adresse 	= $_POST['administrateur_adresse'];
	$administrateur_ville 		= $_POST['administrateur_ville'];
	$administrateur_code_postal = $_POST['administrateur_code_postal'];

	if(!empty($administrateur_nom) && !empty($administrateur_prenom) && !empty($administrateur_telephone) && !empty($administrateur_email) && !empty($administrateur_adresse) && !empty($administrateur_code_postal)){
		if(filter_var($administrateur_email, FILTER_VALIDATE_EMAIL)){
			if(strlen($administrateur_adresse) <= 38){
				if(strlen($administrateur_ville) <= 32){
					if(strlen($administrateur_code_postal) == 5){
						$administrateur = new Administrateur($administrateur_id,
															 $administrateur_super, 
															 $administrateur_nom, 
															 $administrateur_prenom, 
															 null,
															 $administrateur_telephone, 
															 $administrateur_email, 
															 $administrateur_adresse, 
															 $administrateur_ville, 
															 $administrateur_code_postal,
															 null,
															 null);
						$administrateurDAO = new AdministrateurDAO();
						$administrateurDAO->modifier($administrateur);

						unset($_SESSION['modifier_administrateur_id'], 
	 						  $_SESSION['modifier_administrateur_nom'], 
	  						  $_SESSION['modifier_administrateur_prenom'], 
	  						  $_SESSION['modifier_administrateur_super'], 
	  						  $_SESSION['modifier_administrateur_telephone'],
	  						  $_SESSION['modifier_administrateur_email'],
	  						  $_SESSION['modifier_administrateur_adresse'],
	  						  $_SESSION['modifier_administrateur_ville'],
	  						  $_SESSION['modifier_administrateur_code_postal']);

						header("Location: ".$url."administrateur/tableau/administrateur");
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
    <title>Administrateur Modification</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Administrateur Modification</h1></a>
      <label for="administrateur_nom" class="sr-only">Nom</label>
      <input type="text" id="administrateur_nom" name="administrateur_nom" class="form-control" placeholder="Nom" value="<?= $administrateur_nom ?>" autofocused><br/>
      <label for="administrateur_prenom" class="sr-only">Prenom</label>
      <input type="text" id="administrateur_prenom" name="administrateur_prenom" class="form-control" placeholder="Prénom" value="<?= $administrateur_prenom ?>"><br/>
      <label for="administrateur_telephone" class="sr-only">Téléphone</label>
      <input type="text" id="administrateur_telephone" name="administrateur_telephone" class="form-control" placeholder="Téléphone" value="<?= $administrateur_telephone ?>"><br/>
      <label for="administrateur_email" class="sr-only">Email</label>
      <input type="email" id="administrateur_email" name="administrateur_email" class="form-control" placeholder="Email" value="<?= $administrateur_email ?>"><br/>
      <label type="administrateur_adresse" class="sr-only">Adresse</label>
      <input type="text" id="administrateur_adresse" name="administrateur_adresse" class="form-control" placeholder="Adresse" value="<?= $administrateur_adresse ?>"><br/>
      <label for="administrateur_ville" class="sr-only">Ville</label>
      <input type="text" id="administrateur_ville" name="administrateur_ville" class="form-control" placeholder="Ville" value="<?= $administrateur_ville ?>"><br/>
      <label for="administrateur_code_postal" class="sr-only">Code postal</label>
      <input type="text" id="administrateur_code_postal" name="administrateur_code_postal" class="form-control" placeholder="Code Postal" value="<?= $administrateur_code_postal ?>"><br/>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" onclick="setSuperAdministrateur();" id="administrateur_super" name="administrateur_super" value=""> Super Administrateur
        </label>
      </div>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Modifier">
    </form>

    <script type="text/javascript">
    	window.onload = function isAdministrateurSuper(){
    		var super_administrateur = <?= $administrateur_super ?>;
    		if(super_administrateur == 1){
    			document.getElementById("administrateur_super").setAttribute("checked", "checked");
    		}
    	}
    </script>
  </body>
</html>