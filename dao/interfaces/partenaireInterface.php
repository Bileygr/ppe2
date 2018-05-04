<?php
interface PartenaireInterface{
	public function connecter($partenaire_email, $partenaire_mot_de_passe);
	public function inscrire($partenaire_siret, $partenaire_nom, $partenaire_mot_de_passe_hash, $partenaire_telephone, $partenaire_email, $partenaire_adresse, $partenaire_ville, $partenaire_code_postal);
}
?>