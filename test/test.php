<?php
require('../dao/classes/connexion.php');

$connect = new Connect();
$connexion = $connect->connexion();

$requete = $connexion->query("SELECT partenaire_nom, partenaire_mot_de_passe_hash FROM partenaire");
$requete2 = $connexion->query("SELECT administrateur_mot_de_passe_hash FROM administrateur");
$requete3 = $connexion->query("SELECT jeune_mot_de_passe_hash FROM jeune");
?>

<h1>Test du mot de passe et du hash</h1>
<form method="POST">
	<label>Mot de passe</label>
	<input type="text" name="mdp" placeholder="Mot de passe">
	<input type="submit" name="form_auth" value="Validation">
</form>
<!--
<h1>Tableau des hash</h1>
<h2>Partenaires</h2>
<table>
	<tr>
		<th>Nom</th>
		<th>Hash</th>
	</tr>
	<?php/*
		while($resultat = $requete->fetch()){
			echo '<tr>
					<td>'.$resultat['partenaire_nom'].'</td>
					<td>'.$resultat['partenaire_mot_de_passe_hash'].'</td>
				  </tr>
				 ';
		}*/
	?>
</table>

<table>
	<tr>
		<th>Administrateurs</th>
	</tr>
	<?php/*
		while($resultat = $requete2->fetch()){
			echo '<tr>
					<td>'.$resultat['administrateur_mot_de_passe_hash'].'</td>
				  </tr>
				 ';
		}*/
	?>
</table>

<table>
	<tr>
		<th>Jeunes</th>
	</tr>
	<?php/*
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