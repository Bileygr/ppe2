<?php
$mdp = "passwordpasswordpassword";
$hash = password_hash($mdp, PASSWORD_BCRYPT);

echo '<p>Mot de passe clair: '.$mdp.'</p>';
echo '<p>Mot de passe hashe: '.$hash.'</p>';

if(password_verify($mdp, $hash)){
	echo '<p>Ca marche!</p>';
}else{
	echo '<p>Ca ne marche pas</p>';
}
?>