<?php
require('framework/noyau/moteur.php');
require_once('dao/classes/offreDAO.php');
session_start();

if(empty($_SESSION["partenaire_siret"])){
	header("Location: partenaireconnexion.php");
}

$offreDAO = new OffreDAO();
$requete = $offreDAO->rechercher();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Partenaire Profil</title>
	</head>

	<body>
		<h1>Partenaire Profil<h1>
		<a href="offreajout.php">Ajouter une offre</a>
		<table>
			<tr>
				<td>Partenaire</td>
				<td>Formation</td>
				<td>Nom</td>
				<td>Début</td>
				<td>Fin</td>
				<td>Création</td>
			</tr>
			<?php
			while($resultat=$requete->fetch()){
				echo '<tr>';
					echo '<td>'.$resultat["partenaire_nom"].'</td>';
					echo '<td>'.$resultat["formation_nom"].'</td>';
					echo '<td>'.$resultat["offre_nom"].'</td>';
					echo '<td>'.$resultat["offre_debut"].'</td>';
					echo '<td>'.$resultat["offre_fin"].'</td>';
					echo '<td>'.$resultat["offre_creation"].'</td>';
				echo '</tr>';
			}
			?>
		</table>
	</body>
</html>