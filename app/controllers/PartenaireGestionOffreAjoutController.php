<?php
session_start();
require_once("app/models/engine.php");
require_once("app/models/dao/FormationDAO.class.php");
require_once("app/models/dao/OffreDAO.class.php");

$engine = new Engine();
$formationDAO = new FormationDAO();
$offreDAO = new OffreDAO();

$formations = $formationDAO->lister(); 

$formation = "";

$url = $engine->url();
$engine->partenaire_session_check();

while($resultat = $formations->fetch()){
	$formation .= "<option value=".$resultat["formation_id"].">".$resultat["formation_nom"]."</option>";
}

$engine->assign("liste des formations", $formation);

if(isset($_POST["ajouter"])){
	$partenaire_id = $_SESSION["partenaire_id"];
	$formation_id = $_POST["formation_id"];
	$offre_nom 	= $_POST["offre_nom"];
	$offre_description = $_POST["offre_description"];
	$offre_debut = $_POST["offre_debut"];
	$offre_fin = $_POST["offre_fin"];

	if(!empty($partenaire_id) && !empty($formation_id) && 
	   !empty($offre_nom) && !empty($offre_description) &&
	   !empty($offre_debut) && !empty($offre_fin)){
		$offre = new Offre(null, $partenaire_id, $formation_id, $offre_nom, $offre_description, $offre_debut, $offre_fin, null);
		$offreDAO->ajouter($offre);

		header("Location: ".$url."/partenaire/gestion/offre");
	}else{
		header("Location: ".$url."/partenaire/gestion/offre/ajout");
	}
}

$engine->render("partenairegestionoffreajout.html");
?>
