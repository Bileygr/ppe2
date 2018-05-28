<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

//var_dump($request_uri);

switch ($request_uri[0]) {
    case "/ppe2/":
        include("controller/index.php");
        break;

    default:
        require("controller/404.php");
        break;
}
?>