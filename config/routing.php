<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/ppe2":
        include("app/controllers/IndexController.php");
		break;
   
    case "/ppe2/administrateur/connexion":
		include("app/controllers/AdministrateurConnexionController.php");
		break;

    case "/ppe2/administrateur/modifier-mes-informations":
		include("app/controllers/AdministrateurModifierMesInformationsController.php");
		break;
 
    case "/ppe2/administrateur/camemberts":
		include("app/controllers/AdministrateurCamembertsController.php");
		break;

    case "/ppe2/administrateur/gestion/administrateur":
		include("app/controllers/AdministrateurGestionAdministrateurController.php");
    	break;

    case "/ppe2/administrateur/gestion/administrateur/inscription":
		include("app/controllers/AdministrateurGestionAdministrateurInscriptionController.php");
		break;

    case "/ppe2/administrateur/gestion/administrateur/modification":
		include("app/controllers/AdministrateurGestionAdministrateurModificationController.php");
		break;

    case "/ppe/administrateur/gestion/administrateur/supression":
		include("app/controllers/AdministrateurMenuSuppressionAdministrateurController.php");
		break;

    case "/ppe2/administrateur/gestion/partenaire":
		include("app/controllers/AdministrateurGestionPartenaireController.php");
		break;

    case "/ppe2/administrateur/gestion/partenaire/modification":
		include("app/controllers/AdministrateurGestionPartenaireModificationController.php");
		break;

    case "/ppe2/administrateur/gestion/jeune":
		include("app/controllers/AdministrateurGestionJeuneController.php");
		break;

    case "/ppe2/administrateur/gestion/jeune/modification":
		include("app/controllers/AdministrateurGestionJeuneModificationController.php");
		break;
    case "/ppe2/administrateur/gestion/offre":
		include("app/controllers/AdministrateurGestionOffreController.php");
		break;

    case "/ppe2/administrateur/gestion/offre/modification":
    		include("app/controllers/AdministrateurGestionOffreModificationController.php");
		break;
	
    case "/ppe2/partenaire/connexion":
		include("app/controllers/PartenaireConnexionController.php");
        break;

    case "/ppe2/partenaire/inscription":
		include("app/controllers/PartenaireInscriptionController.php");
		break; 
 
    case "/ppe2/partenaire/supprimmer":
		include("app/controllers/PartenaireSupressionController.php");
		break;    

    case "/ppe2/partenaire/camemberts":
		include("app/controllers/PartenaireCamembertsController.php");
		break;	
    
    case "/ppe2/partenaire/modifier-mes-informations":
		include("app/controllers/PartenaireModifierMesInformationsController.php");
		break;

    case "/ppe2/partenaire/gestion/candidature":
		include("app/controllers/PartenaireGestionCandidatureController.php");
		break;
    
    case "/ppe2/partenaire/gestion/offre":
		include("app/controllers/PartenaireGestionOffreController.php");
		break;

    case "/ppe2/partenaire/gestion/offre/ajout":
		include("app/controllers/PartenaireGestionOffreAjoutController.php");
		break;

    case "/ppe2/partenaire/gestion/offre/modification":
		include("app/controllers/PartenaireGestionOffreModificationController.php");
		break;

    case "/ppe2/jeune/connexion":
		include("app/controllers/JeuneConnexionController.php");
		break;

    case "/ppe2/jeune/inscription":
		include("app/controllers/JeuneInscriptionController.php");
		break;
    
    case "/ppe2/jeune/camemberts":
		include("app/controllers/JeuneCamembertsController.php");
    		break;
    
    case "/ppe2/jeune/gestion/candidature":
		include("app/controllers/JeuneGestionCandidatureController.php");
		break;

    case "/ppe2/jeune/modifier-mes-informations":
    	include("app/controllers/JeuneModifierMesInformationsController.php");
    	break;

    case "/ppe2/jeune/supprimmer":
		include("app/controllers/JeuneSuppressionController.php");
		break;

    case "/ppe/offre/modification":
		include("app/controllers/OffreModificationController.php");
		break;

    case "/ppe2/test/class":
		include("test/Class.php");
		break;

    case "/ppe2/test/db/connexion":
		include("test/DBConnection.php");
		break;

    case "/ppe2/partenaire/menu/accueil":
		include("app/controllers/PartenaireMenuAccueilController.php");
    	break;

    case "/ppe2/jeune/connexion":
		include("app/controllers/JeuneConnexionController.php");
		break;

    case "/ppe2/jeune/menu/accueil": 
		include("app/controllers/JeuneMenuAccueilController.php");
		break;
  
    case "/ppe2/test/connexion":
		include("test/ConnexionTest.php");
		break;
	
    default:
        require("app/controllers/MissingController.php");
        break;
}
?>
