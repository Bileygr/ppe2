<?php
session_start();
require_once("app/models/Engine.php");
require_once("app/models/dao/AdministrateurDAO.class.php");
require_once("app/models/dao/JeuneDAO.class.php");
require_once("app/models/dao/OffreDAO.class.php");
require_once("app/models/dao/PartenaireDAO.class.php");

$super_administrateur_status = $_SESSION["administrateur_super"];

$engine = new Engine();
$administrateurDAO = new AdministrateurDAO();
$jeuneDAO = new JeuneDAO();
$offreDAO = new OffreDAO();
$partenaireDAO = new PartenaireDAO();

$administrateurs = $administrateurDAO->lister();
$nombre_d_administrateurs = $administrateurDAO->nombre_d_administrateurs();
$nombre_de_jeune = $jeuneDAO->nombre_de_jeunes();
$nombre_d_offres = $offreDAO->nombre_d_offres();
$nombre_de_partenaires = $partenaireDAO->nombre_de_partenaires();

$administrateur = "";
$super = "";

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

if($super_administrateur_status == 1){
  $engine->assign("bloc ajout administrateur", "<input class=\"btn btn-secondary my-2 my-sm-0 float-right\" type=\"submit\" onclick=\"location.href='{{ url }}/administrateur/inscription';\" value=\"Ajouter\">");
  $engine->assign("bloc modifier et supprimer administrateur", "<th scope=\"col\">Modifier</th> <th scope=\"col\">Suprimmer</th>");
}elseif($super_administrateur_status == 0){
  $engine->assign("bloc ajout administrateur", "");
  $engine->assign("bloc modifier et supprimer administrateur", "");
}

while($resultat = $administrateurs->fetch()){
  if($resultat["administrateur_super"] == 1){
    $super = "<td>Oui</td>";
  }elseif($resultat["administrateur_super"] == 0){
    $super = "<td>Non</td>";
  }

  if($super_administrateur_status == 1){
    $session_administrateur = '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier" value="Modifier"></td> 
                      <td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer" value="Suprimmer"></td>';
  }elseif($super_administrateur_status == 0){
    $session_administrateur = "";
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
                          <input type='hidden' name=\"id\" value=".$resultat["administrateur_id"].">
                          <input type='hidden' name=\"nom\" value=".$resultat["administrateur_nom"].">
                          <input type='hidden' name=\"prenom\" value=".$resultat["administrateur_prenom"].">
                          <input type='hidden' name=\"super_administrateur_status\" value=".$resultat["administrateur_super"].">
                          <input type='hidden' name=\"telephone\" value=".$resultat["administrateur_telephone"].">
                          <input type='hidden' name=\"email\" value=".$resultat["administrateur_email"].">
                          <input type='hidden' name=\"adresse\" value=".$resultat["administrateur_adresse"].">
                          <input type='hidden' name=\"ville\" value=".$resultat["administrateur_ville"].">
                          <input type='hidden' name=\"code_postal\" value=".$resultat["administrateur_code_postal"].">"
                          .$session_administrateur."
                        </form>
                      </tr>";
}

$engine->assign("tableau d'administrateurs", $administrateur);

if(isset($_POST['modifier'])){
  $_SESSION["modifier_administrateur_id"] = $_POST["id"];
  $_SESSION["modifier_administrateur_nom"] = $_POST["nom"];
  $_SESSION["modifier_administrateur_prenom"] = $_POST["prenom"];
  $_SESSION["modifier_administrateur_super"] = $_POST["super_administrateur_status"];
  $_SESSION["modifier_administrateur_telephone"] = $_POST["telephone"];
  $_SESSION["modifier_administrateur_email"] = $_POST["email"];
  $_SESSION["modifier_administrateur_adresse"] = $_POST["adresse"];
  $_SESSION["modifier_administrateur_ville"] = $_POST["ville"];
  $_SESSION["modifier_administrateur_code_postal"] = $_POST["code_postal"];
  header("Location: ".$url."/administrateur/administrateur/modification");
}

if(isset($_POST['suprimmer'])){
  $administrateurDAO->suprimmer($_POST['id']);
  header("Location: ".$url."/administrateur/gestion/administrateur");
}

$engine->render("administrateurgestionadministrateur.html");
?>