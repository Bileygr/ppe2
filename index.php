<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/":
        include("app/controllers/IndexController.php");
	break;
   
    // Administrateur
    case "/administrateur/connexion":
	include("app/controllers/AdministrateurConnexionController.php");
	break;
 
   case "/administrateur/menu/accueil":
	include("app/controllers/AdministrateurMenuAccueilController.php");
	break;

   // Partenaire
    case "/partenaire/connexion":
	include("app/controllers/PartenaireConnexionController.php");
	break;

    case "/partenaire/menu/accueil":
	include("app/controllers/PartenaireMenuAccueilController.php");
    	break;

    // Jeune
    case "/jeune/connexion":
	include("app/controllers/JeuneConnexionController.php");
	break;

    case "/jeune/menu/accueil": 
	include("app/controllers/JeuneMenuAccueilController.php");
	break;
  
    // Test
    case "/test/connexion":
	include("test/ConnexionTest.php");
	break;
	
    default:
        require("app/controllers/ErreurDeControlleur.php");
        break;
}
?>
