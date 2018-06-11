<?php
interface OffreInterface{
	public function ajouter($offre);
	public function compterFormation();
	public function compterFormationParPartenaire($partenaire_id);
	public function compterPartenaire();
	public function lister();
	public function listerParPartenaire($partenaire_id);
	public function modifier($offre);
	public function suprimmer($offre_id);
}
?>