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

$jeunes = $jeuneDAO->lister();
$nbAdmin = $administrateurDAO->nbAdmin();
$nbJeune = $jeuneDAO->nbJeune();
$nbOffre = $offreDAO->nbOffre();
$nbPartenaire = $partenaireDAO->nbPartenaire();

$jeune = "";

$url = $engine->url();
$engine->deconnexion();
$engine->administrateur_session_check();
$engine->assign("titre", "Menu Administrateur");
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->assign("nombre d'administrateur", $nbAdmin);
$engine->assign("nombre de jeune", $nbJeune);
$engine->assign("nombre d'offre", $nbOffre);
$engine->assign("nombre de partenaire", $nbPartenaire);

while($resultat = $jeunes->fetch()){
  $jeune .= "<tr>
              <td>".$resultat["jeune_nom"]."</td>
              <td>".$resultat["jeune_prenom"]."</td>
              <td>".$resultat["jeune_telephone"]."</td>
              <td>".$resultat["jeune_email"]."</td>
              <td>".$resultat["jeune_derniere_connexion"]."</td>
              <td>".$resultat["jeune_creation"]."</td>
              <form method='POST'>
                <input type='hidden' name='jeune_id' value=".$resultat["jeune_id"].">
                <input type='hidden' name='jeune_nom' value=".$resultat["jeune_nom"].">
                <input type='hidden' name='jeune_prenom' value=".$resultat["jeune_prenom"].">
                <input type='hidden' name='jeune_telephone' value=".$resultat["jeune_telephone"].">
                <input type='hidden' name='jeune_email' value=".$resultat["jeune_email"].">
                <input type='hidden' name='jeune_adresse' value=".$resultat["jeune_adresse"].">
                <input type='hidden' name='jeune_ville' value=".$resultat["jeune_ville"].">
                <input type='hidden' name='jeune_code_postal' value=".$resultat["jeune_code_postal"].">
                <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='modifier' value='Modifier'></td>
                <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='suprimmer' value='Suprimmer'></td>
              </form>
            </tr>";
}

$engine->assign("tableau des jeunes", $jeune);

if(isset($_POST['modifier'])){
  $_SESSION['modifier_jeune_id']          = $_POST['jeune_id'];
  $_SESSION['modifier_jeune_nom']         = $_POST['jeune_nom'];
  $_SESSION['modifier_jeune_prenom']      = $_POST['jeune_prenom'];
  $_SESSION['modifier_jeune_telephone']   = $_POST['jeune_telephone'];
  $_SESSION['modifier_jeune_email']       = $_POST['jeune_email'];
  $_SESSION['modifier_jeune_adresse']     = $_POST['jeune_adresse'];
  $_SESSION['modifier_jeune_ville']       = $_POST['jeune_ville'];
  $_SESSION['modifier_jeune_code_postal'] = $_POST['jeune_code_postal'];

  header("Location: ".$url."/administrateur/jeune-modification");
}

if(isset($_POST['suprimmer'])){
  $jeuneDAO->suprimmer($_POST['jeune_id']);

  header("Location: ".$url."/administrateur/tableau/jeune");
}

$engine->render("administrateurtableaujeune.html");
?>