<?php

interface administrateurDAOInterface{
	public function connecter($email, $mot_de_passe);
	public function inscrire($super_administrateur, $nom, $prenom, $mot_de_passe, $email, $telephone, $adresse, $ville, $code_postal);
}
?>