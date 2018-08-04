<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/formationDAO.php');
require_once('dao/class/offreDAO.php');

$engine = new Engine();
$formationDAO = new FormationDAO();
$offreDAO = new OffreDAO();

$formations = $formationDAO->lister(); 

$formation = "";
$select = "";

$url = $engine->url();
$engine->administrateur_session_check();
$engine->assign("titre", "Modification Offre");
$engine->assign("nom de l'offre",$_SESSION['modifier_offre_nom']);
$engine->assign("nom de la formation",$_SESSION['modifier_formation_nom']);
$engine->assign("description", $_SESSION["modifier_offre_description"]);
$engine->assign("debut", $_SESSION["modifier_offre_debut"]);
$engine->assign("fin",$_SESSION['modifier_offre_fin']);
$engine->assign("creation",$_SESSION['modifier_offre_creation']);

while($resultat = $formations->fetch()){
	if($_SESSION["modifier_formation_id"] == $resultat["formation_id"]){
		$select = "selected='selected'";
	}else{
		$select = "";
	}

	$formation .= "<option value=".$resultat['formation_id']." ".$select.">".$resultat['formation_nom']."</option>";
}

$engine->assign("liste des formations", $formation);

if(isset($_POST['modifier'])){
	$formation_id = $_POST['formation_id'];
	$offre_nom = $_POST['offre_nom'];
	$offre_description = $_POST['offre_description'];
	$offre_debut = $_POST['offre_debut'];
	$offre_fin = $_POST['offre_fin'];

	if(!empty($offre_nom) && !empty($formation_id) && 
	   !empty($offre_debut) && !empty($offre_fin) &&
	   !empty($offre_description)){
		$offre = new Offre($_SESSION["modifier_offre_id"], null, $formation_id, $offre_nom, $offre_description, $offre_debut, $offre_fin, null);
		$offreDAO->modifier($offre);

		unset($_SESSION['modifier_offre_id'],
			  $_SESSION['modifier_formation_id'],
			  $_SESSION['modifier_formation_nom'],
			  $_SESSION['modifier_offre_nom'],
			  $_SESSION['modifier_offre_description'],
			  $_SESSION['modifier_offre_debut'],
			  $_SESSION['modifier_offre_fin'],
			  $_SESSION['modifier_offre_creation']);

		header("Location: ".$url."/administrateur/tableau/offre");
	}
}

$engine->render("offremodification.html");
?>