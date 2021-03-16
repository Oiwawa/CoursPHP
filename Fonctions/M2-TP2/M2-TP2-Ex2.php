<?php
function decroissant2($val1, $val2) {
    $tab=[$val1, $val2];
    rsort($tab,  $test = SORT_REGULAR);
    echo $tab[0] .' - '. $tab[1] ."\n";
}

decroissant2(546899954, 9999999);

//CORRECTION

function tri($param1, $param2) {
    $paramMax = max($param1, $param2);
    $paramMin = min($param1, $param2);
    return "Dans l'ordre :  $paramMax $paramMin \n";
}
echo tri(5,7);

function tri3($param1, $param2) {
    if($param1 > $param2) {
        return "$param1 - $param2";
    } else {
        return "$param2 -  $param1";
    }
}
echo tri3(984, 69516);