<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/ppe2":
        include("controller/index.php");
        break;

    case "/ppe2/administrateur/administrateur-modification":
        include("controller/administrateurModification.php");
        break;

    case "/ppe2/administrateur/connexion":
    	include("controller/administrateurConnexion.php");
    	break;

    case "/ppe2/administrateur/inscription":
        include("controller/administrateurInscription.php");
        break;

    case "/ppe2/administrateur/jeune-modification":
        include("controller/administrateurJeuneModification.php");
        break;

    case "/ppe2/administrateur/jeune-inscription":
        include("controller/administrateurJeuneInscription.php");
        break;

    case "/ppe2/administrateur/modifier-mes-informations":
        include("controller/administrateurModifierMesInfomations.php");
        break;

    case "/ppe2/administrateur/offre-modification":
        include("controller/administrateurOffreModification.php");
        break;

    case "/ppe2/administrateur/partenaire-modification":
        include("controller/administrateurPartenaireModification.php");
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

    case "/ppe2/deconnexion":
        include("controller/deconnexion.php");
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

    case "/ppe2/partenaire/ajout-offre":
        include("controller/partenaireAjoutOffre.php");
        break;

    case "/ppe2/partenaire/connexion":
    	include("controller/partenaireconnexion.php");
    	break;

   case "/ppe2/partenaire/offre-modification":
        include("controller/partenaireoffremodification.php");
        break;

    case "/ppe2/partenaire/inscription":
    	include("controller/partenaireinscription.php");
    	break;

    case "/ppe2/partenaire/modifier-mes-informations":
        include("controller/partenairemodifiermesinformations.php");
        break;

    case "/ppe2/partenaire/offre-ajout":
        include("controller/offreajout.php");
        break;

    case "/ppe2/partenaire/offre-modification":
        include("controller/partenaireoffremodification.php");
        break;

    case "/ppe2/partenaire/profil":
    	include("controller/partenairestatistique.php");
    	break;

    case "/ppe2/partenaire/tableau/offre":
        include("controller/partenairetableauoffre.php");
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

    case "/ppe2/test/maps":
        include("test/maps.php");
        break;

    default:
        require("controller/404.php");
        break;
}
?>