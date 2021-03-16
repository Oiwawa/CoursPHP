<?php

function plusGrandDiviseur($a, $b) {
    $reste = 0;
while($a % $b != 0) {
    $a % $b = $reste;
    $a = $b;
    $b = $reste;

}
echo 'test'. $reste;
}

plusGrandDiviseur(100, 45);

