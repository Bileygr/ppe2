<?php
interface AdministrateurInterface{
	public function connecter($administrateur_email, $administrateur_mot_de_passe);
	public function inscrire($administrateur);
	public function getPartenaire();
	public function getJeune();
	public function getAdministrateur();
	public function getOffre();
	public function suprimmerAdministrateur($administrateur_id);
	public function suprimmerPartenaire($partenaire_id);
	public function suprimmerJeune($jeune_id);
}
?>