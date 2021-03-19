<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1 BDD Ex2</title>
</head>
<body>
<?php
require_once './DAL/ModeleDAO.php';
require_once './BO/Modele.php';
?>
<fieldset style="width: 500px">
    <legend>Ajoute un nouveau modèle</legend>
    <form method="post" action="indexEx2.php">
        <label>Identifiant:
            <input type="text" name="identifiant" required>
        </label>
        <br>
        <label>Marque:
            <input type="text" name="marque" required>
        </label>
        <br>
        <label>Modèle:
            <input type="text" name="modele" required>
        </label>
        <br>
        <input type="radio" id="essence" name="carburant" value="essence" checked>
        <label for="essence">Essence</label>
        <br>
        <input type="radio" id="diesel" name="carburant" value="diesel">
        <label for="diesel">Diesel</label>
        <br>
        <input type="radio" id="gpl" name="carburant" value="gpl">
        <label for="gpl">GPL</label>
        <br>
        <input type="radio" id="electrique" name="carburant" value="electrique">
        <label for="electrique">Electrique</label>
        <br>
        <input type="submit" value="Ajouter">
    </form>
</fieldset>
<a href="index.php">Exercice 1</a>
<a href="indexEx3.php">Exercice 3</a>

<?php
    if (isset($_POST['identifiant']) && isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['carburant'])) {

    $modeleDAO = new ModeleDAO();
    $modele = new Modele(($_POST['identifiant']), ($_POST['marque']), ($_POST['modele']), ($_POST['carburant']));

    $modeleDAO->ajouter($modele);
    echo "<p>Votre nouveau modèle a bien été ajouté!";
}

?>
<?php
require_once './DAL/ModeleDAO.php';
$modeleDAO = new ModeleDAO();
$modeles = $modeleDAO->selectAll();
?>
<br>
<hr>
<div class="container">
    <table class="is-bordered is-striped" style="border: 1px solid black">
        <?php
        foreach ($modeles as $modele) {
            echo "<tr style='border: 1px solid black'>";
            echo "<td style='border: 1px solid black'>" . $modele['id_modele'] . "</td>";
            echo "<td style='border: 1px solid black'>" . $modele['marque'] . "</td>";
            echo "<td style='border: 1px solid black'>" . $modele['modele'] . "</td>";
            echo "<td style='border: 1px solid black'>" . $modele['carburant'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
