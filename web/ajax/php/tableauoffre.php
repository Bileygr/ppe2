<?php
require_once("config/Connection.php");

$connect = new Connect();
$connexion = $connect->DBConnection();

$requete = $connexion->query("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_nom, formation.formation_nom,
										     offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");

$lesOffres = array();

while($ligne = $requete->fetch()){
	$lesOffres[] = array_map("utf8_encode", $ligne);
}

echo json_encode($lesOffres);
?>