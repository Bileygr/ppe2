<?php
require('../dao/classes/connexion.php');

$connect = new Connect();
$connexion = $connect->connexion();

$requete = $connexion->query("SELECT partenaire_nom, partenaire_mot_de_passe_hash FROM partenaire");
$requete2 = $connexion->query("SELECT administrateur_mot_de_passe_hash FROM administrateur");
$requete3 = $connexion->query("SELECT jeune_mot_de_passe_hash FROM jeune");
$requete = $connexion->query("SELECT partenaire.partenaire_nom, formation.formation_nom, 
										     offre_nom, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>France</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>


<!--
<h1>Test du mot de passe et du hash</h1>
<form method="POST">
	<label>Mot de passe</label>
	<input type="text" name="mdp" placeholder="Mot de passe">
	<input type="submit" name="form_auth" value="Validation">
</form>

<h1>Offre<h1>
		<table>
			<tr>
				<td>Partenaire</td>
				<td>Formation</td>
				<td>Nom</td>
				<td>Début</td>
				<td>Fin</td>
				<td>Création</td>
			</tr>
				<?php /*
					while($resultat = $requete->fetch()){
						echo '<tr>';
						echo '<td>'.$resultat['partenaire_nom'].'</td>';
						echo '<td>'.$resultat['formation_nom'].'</td>';
						echo '<td>'.$resultat['offre_nom'].'</td>';
						echo '<td>'.$resultat['offre_debut'].'</td>';
						echo '<td>'.$resultat['offre_fin'].'</td>';
						echo '<td>'.$resultat['offre_creation'].'</td>';
						echo '</td>';
					}
				?>
		</table>

<h1>Tableau des hash</h1>
<h2>Partenaires</h2>
<table>
	<tr>
		<th>Nom</th>
		<th>Hash</th>
	</tr>
	<?php
		while($resultat = $requete->fetch()){
			echo '<tr>
					<td>'.$resultat['partenaire_nom'].'</td>
					<td>'.$resultat['partenaire_mot_de_passe_hash'].'</td>
				  </tr>
				 ';
		}
	?>
</table>

<table>
	<tr>
		<th>Administrateurs</th>
	</tr>
	<?php
		while($resultat = $requete2->fetch()){
			echo '<tr>
					<td>'.$resultat['administrateur_mot_de_passe_hash'].'</td>
				  </tr>
				 ';
		}
	?>
</table>

<table>
	<tr>
		<th>Jeunes</th>
	</tr>
	<?php
		while($resultat = $requete2->fetch()){
			echo '<tr>
					<td>'.$resultat['jeune_mot_de_passe_hash'].'</td>
				  </tr>
				 ';
		}*/
	?>
</table>
-->
<?php
if(isset($_POST['form_auth'])){
	$mdp = $_POST['mdp'];
	$hash = password_hash($mdp, PASSWORD_BCRYPT);

	echo '<p>Mot de passe: '.$mdp.'</p>';
	echo '<p>Hash: '.$hash.'</p>';

	/*
	if(password_verify($mdp, $hash)){
		exit('<h1>CA CORRESPOND :D</h1>');
	}else{
		exit('<h1>CA NE CORRESPOND PAS :\'(</h1>');
	}
	*/
}
?>