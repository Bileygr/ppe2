<?php
session_start();
require_once("app/models/engine.php");

$engine = new Engine();
$engine->render("index.html");
?>
