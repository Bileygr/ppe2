<?php
interface OffreInterface{
	public function ajouter($offre);
	public function compter_les_formations();
	public function compter_formations_par_partenaires($id);
	public function compter_les_partenaires();
	public function lister();
	public function lister_par_partenaire($id);
	public function modifier($offre);
	public function nombre_d_offres();
	public function nombre_d_offres_par_partenaires($id);
	public function suprimmer($offre_id);
}
?>