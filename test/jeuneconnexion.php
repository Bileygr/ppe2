<?php
require('../dao/jeuneDAO.php');

if(isset($_POST['form_auth'])){
	$email = $_POST['email'];
	$mot_de_passe = $_POST['mot_de_passe'];

	$connexion = new jeuneDAO();
	$connexion->connecter($email, $mot_de_passe);
}
?>