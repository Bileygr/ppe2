<?php
interface JeuneInterface{
	public function connecter($jeune_email, $jeune_mot_de_passe);
	public function inscrire($jeune);
	public function modifier($jeune);
	public function suprimmer($jeune_id);
	public function lister();
}
?>