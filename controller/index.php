<?php
session_start();
require_once('framework/engine.php');
require_once('dao/class/offreDAO.php');

$engine = new Engine();
$offreDAO = new OffreDAO();

$engine->deconnexion();
$engine->assign("titre", "Accueil");

if(!isset($_SESSION["administrateur_id"])){
	$engine->assign("bloc administrateur", '<a class="dropdown-item" href="{{ url }}/administrateur/connexion">Connexion</a>');
}elseif(isset($_SESSION["administrateur_id"])){
	$engine->assign("bloc administrateur", '<a class="dropdown-item" href="{{ url }}/administrateur/profil">Profil</a>');
}

if(!isset($_SESSION["partenaire_id"])){
	$engine->assign("bloc partenaire", '<a class="dropdown-item" href="{{ url }}/partenaire/connexion">Connexion</a>
              <a class="dropdown-item" href="{{ url }}/partenaire/inscription">Inscription</a>');
}elseif(isset($_SESSION["partenaire_id"])){
	$engine->assign("bloc partenaire", '<a class="dropdown-item" href="{{ url }}/partenaire/profil">Profil</a>');
}

if(!isset($_SESSION["jeune_id"])){
	$engine->assign("bloc jeune", '<a class="dropdown-item" href="{{ url }}/jeune/connexion">Connexion</a>
              <a class="dropdown-item" href="{{ url }}/jeune/inscription">Inscription</a>');
	$engine->assign("bloc colonne accepter", '');
}elseif(isset($_SESSION["jeune_id"])){
	$engine->assign("bloc colonne accepter", '<th scope="col">Accepter</th>');
	$engine->assign("bloc jeune", '<a class="dropdown-item" href="{{ url }}/jeune/profil">Profil</a>');
	$engine->assign("jeune id", $_SESSION["jeune_id"]);
}

$engine->render("index.html");
?>