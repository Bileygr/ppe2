<?php
require('connexion.php');
require_once('classes/offre.php');
require_once('dao/interfaces/offreInterface.php');

class OffreDAO implements OffreInterface{
	public function rechercher_partenaire($partenaire_id){
		$connect = new Connect();
		$connexion = $connect->connexion();

		$requete = $connexion->query("SELECT partenaire.partenaire_nom, formation.formation_nom, 
										     offre_nom, offre_debut, offre_fin, offre_creation
										    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id
										    WHERE formation.partenaire_id = ?");
		$requete->execute($partenaire_id);
		$resultat = $requete->fetch();

		return $requete;
		$requete = null;
		$connexion = null;
	}

	public function rechercher_liste(){
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
}
?>