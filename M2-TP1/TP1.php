
<?php
$tableauNom = ['Delpon'];
$tableauInfos[] = ['Thierry','Touaré', 28];
$tableauNom['Delpon'] = $tableauInfos;
var_dump($tableauNom);
// Correction EX1
$deRiv[] = "Geralt";
$deRiv[] = "Riv";
$deRiv[] = 114;
//Deuxieme tab
$morane[] ="Bob";
$morane[] ="Nantes";
$morane[] =75;
$personnes["De riv"] = $deRiv;
$personnes["Morane"] = $morane;
var_dump($personnes);


//Exo2
$tableauEx2Nom['Marech'] = ['Lulu'=>'Lulu', 'Marech','Nantes'=>44000,'35'=>35];
var_dump($tableauEx2Nom);
//Correction
$caliendo = ["Caliendo"=>["prenom" => "Julien", "ville" => "Brest", "age" => 36]];
$tab ["Caliendo"] = $caliendo;
var_dump($tab);

//Exo3

$tableauEx3['Dupont'] = ['Gerard', 'Paris', 67];
$tableauEx3['Badin'] = ['Aurelie', 'Nantes', 3];
foreach ($tableauEx3 as $values) {
    var_dump($values);
}