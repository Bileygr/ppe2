<?php
include_once("config/Connection.php");
include_once("app/models/base/Candidature.class.php");

Class CandidatureDAO{
	public function accepter($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete=$connection->prepare("UPDATE candidature SET status = 1 WHERE candidature_id = ?");
		$requete->execute(array($id));

		$requete = null;
		$connection = null;
	}

	public function ajouter($candidature){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("INSERT INTO candidature(offre_id, formation_id, jeune_id, partenaire_id, status, candidature_creation) VALUES(?, ?, ?, ?, 0, NOW())");
		$requete->execute(array($candidature->getOffre_id(), $candidature->getFormation_id(), $candidature->getJeune_id(), $candidature->getPartenaire_id()));

		$requete = null;
		$connection = null;
	}

	public function compter_les_candidatures_par_formations($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("SELECT formation.formation_nom, COUNT(*) FROM candidature JOIN formation ON candidature.formation_id = formation.formation_id WHERE jeune_id = ? GROUP BY formation.formation_nom");
		$requete->execute(array($id));

		return $requete; 
		$requete = null;
		$connection 	= null;
	}

	public function compter_les_candidatures_partenaire(){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete=$connexion->query("SELECT partenaire.partenaire_nom, COUNT(*) FROM candidature JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id GROUP BY partenaire.partenaire_nom");

		return $requete; 
		$requete = null;
		$connection = null;
	}

	public function lister(){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete=$connexion->query("SELECT * FROM candidature");

		return $requete;
		$requete = null;
		$connection = null;	
	}

	public function liste_par_jeune($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("SELECT candidature.candidature_id, formation.formation_nom, offre.offre_nom, offre.offre_debut, offre.offre_fin, offre.offre_creation, partenaire.partenaire_nom, candidature.status FROM candidature JOIN formation ON candidature.formation_id = formation.formation_id JOIN offre ON candidature.offre_id = offre.offre_id JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id  WHERE jeune_id = ?");
		$requete->execute(array($id));

		return $requete;
		$requete = null;
		$connection = null;	
	}

	public function liste_par_partenaires($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete = $connection->prepare("SELECT candidature.candidature_id, formation.formation_nom, offre.offre_nom, offre.offre_debut, offre.offre_fin, offre.offre_creation, partenaire.partenaire_nom, candidature.status FROM candidature JOIN formation ON candidature.formation_id = formation.formation_id JOIN offre ON candidature.offre_id = offre.offre_id JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id  WHERE partenaire.partenaire_id = ?");
		$requete->execute(array($id));

		return $requete;
		$requete = null;
		$connection = null;	
	}

	public function nombre_de_candidatures($id){
		$connect = new Connect();
		$connection = $connect->connexion();

		$requete=$connexion->prepare("SELECT COUNT(*) FROM candidature WHERE jeune_id = ?");
		$requete->execute(array($id));
		$resultat = $requete->fetch();
		$nbCandidature = $resultat["COUNT(*)"];

		$requete = null;
		$connection = null;
		return $nbCandidature; 
	}

	public function nombre_de_candidatures_par_partenaires($id){
		$connect 	= new Connect();
		$connection 	= $connect->connexion();

		$requete=$connexion->prepare("SELECT partenaire.partenaire_nom, COUNT(*) FROM candidature JOIN partenaire ON candidature.partenaire_id = partenaire.partenaire_id WHERE jeune_id = ? GROUP BY partenaire.partenaire_nom");
		$requete->execute(array($id));
		$resultat = $requete->fetch();

		$nombre_de_candidatures_par_partenaires = $resultat["COUNT(*)"];

		$requete 	= null;
		$connection 	= null;
		return $nombre_de_candidatures_par_partenaires;
	}

	public function refuser($id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete=$connexion->prepare("UPDATE candidature SET status = 0 WHERE candidature_id = ?");
		$requete->execute(array($id));

		$requete 	= null;
		$connexion 	= null;
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