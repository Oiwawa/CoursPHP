<?php
require_once "./Voiture.class.php";
require_once './Vehicule.class.php';

$tesla = new Voiture("Rouge","4","Tesla", "3");

echo $tesla;
echo "\n";

$tesla->setModele("S");
echo $tesla;
echo "\n";

echo $tesla->getModele();
echo "\n";

$tesla->getNbRoue();
echo "\n";
