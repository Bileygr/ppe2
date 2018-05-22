<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

var_dump($request_uri);

switch ($request_uri[0]) {
    case "/ppe2/":
        include("controller/index.php");
        break;
    
    case "/ppe2/administrateur-connexion":
    	include("controller/administrateurconnexion.php");
    	break;

    case "/ppe2/administrateur-inscription":
    	require "controller/administrateurinscription.php";
    	break;

    case "/ppe2/partenaire-connexion":
        require "controller/partenaireconnexion.php";
        break;

    case "/ppe2/partenaire-inscription":
        require "controller/partenaireinscription.php";
        break;

    default:
        require "controller/404.php";
        break;
}
?>