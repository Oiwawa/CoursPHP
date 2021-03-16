<?php
require_once "./VilleSansConstructor.class.php";
require_once "./VilleAvecConstuctor.php";

//Partie 1
$paris = new VilleSansConstuctor();
$paris->setNom("Paris");
$paris->setDepartement("75");
echo $paris->afficher();

$biarritz = new VilleSansConstuctor();
$biarritz->setNom("Biarritz");
$biarritz->setDepartement("64");

//Partie 2

$nantes = new VilleAvecConstuctor("Nantes", "44");
$leMans = new VilleAvecConstuctor("Le Mans", "72");

echo $nantes->afficher();
echo $leMans->afficher();

//Partie 3
$bonnetable = new VilleAvecRegion("Bonnétable","72","Pays de la Loire");
echo $bonnetable->afficher();