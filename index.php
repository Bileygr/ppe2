<?php
include('gabarit/noyau/moteur.php');
$template_engine_keita = new Moteur();
$template_engine_keita->assigner('titre', 'PPE2');
$template_engine_keita->render('index2.html');
?>