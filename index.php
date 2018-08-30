<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case "/ppe2":
        include("app/controlleurs/AccueilControlleur.php");
        break;

    default:
        require("app/controlleurs/404Controlleur.php");
        break;
}
?>