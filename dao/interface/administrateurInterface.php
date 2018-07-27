<?php
interface AdministrateurInterface{
	public function connecter($administrateur_email, $administrateur_mot_de_passe);
	public function inscrire($administrateur);
	public function lister();
	public function modifier($administrateur);
	public function suprimmer($administrateur_id);
}
?>