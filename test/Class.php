<?php
require_once("app/models/base/Administrateur.class.php");

$administrateur = new Administrateur(1, 0, "Keita", "Cheik-Siramakan", "$2y$10\$NM67pBezv.26iW44brSIyuJVhwSIf3u9kEq61TIX/YQ02iPKYUAyO", "cheiksiramakankeita@gmail.com", "06 05 55 78 02", "57 Boulevard de l'Yerres", "Evry", 91000, "21/09/2018", "21/09/2018");

$administrateur->toString();
?>