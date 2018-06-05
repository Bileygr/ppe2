<?php
interface PartenaireInterface{
	public function connecter($partenaire_siret, $partenaire_mot_de_passe);
	public function inscrire($partenaire);
	public function obtenirOffre($partenaire_id);
	public function modifierOffre($partenaire);
	public function suprimmerOffre($offre_id);
}
?>