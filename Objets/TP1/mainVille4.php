<?php

require_once "./Ville.class.php";
//Partie 4

$carcasonne = new Ville("Carcasonne", "inconnu");
$agen = new Ville("Agen", "inconnu");
$montpellier = new Ville("Montpellier", "inconnu");

echo Ville::getVilleNomLePlusLong();
