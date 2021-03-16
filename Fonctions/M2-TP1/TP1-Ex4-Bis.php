<?php
$mails = ['jean@eni.fr', 'fred@linux.net', 'lea@renault.fr', 'caroline@eni.fr', 'contact@eni-ecole.fr',
    'valentina@ferrari.it', 'melanie@eni-ecole.fr', 'philippe@eni.fr', 'typhaine@belfort.fr', 'louis@leparisien.fr'];
$tabDesCompteurs= [];

foreach ($mails as $mail) {
    $fqdn = explode('@', $mail)[1];
    if(isset($tabDesCompteurs[$fqdn])) {
        $tabDesCompteurs[$fqdn]++;
    } else {
        $tabDesCompteurs[$fqdn] = 1;
    }
}
    var_dump($tabDesCompteurs);
