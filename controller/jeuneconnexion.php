<?php
require_once('dao/classes/jeuneDAO.php');

$url 			= "http://localhost:8000/ppe2/";
$url_ressources = "http://localhost/ppe2/";

if(isset($_POST['form_auth'])){
	$jeune_email = $_POST['jeune_email'];
	$jeune_mot_de_passe = $_POST['jeune_mot_de_passe'];

	if(filter_var($jeune_email, FILTER_VALIDATE_EMAIL)){
		if(strlen($jeune_mot_de_passe) >= 12){
			$jeuneDAO = new JeuneDAO();
			$jeune = $jeuneDAO->connecter($jeune_email, $jeune_mot_de_passe);

			session_start();
			$_SESSION['jeune_id'] = $jeune->getJeune_id();
			$_SESSION['jeune_nom'] = $jeune->getJeune_nom();
			$_SESSION['jeune_prenom'] = $jeune->getJeune_prenom();
			$_SESSION['jeune_mot_de_passe_hash'] = $jeune->getjeune_mot_de_passe_hash();
			$_SESSION['jeune_telephone'] = $jeune->getJeune_telephone();
			$_SESSION['jeune_email'] = $jeune->getJeune_email();
			$_SESSION['jeune_adresse'] = $jeune->getJeune_adresse();
			$_SESSION['jeune_ville'] = $jeune->getJeune_ville();
			$_SESSION['jeune_code_postal'] = $jeune->getJeune_code_postal();
			$_SESSION['jeune_derniere_connexion'] = $jeune->getJeune_derniere_connexion();
			$_SESSION['jeune_creation'] = $jeune->getJeune_creation();

			header("Location: ".$url."jeune/profil");
		}
	}else{

	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Jeune Connexion</title>
    <link href="<?= $url_ressources."ressources/css/bootstrap.min.css" ?>" rel="stylesheet">
    <link href="<?= $url_ressources."ressources/css/signin.css" ?>" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Jeune Connexion</h1></a>
      <label for="jeune_email" class="sr-only">EMAIL</label>
      <input type="text" id="jeune_email" name="jeune_email" class="form-control" placeholder="EMAIL" required autofocused><br/>
      <label for="jeune_mot_de_passe" class="sr-only">Mot de passe</label>
      <input type="password" id="jeune_mot_de_passe" name="jeune_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Connexion"><br/>
      <a href="<?= $url."jeune/inscription" ?>">Inscription</a> / <a href="">Mot de passe oublié?</a>
    </form>
  </body>
</html>