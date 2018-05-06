<?php
interface JeuneInterface{
	public function connecter($jeune_email, $jeune_mot_de_passe);
	public function inscrire($jeune);
}
?>