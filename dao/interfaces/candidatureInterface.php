<?php
interface CandidatureInterface{
	public function ajouter($candidature);
	public function compterCandidatureParPartenaire($jeune_id);
	public function lister();
	public function listerParJeune($jeune_id);
	public function suprimmer($candidature_id);
}