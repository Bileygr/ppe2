<?php
require_once('dao/classes/partenaireDAO.php');

$url = "http://localhost:8000/ppe2/";

if(isset($_POST['form_auth'])){
	$partenaire_siret = $_POST['partenaire_siret'];
	$partenaire_mot_de_passe = $_POST['partenaire_mot_de_passe'];

	if(filter_var(strlen($partenaire_siret) == 9)){
		if(strlen($partenaire_mot_de_passe) >= 12){
			$partenaireDAO = new PartenaireDAO();
			$partenaire = $partenaireDAO->connecter($partenaire_siret, $partenaire_mot_de_passe);

			session_start();
			$_SESSION['partenaire_id'] = $partenaire->getPartenaire_id();
			$_SESSION['partenaire_siret'] = $partenaire->getPartenaire_siret();
			$_SESSION['partenaire_nom'] = $partenaire->getPartenaire_nom();
			$_SESSION['partenaire_mot_de_passe_hash'] = $partenaire->getPartenaire_mot_de_passe_hash();
			$_SESSION['partenaire_telephone'] = $partenaire->getPartenaire_telephone();
			$_SESSION['partenaire_email'] = $partenaire->getPartenaire_email();
			$_SESSION['partenaire_adresse'] = $partenaire->getPartenaire_adresse();
			$_SESSION['partenaire_ville'] = $partenaire->getPartenaire_ville();
			$_SESSION['partenaire_code_postal'] = $partenaire->getPartenaire_code_postal();
			$_SESSION['partenaire_derniere_connexion'] = $partenaire->getPartenaire_derniere_connexion();
			$_SESSION['partenaire_creation'] = $partenaire->getPartenaire_creation();

			header("Location: ".$url."partenaire/profil");
		}
	}else{
		exit("<h1>Erreur: La longeur du SIRET est incorrecte.</h1>");
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Partenaire Connexion</title>
    <link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form method="POST" class="form-signin">
      <a href="<?= $url ?>"><h1 class="h3 mb-3 font-weight-normal">Partenaire Connexion</h1></a>
      <label for="partenaire_siret" class="sr-only">SIRET</label>
      <input type="text" id="partenaire_siret" name="partenaire_siret" class="form-control" placeholder="SIRET" required autofocused><br/>
      <label for="partenaire_mot_de_passe" class="sr-only">Mot de passe</label>
      <input type="password" id="partenaire_mot_de_passe" name="partenaire_mot_de_passe" class="form-control" placeholder="Mot de passe" required><br/>
      <input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Connexion"><br/>
      <a href="<?= $url."partenaire/inscription" ?>">Inscription</a> / <a href="">Mot de passe oublié?</a>
    </form>
  </body>
</html>