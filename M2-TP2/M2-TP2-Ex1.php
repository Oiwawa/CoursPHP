<?php
const MIN_VALEUR = 0;
const MAX_VALEUR = 1000;
function randomiser($valeur)  {
    if($valeur > MAX_VALEUR || $valeur < MIN_VALEUR ) {
        echo 'La valeur indiquée doit être supérieure à '.MIN_VALEUR.' et inférieur à '. MAX_VALEUR .'.';
    } else {
        $nbrAlea = 0;
        $compteur = 0;

        do {
        $nbrAlea = rand(MIN_VALEUR , MAX_VALEUR);
        $compteur+=1;
        } while ($nbrAlea != $valeur);

        echo $nbrAlea .' a été tiré au sort après '. $compteur .' essais. Cela correspond bien à la valeur de départ: '.$valeur;
    }


}
randomiser(999);

