<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/ppe2/":
        include("controller/index.php");
        break;

    case "/ppe2/administrateur/connexion":
    	include("controller/administrateurconnexion.php");
    	break;

    case "/ppe2/administrateur/inscription":
    	include("controller/administrateurinscription.php");
    	break;

    case "/ppe2/administrateur/modifier-mes-informations":
        include("controller/administrateurmodifiermesinfomations.php");
        break;

    case "/ppe2/administrateur/profil":
    	include("controller/administrateurstatistique.php");
        break;

    case "/ppe2/administrateur/statistique":
        include("controller/administrateurstatistique.php");
        break;

    case "/ppe2/administrateur/tableau/administrateur":
        include("controller/administrateurtableauadministrateur.php");
        break;

    case "/ppe2/administrateur/tableau/jeune":
        include("controller/administrateurtableaujeune.php");
        break;

    case "/ppe2/administrateur/tableau/offre":
        include("controller/administrateurtableauoffre.php");
        break;

    case "/ppe2/administrateur/tableau/partenaire":
        include("controller/administrateurtableaupartenaire.php");
        break;

    case "/ppe2/administrateur/administrateur-modification":
        include("controller/administrateurmodification.php");
        break;

    case "/ppe2/administrateur/jeune-modification":
        include("controller/jeunemodification.php");
        break;

    case "/ppe2/administrateur/partenaire-modification":
        include("controller/partenairemodification.php");
        break;

    case "/ppe2/jeune/connexion":
        include("controller/jeuneconnexion.php");
        break;

    case "/ppe2/jeune/inscription":
        include("controller/jeuneinscription.php");
        break;

    case "/ppe2/jeune/modifier-mes-informations":
        include("controller/jeunemodifiermesinformations.php");
        break;

    case "/ppe2/jeune/profil":
        include("controller/jeunestatistique.php");
        break;

    case "/ppe2/jeune/tableau/candidature":
        include("controller/jeunetableaucandidature.php");
        break;

    case "/ppe2/offre/ajout":
        include("controller/offreajout.php");
        break;

    case "/ppe2/partenaire/connexion":
    	include("controller/partenaireconnexion.php");
    	break;

   case "/ppe2/offre/offre-modification":
        include("controller/offremodification.php");
        break;

    case "/ppe2/partenaire/inscription":
    	include("controller/partenaireinscription.php");
    	break;

    case "/ppe2/partenaire/modifier-mes-informations":
        include("controller/partenairemodifiermesinformations.php");
        break;

    case "/ppe2/partenaire/profil":
    	include("controller/partenairestatistique.php");
    	break;

    case "/ppe2/partenaire/offre":
        include("controller/partenairetableauoffre.php");
        break;

    case "/ppe2/partenaire/offre-ajout":
        include("controller/offreajout.php");
        break;

    case "/ppe2/partenaire/offre-modification":
        include("controller/offremodification.php");
        break;

    case "/ppe2/deconnexion":
    	include("controller/deconnexion.php");
    	break;

    case "/ppe2/test/":
        include("test/index.php");
        break;

    case "/ppe2/test/hash/generateur":
        include("test/generateurdehash.php");
        break;

    case "/ppe2/test/hash/testeur":
        include("test/testeurdehash.php");
        break;

    default:
        require("controller/404.php");
        break;
}
?>