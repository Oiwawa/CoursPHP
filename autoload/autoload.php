<?php
function chargementAuto($nomDeLaClasse) {
    require_once './BO/' . $nomDeLaClasse.'.php';
}

spl_autoload_register('chargementAuto');