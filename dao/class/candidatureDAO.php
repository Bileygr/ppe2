<?php
include_once("connexion.php");
include_once("class/candidature.php");
include_once("dao/interface/candidatureInterface.php");

Class CandidatureDAO implements CandidatureInterface{
	public function ajouter($candidature){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->prepare("INSERT INTO candidature() VALUES()");
		$requete->execute(array());

		$requete 	= null;
		$connexion 	= null;
	}

	public function compterCandidatureParFormation($jeune_id){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->prepare("SELECT formation.formation_nom, COUNT(*) FROM candidature JOIN formation ON candidature.formation_id = formation.formation_id WHERE jeune_id = ? GROUP BY formation.formation_nom");
		$requete->execute(array($jeune_id));

		return $requete; 
		$requete = null;
		$connexion 	= null;
	}

	public function compterCandidaturePartenaire(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete=$connexion->query("SELECT partenaire.partenaire_nom, COUNT(*) FROM candidature JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id GROUP BY partenaire.partenaire_nom");

		return $requete; 
		$requete = null;
		$connexion = null;
	}

	public function compterCandidatureParPartenaire($jeune_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->prepare("SELECT partenaire.partenaire_nom, COUNT(*) FROM candidature JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id WHERE jeune_id = ? GROUP BY partenaire.partenaire_nom");
		$requete->execute(array($jeune_id));

		return $requete; 
		$requete 	= null;
		$connexion 	= null;
	}

	public function lister(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->query("SELECT * FROM candidature");

		return $requete;
		$requete 	= null;
		$connexion 	= null;	
	}

	public function listerParJeune($jeune_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->prepare("SELECT candidature.candidature_id, formation.formation_nom, offre.offre_nom, offre.offre_debut, offre.offre_fin, offre.offre_creation, partenaire.partenaire_nom, candidature.status FROM candidature JOIN formation ON candidature.formation_id = formation.formation_id JOIN offre ON candidature.offre_id = offre.offre_id JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id  WHERE jeune_id = ?");
		$requete->execute(array($jeune_id));

		return $requete;
		$requete 	= null;
		$connexion 	= null;	
	}

	public function nbCandidatures($jeune_id){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete=$connexion->prepare("SELECT COUNT(*) FROM candidature WHERE jeune_id = ?");
		$requete->execute(array($jeune_id));
		$resultat = $requete->fetch();
		$nbCandidature = $resultat["COUNT(*)"];

		$requete = null;
		$connexion = null;
		return $nbCandidature; 
	}

	public function suprimmer($candidature_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->prepare("DELETE FROM candidature WHERE candidature_id = ?");
		$requete->execute(array($candidature_id));

		$requete 	= null;
		$connexion 	= null;	
	}
}
?>