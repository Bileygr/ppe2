<?php
require_once("app/models/engine.php");

$engine = new Engine();
$engine->render("404.html");
?>