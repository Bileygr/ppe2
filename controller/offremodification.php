<?php
require_once('classes/offre.php');
require_once('dao/classes/formationDAO.php');
require_once('dao/classes/partenaireDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['partenaire_id'])){
	header("Location: ".$url);
}

$offre_id 			= $_SESSION['modif_offre_id'];
$formation_id		= $_SESSION['modif_formation_id'];
$formation_nom		= $_SESSION['modif_formation_nom'];
$offre_nom 			= $_SESSION['modif_offre_nom'];
$offre_description 	= $_SESSION['modif_offre_description'];
$offre_debut		= $_SESSION['modif_offre_debut'];
$offre_fin			= $_SESSION['modif_offre_fin'];
$offre_creation 	= $_SESSION['modif_offre_creation'];

if(isset($_POST['form_auth'])){
	$offre_nom 			= $_POST['offre_nom'];
	$formation_id 		= $_POST['formation_id'];
	$offre_debut 		= $_POST['offre_debut'];
	$offre_fin 			= $_POST['offre_fin'];
	$offre_description 	= $_POST['offre_description'];

	if(!empty($offre_nom) && !empty($formation_id) && 
	   !empty($offre_debut) && !empty($offre_fin) &&
	   !empty($offre_description)){
		$offre = new Offre($offre_id,
						   null,
						   $formation_id,
						   $offre_nom,
						   $offre_description,
						   $offre_debut,
						   $offre_fin,
						   null);

		$partenaireDAO = new PartenaireDAO();
		$partenaireDAO->modifierOffre($offre);

		unset($_SESSION['modif_offre_id'],
			  $_SESSION['modif_formation_id'],
			  $_SESSION['modif_formation_nom'],
			  $_SESSION['modif_offre_nom'],
			  $_SESSION['modif_offre_description'],
			  $_SESSION['modif_offre_debut'],
			  $_SESSION['modif_offre_fin'],
			  $_SESSION['modif_offre_creation']);

		header("Location: ".$url."partenaire/profil");
	}
}

$formationDAO 	= new FormationDAO();
$formation 		= $formationDAO->obtenirFormation(); 
?>

<!DOCTYPE html>
<html lang="FR">
	<head>
		<title>Offre Modification</title>
		<link href="/ressources/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/ressources/css/signin.css" rel="stylesheet">
	</head>

	<body class="text-center">
		<form method="POST" class="form-signin">
			<a href="<?= $url."partenaire/profil" ?>"><h1>Offre Modification</h1></a>
			<label for="offre_nom" class="sr-only">Nom</label>
			<input type="text" id="offre_nom" name="offre_nom" class="form-control" placeholder="Nom" value="<?= $offre_nom ?>"><br/>
			<select name="formation_id" class="form-control form-control-lg">
				<?php
					while($resultat = $formation->fetch()){
						echo '<option value="'.$resultat['formation_id'].'" '.(($resultat['formation_id']==$formation_id)?'selected="selected"':"").'>'.$resultat['formation_nom'].'</option>';
					}
				?>
			</select><br/>
			<label for="offre_debut" class="sr-only">Début</label>
			<input type="date" id="offre_debut" name="offre_debut" class="form-control" value="<?= $offre_debut ?>"><br/>
			<label for="offre_fin" class="sr-only">Fin</label>
			<input type="date" id="offre_fin" name="offre_fin" class="form-control" value="<?= $offre_fin ?>"><br/>
			<label for="offre_description" class="sr-only">Description</label>
			<textarea name="offre_description" class="form-control" rows="3"><?= $offre_description ?></textarea><br/>
			<input type="submit" name="form_auth" class="btn btn-lg btn-primary btn-block" value="Modifier">
		</form>
	</body>
</html>