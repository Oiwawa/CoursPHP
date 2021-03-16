<?php

require_once "./Ville.class.php";
//Partie 4

$carcasonne = new Ville("Carcasonne", "inconnu");
echo $carcasonne->getVilleNomLePlusLong();

$agen = new Ville("Agen", "inconnu");
echo $agen->nomVillePlusLong();

$montpellier = new Ville("Montpellier", "inconnu");
echo $montpellier->getVilleNomLePlusLong();
