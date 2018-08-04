<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/administrateurDAO.php');
require_once('dao/class/jeuneDAO.php');
require_once('dao/class/offreDAO.php');
require_once('dao/class/partenaireDAO.php');

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();
$jeuneDAO = new JeuneDAO();
$offreDAO = new OffreDAO();
$partenaireDAO = new PartenaireDAO();

$offres = $offreDAO->lister();
$nbAdmin = $administrateurDAO->nbAdmin();
$nbJeune = $jeuneDAO->nbJeune();
$nbOffre = $offreDAO->nbOffre();
$nbPartenaire = $partenaireDAO->nbPartenaire();

$offre = "";

$url = $engine->url();
$engine->session_check();
$engine->deconnexion();
$engine->assign("titre", "Administrateur Profil");
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->assign("nombre d'administrateur", $nbAdmin);
$engine->assign("nombre de jeune", $nbJeune);
$engine->assign("nombre d'offre", $nbOffre);
$engine->assign("nombre de partenaire", $nbPartenaire);

 while($resultat = $offres->fetch()){
  $offre .= "<tr>
              <td>".$resultat["formation_nom"]."</td>
              <td>".$resultat["offre_nom"]."</td>
              <td>".$resultat["partenaire_nom"]."</td>
              <td>".$resultat["offre_debut"]."</td>
              <td>".$resultat["offre_fin"]."</td>
              <td>".$resultat["offre_creation"]."</td>
                <form method='POST'>
                  <input type='hidden' name='offre_id' value=".$resultat["offre_id"].">
                  <input type='hidden' name='formation_id' value=".$resultat["formation_id"].">
                  <input type='hidden' name='offre_nom' value=".$resultat["offre_nom"].">
                  <input type='hidden' name='partenaire_nom' value=".$resultat["partenaire_nom"].">
                  <input type='hidden' name='offre_description' value=".$resultat["offre_description"].">
                  <input type='hidden' name='offre_debut' value=".$resultat["offre_debut"].">
                  <input type='hidden' name='offre_fin' value=".$resultat["offre_fin"].">
                  <input type='hidden' name='offre_creation' value=".$resultat["offre_creation"].">
                  <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='modifier' value='Modifier'></td>
                  <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='suprimmer' value='Suprimmer'></td>
                </form>
            </tr>";
}

$engine->assign("tableau des offres", $offre);

if(isset($_POST['modifier'])){
  $_SESSION['modifier_offre_id'] = $_POST['offre_id']; 
  $_SESSION['modifier_formation_id'] = $_POST['formation_id']; 
  $_SESSION['modifier_formation_nom'] = $_POST['formation_nom']; 
  $_SESSION['modifier_offre_nom'] = $_POST['offre_nom']; 
  $_SESSION['modifier_partenaire_nom'] = $_POST['partenaire_nom']; 
  $_SESSION['modifier_offre_description'] = $_POST['offre_description']; 
  $_SESSION['modifier_offre_debut'] = $_POST['offre_debut']; 
  $_SESSION['modifier_offre_fin'] = $_POST['offre_fin']; 
  $_SESSION['modifier_offre_creation'] = $_POST['offre_creation']; 

  header("Location: ".$url."/offre/offre-modification");
}

if(isset($_POST['suprimmer'])){
  $offreDAO->suprimmer($_POST["offre_id"]);

  header("Location: ".$url."/administrateur/tableau/offre");
}

$engine->render("administrateurtableauoffre.html");
?>