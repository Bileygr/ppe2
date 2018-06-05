<?php
interface AdministrateurInterface{
	public function connecter($administrateur_email, $administrateur_mot_de_passe);
	public function inscrire($administrateur);
	public function obtenirAdministrateur();
	public function obtenirJeune();
	public function obtenirPartenaire();
	public function obtenirOffre();
	public function obtenirMiseAJourTemps();
	public function modifierAdministrateur($administrateur);
	public function modifierJeune($jeune);
	public function modifierPartenaire($partenaire);
	public function suprimmerAdministrateur($administrateur_id);
	public function suprimmerPartenaire($partenaire_id);
	public function suprimmerJeune($jeune_id);
}
?>