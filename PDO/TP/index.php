<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>TP05</title>
</head>
<body>
<?php
require_once './DAL/ModeleDAO.php';
$modeleDAO = new ModeleDAO();
$modeles = $modeleDAO->selectAll();
?>
<div class="container">
    <table class="is-bordered is-striped">
        <?php
        foreach ($modeles as $modele) {
            echo "<tr>";
            echo "<td>" . $modele['id_modele'] . "</td>";
            echo "<td>" . $modele['marque'] . "</td>";
            echo "<td>" . $modele['modele'] . "</td>";
            echo "<td>" . $modele['carburant'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>