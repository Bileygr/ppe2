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

$jeunes = $jeuneDAO->lister();
$nombre_d_administrateurs = $administrateurDAO->nombre_d_administrateurs();
$nombre_de_jeune = $jeuneDAO->nombre_de_jeunes();
$nombre_d_offres = $offreDAO->nombre_d_offres();
$nombre_de_partenaires = $partenaireDAO->nombre_de_partenaires();

$jeune = "";

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

while($resultat = $jeunes->fetch()){
  $jeune .= "<tr>
              <td>".$resultat["jeune_nom"]."</td>
              <td>".$resultat["jeune_prenom"]."</td>
              <td>".$resultat["jeune_telephone"]."</td>
              <td>".$resultat["jeune_email"]."</td>
              <td>".$resultat["jeune_derniere_connexion"]."</td>
              <td>".$resultat["jeune_creation"]."</td>
              <form method=\"POST\">
                <input type=\"hidden\" name=\"id\" value=".$resultat["jeune_id"].">
                <input type=\"hidden\" name=\"nom\" value=".$resultat["jeune_nom"].">
                <input type=\"hidden\" name=\"prenom\" value=".$resultat["jeune_prenom"].">
                <input type=\"hidden\" name=\"telephone\" value=".$resultat["jeune_telephone"].">
                <input type=\"hidden\" name=\"email\" value=".$resultat["jeune_email"].">
                <input type=\"hidden\" name=\"adresse\" value=".$resultat["jeune_adresse"].">
                <input type=\"hidden\" name=\"ville\" value=".$resultat["jeune_ville"].">
                <input type=\"hidden\" name=\"code_postal\" value=".$resultat["jeune_code_postal"].">
                <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"modifier\" value=\"Modifier\"></td>
                <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"suprimmer\" value=\"Suprimmer\"></td>
              </form>
            </tr>";
}

$engine->assign("tableau des jeunes", $jeune);

if(isset($_POST["modifier"])){
  $_SESSION["modifier_jeune_id"] = $_POST["id"];
  $_SESSION["modifier_jeune_nom"] = $_POST["nom"];
  $_SESSION["modifier_jeune_prenom"] = $_POST["prenom"];
  $_SESSION["modifier_jeune_telephone"] = $_POST["telephone"];
  $_SESSION["modifier_jeune_email"] = $_POST["email"];
  $_SESSION["modifier_jeune_adresse"] = $_POST["adresse"];
  $_SESSION["modifier_jeune_ville"] = $_POST["ville"];
  $_SESSION["modifier_jeune_code_postal"] = $_POST["code_postal"];

  header("Location: ".$url."/administrateur/jeune-modification");
}

if(isset($_POST['suprimmer'])){
  $jeuneDAO->suprimmer($_POST["id"]);

  header("Location: ".$url."/administrateur/tableau/jeune");
}

$engine->render("administrateurTableauJeune.html");
?>