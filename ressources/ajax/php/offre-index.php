<?php
require_once("dao/classes/connexion.php");

$connect = new Connect();
$connexion = $connect->connexion();

$requete = $connexion->query("SELECT partenaire.partenaire_nom, formation.formation_nom, 
										     offre_nom, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");
$resultat = $requete->fetch();

while($resultat = $requete->fetch()){
    echo '<tr>';
		echo '<td>'.$resultat["formation_nom"].'</td>';
		echo '<td>'.$resultat["offre_nom"].'</td>';
        echo '<td>'.$resultat["partenaire_nom"].'</td>';
		echo '<td>'.$resultat["offre_debut"].'</td>';
		echo '<td>'.$resultat["offre_fin"].'</td>';
		echo '<td>'.$resultat["offre_creation"].'</td>';
	echo '</tr>';
}
?>