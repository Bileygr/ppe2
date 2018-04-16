<?php
include('template/core/moteur.php');
$template_engine_keita = new Moteur();
$template_engine_keita->assigner('titre', 'PPE2');
$template_engine_keita->assigner('titre_principale', 'PPE2');
$template_engine_keita->assigner('lien_1', 'http://localhost/ppe2/test/test.html');
$template_engine_keita->assigner('lien_nom_1', 'Accueil');
$template_engine_keita->assigner('titre_de_la_page', 'Bienvenue!');
$template_engine_keita->assigner('contenu', 'Vous trouverez des offres ici!');
$template_engine_keita->assigner('lien', 'http://localhost/ppe2/test/test.html');
$template_engine_keita->assigner('bouton_nom', 'Continuer');
$template_engine_keita->render('index.html');
?>