<?php
require_once('connexion.php');
require_once('classes/offre.php');
require_once('dao/interfaces/offreInterface.php');

class OffreDAO implements OffreInterface{
	public function lister(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT partenaire.partenaire_nom, formation.formation_nom, 
										     offre_nom, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");
		$resultat = $requete->fetch();

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function formationChart(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT formation.formation_nom, COUNT(*) FROM offre JOIN formation ON offre.formation_id = formation.formation_id GROUP BY formation.formation_nom");

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function partenaireChart(){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT partenaire.partenaire_nom, COUNT(*) FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id GROUP BY partenaire.partenaire_nom");

		return $requete;
		$requete = null;
		$connexion = null;
	}
}
?>