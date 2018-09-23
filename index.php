<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/ppe2":
        include("app/controllers/IndexController.php");
        break;
    
    case "/ppe2/test/class":
	include("test/Class.php");
	break;

    case "/ppe2/test/db/connexion":
	include("test/DBConnection.php");
	break;

    default:
        require("app/controllers/MissingController.php");
        break;
}
?>
