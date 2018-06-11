<?php
require_once('connexion.php');
require_once('classes/offre.php');
require_once('dao/interfaces/offreInterface.php');

class OffreDAO implements OffreInterface{
	public function ajouter($offre){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("INSERT INTO offre(formation_id, partenaire_id, offre_nom, offre_description, offre_debut, offre_fin, offre_creation)
											 VALUES(?, ?, ?, ?, ?, ?, NOW())");
		$requete->execute(array($offre->getFormation_id(),
								$offre->getPartenaire_id(),
								$offre->getOffre_nom(),
								$offre->getOffre_description(),
								$offre->getOffre_debut(),
								$offre->getOffre_fin()));

		$requete 	= null;
		$connexion 	= null;
		return $requete;
	}

	public function compterFormation(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->query("SELECT formation.formation_nom, COUNT(*) FROM offre JOIN formation ON offre.formation_id = formation.formation_id GROUP BY formation.formation_nom");

		return $requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function compterFormationParPartenaire($partenaire_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("SELECT formation.formation_nom, COUNT(*) FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id JOIN formation ON offre.formation_id = formation.formation_id WHERE partenaire.partenaire_id = ? GROUP BY formation.formation_nom");
		$requete->execute(array($partenaire_id));

		return $requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function compterPartenaire(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->query("SELECT partenaire.partenaire_nom, COUNT(*) FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id GROUP BY partenaire.partenaire_nom");

		return $requete;
		$requete 	= null;
		$connexion	= null;
	}

	public function lister(){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->query("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_nom, formation.formation_nom,
										     offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");

		return 		$requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function listerParPartenaire($partenaire_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_nom, formation.formation_nom,
										     offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id WHERE partenaire.partenaire_id = ? ");
		$requete->execute(array($partenaire_id));

		return 		$requete;
		$requete 	= null;
		$connexion 	= null;
	}

	public function modifier($offre){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->prepare("UPDATE offre SET formation_id = ?, offre_nom = ?, offre_description = ?, offre_debut = ?,
														 offre_fin = ? WHERE offre_id = ?");
		$requete->execute(array($offre->getFormation_id(),
								$offre->getOffre_nom(),
								$offre->getOffre_description(),
								$offre->getOffre_debut(),
								$offre->getOffre_fin(),
								$offre->getOffre_id()));

		$requete 	= null;
		$connexion 	= null;
	}

	public function suprimmer($offre_id){
		$connect 	= new Connect();
		$connexion 	= $connect->connexion();

		$requete = $connexion->prepare("DELETE FROM offre WHERE offre_id = ?");
		$requete->execute(array($offre_id));

		$requete	= null;
		$connexion 	= null;	
	}
}
?>