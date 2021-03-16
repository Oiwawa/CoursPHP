<?php
require_once "./VilleSansConstructor.class.php";
require_once "./VilleAvecConstuctor.php";
//Partie 1
$paris = new Ville();
$paris->setNom("Paris");
$paris->setDepartement("75");
echo $paris->afficher();

$biarritz = new Ville();
$biarritz->setNom("Biarritz");
$biarritz->setDepartement("64");

//Partie 2

$nantes = new Ville("Nantes", "44");
$leMans = new Ville("Le Mans", "72");

echo $nantes->afficher();
echo $leMans->afficher();

