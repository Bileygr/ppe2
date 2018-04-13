<?php
require('../dao/administrateurDAO.php');

if(isset($_POST['form_auth'])){
	$email = $_POST['email'];
	$mot_de_passe = $_POST['mot_de_passe'];

	$connexion = new administrateurDAO();
	$connexion->connecter($email, $mot_de_passe);
}
?>