<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/administrateurDAO.php");
require_once("dao/class/jeuneDAO.php");
require_once("dao/class/offreDAO.php");
require_once("dao/class/partenaireDAO.php");

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();
$jeuneDAO = new JeuneDAO();
$offreDAO = new OffreDAO();
$partenaireDAO = new PartenaireDAO();

$partenaires = $partenaireDAO->lister();
$nombre_d_administrateurs = $administrateurDAO->nombre_d_administrateurs();
$nombre_de_jeune = $jeuneDAO->nombre_de_jeunes();
$nombre_d_offres = $offreDAO->nombre_d_offres();
$nombre_de_partenaires = $partenaireDAO->nombre_de_partenaires();

$partenaire = "";

$url = $engine->url();
$engine->deconnexion();
$engine->administrateur_session_check();

$engine->assign("titre", "Menu Administrateur");
$engine->assign("prenom", $_SESSION["administrateur_prenom"]);
$engine->assign("nom", $_SESSION["administrateur_nom"]);
$engine->assign("nombre d'administrateurs", $nombre_d_administrateurs);
$engine->assign("nombre de jeunes", $nombre_de_jeune);
$engine->assign("nombre d'offres", $nombre_d_offres);
$engine->assign("nombre de partenaires", $nombre_de_partenaires);

while($resultat = $partenaires->fetch()){
  $partenaire .= "<tr>
                    <td>".$resultat["partenaire_siret"]."</td>
                    <td>".$resultat["partenaire_nom"]."</td>
                    <td>".$resultat["partenaire_telephone"]."</td>
                    <td>".$resultat["partenaire_email"]."</td>
                    <td>".$resultat["partenaire_derniere_connexion"]."</td>
                    <td>".$resultat["partenaire_creation"]."</td>
                    <form method=\"POST\">
                      <input type=\"hidden\" name=\"id\" value=".$resultat["partenaire_id"].">
                      <input type=\"hidden\" name=\"siret\" value=".$resultat["partenaire_siret"].">
                      <input type=\"hidden\" name=\"nom\" value=".$resultat["partenaire_nom"].">
                      <input type=\"hidden\" name=\"telephone\" value=".$resultat["partenaire_telephone"].">
                      <input type=\"hidden\" name=\"email\" value=".$resultat["partenaire_email"].">
                      <input type=\"hidden\" name=\"adresse\" value=".$resultat["partenaire_adresse"].">
                      <input type=\"hidden\" name=\"ville\" value=".$resultat["partenaire_ville"].">
                      <input type=\"hidden\" name=\"code_postal\" value=".$resultat["partenaire_code_postal"].">
                      <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"modifier\" value=\"Modifier\"></td>
                      <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"suprimmer\" value=\"Suprimmer\"></td>
                    </form>
                  </tr>";
}

$engine->assign("tableau des partenaires", $partenaire);

if(isset($_POST["modifier"])){
  $_SESSION["modifier_partenaire_id"] = $_POST["id"];
  $_SESSION["modifier_partenaire_siret"] = $_POST["siret"];
  $_SESSION["modifier_partenaire_nom"] = $_POST["nom"];
  $_SESSION["modifier_partenaire_telephone"] = $_POST["telephone"];
  $_SESSION["modifier_partenaire_email"] = $_POST["email"];
  $_SESSION["modifier_partenaire_adresse"] = $_POST["adresse"];
  $_SESSION["modifier_partenaire_ville"] = $_POST["ville"];
  $_SESSION["modifier_partenaire_code_postal"] = $_POST["code_postal"];

  header("Location: ".$url."/administrateur/partenaire-modification");
}

if(isset($_POST["suprimmer"])){
  $partenaireDAO->suprimmer($_POST["id"]);

  header("Location: ".$url."/administrateur/tableau/partenaire");
}

$engine->render("administrateurTableauPartenaire.html");
?>