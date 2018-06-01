<h1>Générateur de hash</h1>
<p><i>Entrez le mot de passe que vous voulez crypter dans le champ de texte çi-dessous ensuite appuyez sur le boutton "Hasher".</i></p>
<p><i>Une fois tout ça fait vous trouverez vôtre mot de passe crypté en dessous du champ de texte. </i></p>
<form method="POST">
	<label>Mot de passe</label>
	<input type="text" name="mdp" placeholder="Mot de passe">
	<input type="submit" name="form_auth" value="Hasher">
</form>

<?php
if(isset($_POST['form_auth'])){
	$mdp = $_POST['mdp'];
	$hash = password_hash($mdp, PASSWORD_BCRYPT);

	echo '<p>Le mot de passe hashé est <strong>'.$mdp.'</strong> et une fois hashé il donne <strong>'.$hash.'</strong></p>';
}