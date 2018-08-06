<?php
interface CandidatureInterface{
	public function ajouter($candidature);
	public function compter_les_candidatures_par_formations($id);
	public function compter_les_candidatures_partenaire();
	public function compterCandidatureParPartenaire($id);
	public function lister();
	public function liste_par_jeune($id);
	public function nombre_de_candidatures($id);
	public function suprimmer($id);
}