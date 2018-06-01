<h1>Testeur de hash</h1>
<p><i>Entrez le mot de passe et le hash que vous voulez tester dans les champs de texte çi-dessous ensuite appuyez sur le boutton "Valider".</i></p>
<p><i>Une fois tout ça fait vous pourrez vérifier si le mot de passe correspond bien au hash. </i></p>
<form method="POST">
	<label>Mot de passe</label>
	<input type="text" name="mdp" placeholder="Mot de passe"><br/>
	<label>Hash</label>
	<input type="text" name="hash" placeholder="Mot de passe"><br/>
	<input type="submit" name="form_auth" value="Valider">
</form>

<?php
if(isset($_POST['form_auth'])){
	$mdp = $_POST['mdp'];
	$hash = $_POST['hash'];

	if(password_verify($mdp, $hash)){
		echo 'Le mot de passe correspond bien au hash.';
	}else{
		echo 'Le mot de passe ne corresond pas au hash.';
	}
}