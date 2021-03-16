<?php
$cpt[] = [0,0,0,0,0,0];
$tab[] = 0;
$i=0;
$mails = ['jean@eni.fr', 'fred@linux.net', 'lea@renault.fr', 'caroline@eni.fr', 'contact@eni-ecole.fr',
    'valentina@ferrari.it', 'melanie@eni-ecole.fr', 'philippe@eni.fr', 'typhaine@belfort.fr', 'louis@leparisien.fr'];

//Parcourir le tableau
foreach ($mails as $mail) {
    //exploser chaque adresse mail pour récupérer le FQDN (après @)
    $fqdn[] = explode('@',$mail)[1];

    //Incrémenter un compteur en fonction du FQDN
switch ($fqdn) {
    case 'eni.fr':
        $cpt[0] +=1;
        break;
    case 'linux.net':
        $cpt[1] +=1;
        break;
    case 'renault.fr' :
        $cpt[2] +=1;
        break;
    case 'eni-ecole.fr':
        $cpt[3] +=1;
        break;
    case 'ferrari.it':
        $cpt[4] +=1;
        break;
    case 'belfort.fr':
        $cpt[5] +=1;
        break;
    case 'leparisien.fr':
        $cpt[6] +=1;
        break;
}
}
for ($i=0; $i < 7; $i++) {
    var_dump($cpt[$i]);
}
