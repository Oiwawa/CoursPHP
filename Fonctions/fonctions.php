<?php
//Par valeur
function addition($parametre) {
    return $parametre = $parametre + 1;
}
//Par référence
function addition2(&$parametre) {
    return $parametre = $parametre + 1;
}
$parametre = 40;
$resultat = addition($parametre);
var_dump($parametre);

$resultat = addition2($parametre);
var_dump($parametre);

function diviser($premier, $deuxieme = 2) {
    return $premier / $deuxieme;
}
var_dump(diviser(25));
