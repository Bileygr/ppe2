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

$administrateurs = $administrateurDAO->lister();
$nbAdmin = $administrateurDAO->nbAdmin();
$nbJeune = $jeuneDAO->nbJeune();
$nbOffre = $offreDAO->nbOffre();
$nbPartenaire = $partenaireDAO->nbPartenaire();

$administrateur = "";
$super = "";

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

if($_SESSION["administrateur_super"] == 1){
  $engine->assign("bloc ajout administrateur", '<input class="btn btn-secondary my-2 my-sm-0 float-right" type="submit" name="modifier_administrateur" onclick="location.href=\'{{ url }}/administrateur/inscription\';" value="Ajouter">');
  $engine->assign("bloc modifier et supprimer administrateur", '<th scope="col">Modifier</th> <th scope="col">Suprimmer</th>');
}elseif($_SESSION["administrateur_super"] == 0){
  $engine->assign("bloc ajout administrateur", "");
  $engine->assign("bloc modifier et supprimer administrateur", "");
}

while($resultat = $administrateurs->fetch()){
  if($resultat["administrateur_super"] == 1){
    $super = "<td>Oui</td>";
  }elseif($resultat["administrateur_super"] == 0){
    $super = "<td>Non</td>";
  }

  if($_SESSION["administrateur_super"] == 1){
    $session_admin = '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier" value="Modifier"></td> 
                      <td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer" value="Suprimmer"></td>';
  }elseif($_SESSION["administrateur_super"] == 0){
    $session_admin = "";
  }

  $administrateur .= "<tr>
                        <td>".$resultat["administrateur_nom"]."</td>
                        <td>".$resultat["administrateur_prenom"]."</td>"
                        .$super.
                        "<td>".$resultat["administrateur_telephone"]."</td>
                        <td>".$resultat["administrateur_email"]."</td>
                        <td>".$resultat["administrateur_derniere_connexion"]."</td>
                        <td>".$resultat["administrateur_creation"]."</td>
                        <form method='POST'>
                          <input type='hidden' name='administrateur_id' value=".$resultat["administrateur_id"].">
                          <input type='hidden' name='administrateur_nom' value=".$resultat["administrateur_nom"].">
                          <input type='hidden' name='administrateur_prenom' value=".$resultat["administrateur_prenom"].">
                          <input type='hidden' name='administrateur_super' value=".$resultat["administrateur_super"].">
                          <input type='hidden' name='administrateur_telephone' value=".$resultat["administrateur_telephone"].">
                          <input type='hidden' name='administrateur_email' value=".$resultat["administrateur_email"].">
                          <input type='hidden' name='administrateur_adresse' value=".$resultat["administrateur_adresse"].">
                          <input type='hidden' name='administrateur_ville' value=".$resultat["administrateur_ville"].">
                          <input type='hidden' name='administrateur_code_postal' value=".$resultat["administrateur_code_postal"].">"
                          .$session_admin."
                        </form>
                      </tr>";
}

$engine->assign("bloc tableau d'administrateur", $administrateur);

if(isset($_POST['modifier'])){
  $_SESSION['modifier_administrateur_id']          = $_POST['administrateur_id'];
  $_SESSION['modifier_administrateur_nom']         = $_POST['administrateur_nom'];
  $_SESSION['modifier_administrateur_prenom']      = $_POST['administrateur_prenom'];
  $_SESSION['modifier_administrateur_super']       = $_POST['administrateur_super'];
  $_SESSION['modifier_administrateur_telephone']   = $_POST['administrateur_telephone'];
  $_SESSION['modifier_administrateur_email']       = $_POST['administrateur_email'];
  $_SESSION['modifier_administrateur_adresse']     = $_POST['administrateur_adresse'];
  $_SESSION['modifier_administrateur_ville']       = $_POST['administrateur_ville'];
  $_SESSION['modifier_administrateur_code_postal'] = $_POST['administrateur_code_postal'];

  header("Location: ".$url."/administrateur/administrateur-modification");
}

if(isset($_POST['suprimmer'])){
  $administrateurDAO = new AdministrateurDAO();
  $administrateurDAO->suprimmer($_POST['administrateur_id']);

  header("Location: ".$url."/administrateur/tableau/administrateur");
}

$engine->render("administrateurtableauadministrateur.html");
?>