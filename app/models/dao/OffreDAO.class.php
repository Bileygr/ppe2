<?php
require_once("config/Connection.php");
require_once("app/models/base/Offre.class.php");

class OffreDAO{
	public function ajouter($offre){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("INSERT INTO offre(formation_id, partenaire_id, offre_nom, offre_description, offre_debut, offre_fin, offre_creation)
											 VALUES(?, ?, ?, ?, ?, ?, NOW())");
		$requete->execute(array($offre->getFormation_id(),
								$offre->getPartenaire_id(),
								$offre->getOffre_nom(),
								$offre->getOffre_description(),
								$offre->getOffre_debut(),
								$offre->getOffre_fin()));

		$requete = null;
		$connexion = null;
	}

	public function compter_les_formations(){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->query("SELECT formation.formation_nom, COUNT(*) FROM offre JOIN formation ON offre.formation_id = formation.formation_id GROUP BY formation.formation_nom");

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function compter_formations_par_partenaires($id){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("SELECT formation.formation_nom, COUNT(*) FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id JOIN formation ON offre.formation_id = formation.formation_id WHERE partenaire.partenaire_id = ? GROUP BY formation.formation_nom");
		$requete->execute(array($id));

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function compter_les_partenaires(){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->query("SELECT partenaire.partenaire_nom, COUNT(*) FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id GROUP BY partenaire.partenaire_nom");

		return $requete;
		$requete = null;
		$connexion= null;
	}

	public function lister(){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->query("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_id, partenaire.partenaire_nom, formation.formation_nom, offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id JOIN formation ON offre.formation_id = formation.formation_id");

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function lister_par_partenaire($id){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_nom, formation.formation_nom,
										     offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id WHERE partenaire.partenaire_id = ? ");
		$requete->execute(array($id));

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function modifier($offre){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("UPDATE offre SET formation_id = ?, offre_nom = ?, offre_description = ?, offre_debut = ?,
														 offre_fin = ? WHERE offre_id = ?");

		$requete->execute(array($offre->getFormation_id(), $offre->getOffre_nom(), $offre->getOffre_description(), $offre->getOffre_debut(), $offre->getOffre_fin(), $offre->getOffre_id()));

		$requete = null;
		$connexion = null;
	}

	public function nombre_d_offres(){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->query("SELECT COUNT(*) FROM offre");
		$resultat = $requete->fetch();
		$nombre_d_offres = $resultat["COUNT(*)"];

		$requete = null;
		$connexion = null;
		return $nombre_d_offres;
	}

	public function nombre_d_offres_par_partenaires($id){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("SELECT COUNT(*) FROM offre WHERE partenaire_id = ?");
		$requete->execute(array($id));
		$resultat = $requete->fetch();
		$nbOffre = $resultat["COUNT(*)"];

		$requete = null;
		$connexion = null;
		return $nbOffre;
	}

	public function suprimmer($offre_id){
		$connect = new Connect();
		$connexion = $connect->DBConnection();

		$requete = $connexion->prepare("DELETE FROM offre WHERE offre_id = ?");
		$requete->execute(array($offre_id));

		$requete = null;
		$connexion = null;	
	}
}
?>