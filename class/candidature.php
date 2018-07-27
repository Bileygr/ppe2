<?php
class Candidature{
	private $candidature_id;
	private $offre_id;
	private $jeune_id;
	private $partenaire_id;
	private $status;
	private $candidature_creation;
	
	function __construct($candidature_id = null, $offre_id, $jeune_id, $partenaire_id, $status, $candidature_creation = null){
		$this->candidature_id 		= $candidature_id;
		$this->offre_id 			= $offre_id;
		$this->jeune_id 			= $jeune_id;
		$this->partenaire_id 		= $partenaire_id;
		$this->status 				= $status;
	 	$this->candidature_creation = $candidature_creation;																				
	}

	public function setCandidature_id($candidature_id){return
		$this->candidature_id = $candidature_id;}
	public function setOffre_id($offre_id){return $this->offre_id = $offre_id;}
	public function setJeune_id($jeune_id){$this->jeune_id = $jeune_id;}
	public function setPartenaire_id($partenaire_id){return $this->partenaire_id = $partenaire_id;}
	public function setStatus($status){return $this->status = $status;}
	public function setCandidature_creation($candidature_creation){return $this->candidature_dcreation= $candidature_creation;}

	public function getCandidature_id(){return $this->candidature_id;}
	public function getJeune_id(){return $this->jeune_id;}
	public function getPartenaire_id(){return $this->partenaire_id;}
	public function getStatus(){return $this->status;}
	public function getCandidature_creation(){return $this->candidature_creation;}
}
?>