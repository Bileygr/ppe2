<?php
require('../dao/administrateurDAO.php');

if(isset($_POST['form_auth'])){
	$super_administrateur = $_POST['super_administrateur'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$code_postal = $_POST['code_postal'];
;
	if(isset($_POST['super_administrateur'])){
		$super_administrateur = 1;
	}else{
		$super_administrateur = 0;
	}

	$inscription = new AdministrateurDAO();
	$inscription->inscrire($super_administrateur, $nom, $prenom, $mot_de_passe, $email, $telephone, $adresse, $ville, $code_postal);
}
?>