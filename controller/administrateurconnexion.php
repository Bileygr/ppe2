<?php
require_once('dao/classes/administrateurDAO.php');

$url = "http://localhost:8000/ppe2/";

if(isset($_POST['form_auth'])){
	$administrateur_email 			= $_POST['administrateur_email'];
	$administrateur_mot_de_passe 	= $_POST['administrateur_mot_de_passe'];

	if(filter_var($administrateur_email, FILTER_VALIDATE_EMAIL)){
		if(strlen($administrateur_mot_de_passe) >= 12){
			$administrateurDAO 	= new AdministrateurDAO();
			$administrateur 	= $administrateurDAO->connecter($administrateur_email, $administrateur_mot_de_passe);

			session_start();
			$_SESSION['administrateur_id'] 					= $administrateur->getAdministrateur_id();
			$_SESSION['administrateur_super'] 				= $administrateur->getAdministrateur_super();
			$_SESSION['administrateur_nom'] 				= $administrateur->getAdministrateur_nom();
			$_SESSION['administrateur_prenom'] 				= $administrateur->getAdministrateur_prenom();
			$_SESSION['administrateur_mot_de_passe_hash'] 	= $administrateur->getAdministrateur_mot_de_passe_hash();
			$_SESSION['administrateur_telephone'] 			= $administrateur->getAdministrateur_telephone();
			$_SESSION['administrateur_email'] 				= $administrateur->getAdministrateur_email();
			$_SESSION['administrateur_adresse'] 			= $administrateur->getAdministrateur_adresse();
			$_SESSION['administrateur_ville'] 				= $administrateur->getAdministrateur_ville();
			$_SESSION['administrateur_code_postal']			= $administrateur->getAdministrateur_code_postal();
			$_SESSION['administrateur_derniere_connexion'] 	= $administrateur->getAdministrateur_derniere_connexion();
			$_SESSION['administrateur_creation'] 			= $administrateur->getAdministrateur_creation();

			header("Location: ".$url."administrateur/profil");
		}
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Administrateur Connexion</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Administrateur Connexion</h1></a>
    	<label for="administrateur_email" class="sr-only">Email</label>
    	<input type="email" id="administrateur_email" name="administrateur_email" class="form-control" placeholder="Email" required autofocused><br/>
    	<label for="administrateur_mot_de_passe" class="sr-only">Mot de passe</label>
    	<input type="password" id="administrateur_mot_de_passe" name="administrateur_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
    	<input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Connexion"><br/>
      <a href="<?= $url ?>">Inscription</a> / <a href="">Mot de passe oublié?</a>
    </form>
  </body>
</html>
