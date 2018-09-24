<?php
require_once("app/models/engine.php");
require_once("app/models/dao/AdministrateurDAO.class.php");

$engine = new Engine();
$engine->render("AdministrateurConnexion.html");
?>
