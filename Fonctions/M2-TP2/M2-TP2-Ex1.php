<?php
const MIN_VALEUR = 0;
const MAX_VALEUR = 1000;
function randomiser($valeur)  {
    if($valeur > MAX_VALEUR || $valeur < MIN_VALEUR ) {
        echo 'La valeur indiquée doit être supérieure à '.MIN_VALEUR.' et inférieur à '. MAX_VALEUR .'.';
    } else {
        $compteur = 0;
        do {
        $nbrAlea = rand(MIN_VALEUR , MAX_VALEUR);
        $compteur++;
        } while ($nbrAlea != $valeur);
       return $compteur;
    }
}
echo randomiser(999);

//CORRECTION

function nbEssai(int $param1) : int {
    $cpt = 0;
    while (rand(0, 999) != $param1) {
        $cpt++;
    }
    return $cpt;
}

nbEssai(54);