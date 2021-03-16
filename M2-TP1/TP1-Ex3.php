<?php

$tab = ["Morane" => ["prenom"=>"Bob","ville" => "Nantes", "age" => 67 ]];

foreach ($tab as $valeurs) {
    foreach ($valeurs as $cle => $v) {

    echo "$cle - $v \n";
    }
}