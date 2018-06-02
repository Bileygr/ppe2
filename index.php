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

    case "/ppe2/administrateur/profil":
    	include("controller/administrateurprofil.php");
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

    case "/ppe2/partenaire/connexion":
    	include("controller/partenaireconnexion.php");
    	break;

    case "/ppe2/partenaire/inscription":
    	include("controller/partenaireinscription.php");
    	break;

    case "/ppe2/partenaire/profil":
    	include("controller/partenaireprofil.php");
    	break;

    case "/ppe2/jeune/connexion":
    	include("controller/jeuneconnexion.php");
    	break;

    case "/ppe2/jeune/inscription":
    	include("controller/jeuneinscription.php");
    	break;

    case "/ppe2/jeune/profil":
    	include("controller/jeuneprofil.php");
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