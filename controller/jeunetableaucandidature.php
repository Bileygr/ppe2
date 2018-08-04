<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/candidatureDAO.php');

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();

$candidatures = $candidatureDAO->listerParJeune($_SESSION['jeune_id']);
$nbCandidature = $candidatureDAO->nbCandidatures($_SESSION['jeune_id']);

$candidature = "";
$status = "";

$url = $engine->url();
$engine->deconnexion();
$engine->jeune_session_check();
$engine->assign("nom", $_SESSION["jeune_nom"]);
$engine->assign("prenom", $_SESSION["jeune_prenom"]);
$engine->assign("nombre de candidature", $nbCandidature);

while($resultat = $candidatures->fetch()){
  if($resultat["status"] == 1){
    $status = "<td>Oui</td>";
  }elseif($resultat["status"] == 0){
    $status = "<td>Nom</td>";
  }

  $candidature .= "<tr>
                    <td>".$resultat["formation_nom"]."</td>
                    <td>".$resultat["offre_nom"]."</td>
                    <td>".$resultat["partenaire_nom"]."</td>
                    <td>".$resultat["offre_debut"]."</td>
                    <td>".$resultat["offre_fin"]."</td>
                    <td>".$resultat["offre_creation"]."</td>
                    ".$status."
                    <form method='POST'> 
                      <input type='hidden' name='candidature_id' value=".$resultat["candidature_id"].">
                      <td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='suprimmer' value='Suprimmer'></td>
                    </form>
                  </tr>";
}

$engine->assign("tableau des candidatures", $candidature);

if(isset($_POST['suprimmer'])){
  $candidatureDAO->suprimmer($_POST['candidature_id']);
  header("Location: ".$url."/jeune/tableau/candidature");
}

$engine->render("jeunetableaucandidature.html");
?>