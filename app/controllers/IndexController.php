<?php
session_start();
require_once("app/models/Engine.php");
require_once("app/models/dao/CandidatureDAO.class.php");
require_once("app/models/dao/OffreDAO.class.php");

$engine = new Engine();
$candidatureDAO = new CandidatureDAO();
$offreDAO = new OffreDAO();

$offres = $offreDAO->lister();

$candidature = "";
$offre = "";

$engine->deconnexion();
$engine->assign("titre", "Accueil");

if(!isset($_SESSION["administrateur_id"])){
	$engine->assign("bloc administrateur", "<a class=\"dropdown-item\" href=\"{{ url }}/administrateur/connexion\">Connexion</a>");
}elseif(isset($_SESSION["administrateur_id"])){
	$engine->assign("bloc administrateur", "<a class=\"dropdown-item\" href=\"{{ url }}/administrateur/camemberts\">Profil</a>");
}

if(!isset($_SESSION["partenaire_id"])){
	$engine->assign("bloc partenaire", "<a class=\"dropdown-item\" href=\"{{ url }}/partenaire/connexion\">Connexion</a>
              <a class=\"dropdown-item\" href=\"{{ url }}/partenaire/inscription\">Inscription</a>");
}elseif(isset($_SESSION["partenaire_id"])){
	$engine->assign("bloc partenaire", "<a class=\"dropdown-item\" href=\"{{ url }}/partenaire/camemberts\">Profil</a>");
}

if(!isset($_SESSION["jeune_id"])){
	$engine->assign("bloc jeune", "<a class=\"dropdown-item\" href=\"{{ url }}/jeune/connexion\">Connexion</a>
              <a class=\"dropdown-item\" href=\"{{ url }}/jeune/inscription\">Inscription</a>");
	$engine->assign("bloc colonne candidature", "");
}elseif(isset($_SESSION["jeune_id"])){
	$engine->assign("bloc colonne candidature", "<th scope=\"col\">Candidature</th>");
	$engine->assign("bloc jeune", "<a class=\"dropdown-item\" href=\"{{ url }}/jeune/camemberts\">Profil</a>");
	$engine->assign("jeune id", $_SESSION["jeune_id"]);
}

while($resultat = $offres->fetch()){
    if(isset($_SESSION["jeune_id"])){
        $candidature = "<td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"deposer\" value=\"Déposer\"></td>";
    }elseif(!isset($_SESSION["jeune_id"])){
        $candidature = "";
    }

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
                        <input type=\"hidden\" name=\"partenaire_id\" value=".$resultat["partenaire_id"].">
                        <input type=\"hidden\" name=\"partenaire_nom\" value=".$resultat["partenaire_nom"].">
                        <input type=\"hidden\" name=\"offre_description\" value=".$resultat["offre_description"].">
                        <input type=\"hidden\" name=\"offre_debut\" value=".$resultat["offre_debut"].">
                        <input type=\"hidden\" name=\"offre_fin\" value=".$resultat["offre_fin"].">
                        <input type=\"hidden\" name=\"offre_creation\" value=".$resultat["offre_creation"].">
                        <td><input class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" name=\"modifier\" value=\"Description\"></td>
                        ".$candidature."
                    </form>
              </tr>";
}

$engine->assign("tableau des offres", $offre);

if(isset($_POST["deposer"])){
    $candidature = new Candidature(null, $_POST["offre_id"], $_POST["formation_id"], $_SESSION["jeune_id"], $_POST["partenaire_id"], null, null);
    $candidatureDAO->ajouter($candidature);

    header("Location: ".$url);
}

$engine->render("index.html");
?>