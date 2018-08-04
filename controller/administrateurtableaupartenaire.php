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

$nbAdmin = $administrateurDAO->nbAdmin();
$nbJeune = $jeuneDAO->nbJeune();
$nbOffre = $offreDAO->nbOffre();
$nbPartenaire = $partenaireDAO->nbPartenaire();
$partenaires = $partenaireDAO->lister();

$partenaire = "";

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

while($resultat = $partenaires->fetch()){
  $partenaire .= "<tr>
                    <td>".$resultat["partenaire_siret"]."</td>
                    <td>".$resultat["partenaire_nom"]."</td>
                    <td>".$resultat["partenaire_telephone"]."</td>
                    <td>".$resultat["partenaire_email"]."</td>
                    <td>".$resultat["partenaire_derniere_connexion"]."</td>
                    <td>".$resultat["partenaire_creation"]."</td>
                    <form method='POST'>
                      <input type='hidden' name='partenaire_id' value=".$resultat["partenaire_id"].">
                      <input type='hidden' name='partenaire_siret' value=".$resultat["partenaire_siret"].">
                      <input type='hidden' name='partenaire_nom' value=".$resultat["partenaire_nom"].">
                      <input type='hidden' name='partenaire_telephone' value=".$resultat["partenaire_telephone"].">
                      <input type='hidden' name='partenaire_email' value=".$resultat["partenaire_email"].">
                      <input type='hidden' name='partenaire_adresse' value=".$resultat["partenaire_adresse"].">
                      <input type='hidden' name='partenaire_ville' value=".$resultat["partenaire_ville"].">
                      <input type='hidden' name='partenaire_code_postal' value=".$resultat["partenaire_code_postal"].">
                      <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='modifier' value='Modifier'></td>
                      <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='suprimmer' value='Suprimmer'></td>
                    </form>
                  </tr>";
}

$engine->assign("tableau des partenaires", $partenaire);

if(isset($_POST['modifier'])){
  $_SESSION['modifier_partenaire_id'] = $_POST['partenaire_id'];
  $_SESSION['modifier_partenaire_siret'] = $_POST['partenaire_siret'];
  $_SESSION['modifier_partenaire_nom'] = $_POST['partenaire_nom'];
  $_SESSION['modifier_partenaire_telephone'] = $_POST['partenaire_telephone'];
  $_SESSION['modifier_partenaire_email'] = $_POST['partenaire_email'];
  $_SESSION['modifier_partenaire_adresse'] = $_POST['partenaire_adresse'];
  $_SESSION['modifier_partenaire_ville'] = $_POST['partenaire_ville'];
  $_SESSION['modifier_partenaire_code_postal'] = $_POST['partenaire_code_postal'];

  header("Location: ".$url."/administrateur/partenaire-modification");
}

if(isset($_POST['suprimmer'])){
  $partenaireDAO->suprimmer($_POST['partenaire_id']);

  header("Location: ".$url."/administrateur/tableau/partenaire");
}

$engine->render("administrateurtableaupartenaire.html");
?>