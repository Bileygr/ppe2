<?php
interface AdministrateurInterface{
	public function connecter($administrateur_email, $administrateur_mot_de_passe);
	public function inscrire($administrateur_super, $administrateur_nom, $administrateur_prenom, $administrateur_mot_de_passe_hash,
							 $administrateur_telephone, $administrateur_email, $administrateur_adresse,
							 $administrateur_ville, $administrateur_code_postal);
}
?>