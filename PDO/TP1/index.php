<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1 BDD</title>
</head>
<body>
<?php
require_once './DAL/ModelesDAO.php';
$modelesDAO = new ModelesDAO();
$modeles = $modelesDAO->select();
?>
<table style="border: 1px solid black">
    <thead>
    <th>
        Identifiant
    </th>
    <th>
        Marque
    </th>
    <th>
        Modèle
    </th>
    <th>
        Carburant
    </th>

    </thead>
    <tbody>
    <tr>
        <?php
        foreach ($modeles as $modele)
                echo "<td>".$modele['id_modele'] ."</td>";
                echo "<td>".$modele['marque'] ."</td>";
                echo "<td>".$modele['modele'] ."</td>";
                echo "<td>".$modele['carburant'] ."</td>";
        ?>


    </tr>
    </tbody>

</table>

</body>
</html>
