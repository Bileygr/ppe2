<?php
session_start();
require_once("framework/engine.php");
require_once("dao/class/candidatureDAO.php");
require_once("dao/class/offreDAO.php");

$partenaire_id = $_SESSION["partenaire_id"];

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$candidatures = $candidatureDAO->liste_par_partenaires($partenaire_id);
$nombre_de_candidatures_par_partenaires = $candidatureDAO->nombre_de_candidatures_par_partenaires($partenaire_id);
$nombre_d_offres = $offreDAO->nombre_d_offres_par_partenaires($partenaire_id);

$candidature = "";
$status = "";

$url = $engine->url();
$engine->deconnexion();
$engine->partenaire_session_check();

$engine->assign("titre", "Menu Partenaire");
$engine->assign("nom", $_SESSION["partenaire_nom"]);
$engine->assign("nombre de candidatures", $nombre_de_candidatures_par_partenaires);
$engine->assign("nombre d'offres", $nombre_d_offres);

while($resultat = $candidatures->fetch()){
  if($resultat["status"] == 1){
    $status = "<td>Accepté</td>";
  }elseif($resultat["status"] == 0){
    $status = "<td>Refusé</td>";
  }

  $candidature .= "<tr>
                    <td>".$resultat["formation_nom"]."</td>
                    <td>".$resultat["offre_nom"]."</td>
                    <td>".$resultat["partenaire_nom"]."</td>
                    <td>".$resultat["offre_debut"]."</td>
                    <td>".$resultat["offre_fin"]."</td>
                    <td>".$resultat["offre_creation"]."</td>
                    ".$status."
                    <form method=\"POST\"> 
                      <input type=\"hidden\" name=\"candidature_id\" value=".$resultat["candidature_id"].">
                      <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"accepter\" value=\"Accepter\"></td>
                      <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"refuser\" value=\"Refuser\"></td>
                    </form>
                  </tr>";
}

$engine->assign("tableau des candidatures", $candidature);

if(isset($_POST["accepter"])){
  $candidatureDAO->accepter($_POST["candidature_id"]);

  header("Location: ".$url."/partenaire/tableau/candidature");
}

if(isset($_POST["refuser"])){
  $candidatureDAO->refuser($_POST["candidature_id"]);
  
  header("Location: ".$url."/partenaire/tableau/candidature");
}

$engine->render("partenaireTableauCandidature.html");
?>