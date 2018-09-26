<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/candidatureDAO.php");
require_once("dao/class/offreDAO.php");

$partenaire_id = $_SESSION["partenaire_id"];

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$offres = $offreDAO->lister_par_partenaire($partenaire_id);
$nombre_de_candidatures_par_partenaires = $candidatureDAO->nombre_de_candidatures_par_partenaires($partenaire_id);
$nombre_d_offres = $offreDAO->nombre_d_offres_par_partenaires($partenaire_id);

$offre = "";

$url = $engine->url();
$engine->deconnexion();
$engine->partenaire_session_check();

$engine->assign("titre", "Menu Partenaire");
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nombre de candidatures", $nombre_de_candidatures_par_partenaires);
$engine->assign("nombre d'offres", $nombre_d_offres);

while($resultat = $offres->fetch()){
  $offre .= "<tr>
              <td>".$resultat["formation_nom"]."</td>
              <td>".$resultat["offre_nom"]."</td>
              <td>".$resultat["partenaire_nom"]."</td>
              <td>".$resultat["offre_debut"]."</td>
              <td>".$resultat["offre_fin"]."</td>
              <td>".$resultat["offre_creation"]."</td>
              <form method=\"POST\"> 
                <input type=\"hidden\" name=\"offre_id\" value=".$resultat["offre_id"].">
                <input type=\"hidden\" name=\"formation_id\" value=".$resultat["formation_id"].">
                <input type=\"hidden\" name=\"offre_nom\" value=".$resultat["offre_nom"].">
                <input type=\"hidden\" name=\"partenaire_nom\" value=".$resultat["partenaire_nom"].">
                <input type=\"hidden\" name=\"offre_description\" value=".$resultat["offre_description"].">
                <input type=\"hidden\" name=\"offre_debut\" value=".$resultat["offre_debut"].">
                <input type=\"hidden\" name=\"offre_fin\" value=".$resultat["offre_fin"].">
                <input type=\"hidden\" name=\"offre_creation\" value=".$resultat["offre_creation"].">
                <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"modifier\" value=\"Modifier\"></td>
                <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"suprimmer\" value=\"Suprimmer\"></td>
              </form>
            </tr>";
}

$engine->assign("tableau des offres", $offre);

if(isset($_POST["modifier"])){
  $_SESSION["modifier_offre_id"] = $_POST["offre_id"];
  $_SESSION["modifier_formation_id"] = $_POST["formation_id"];
  $_SESSION["modifier_formation_nom"] = $_POST["formation_nom"];
  $_SESSION["modifier_offre_nom"] = $_POST["offre_nom"];
  $_SESSION["modifier_offre_description"] = $_POST["offre_description"];
  $_SESSION["modifier_offre_debut"] = $_POST["offre_debut"];
  $_SESSION["modifier_offre_fin"] = $_POST["offre_fin"];
  $_SESSION["modifier_offre_creation"] = $_POST["offre_creation"];

  header("Location: ".$url."/partenaire/offre-modification");
}

if(isset($_POST["suprimmer"])){
  $offreDAO->suprimmer($_POST["offre_id"]);
  header("Location: ".$url."/partenaire/tableau/offre");
}

$engine->render("partenairetableauoffre.html");
?>