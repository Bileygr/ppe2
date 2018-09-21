<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/":
        include("app/controllers/IndexController.php");
        break;
    
    case "/administrateur/connexion":
	include("app/controllers/AdministrateurConnexionontroller.php");
	break;

    default:
        require("app/controllers/404Controlleur.php");
        break;
}
?>
