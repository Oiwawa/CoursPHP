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
        <label for="">Identifiant:
            <input type="text" name="identifiant">
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
        <input type="radio" id="essence" name="carburant" checked>
        <label for="essence">Essence</label>
        <br>
        <input type="radio" id="diesel" name="carburant">
        <label for="diesel">Diesel</label>
        <br>
        <input type="radio" id="gpl" name="carburant">
        <label for="gpl">GPL</label>
        <br>
        <input type="radio" id="electrique" name="carburant">
        <label for="electrique">Electrique</label>
        <br>
        <input type="button" value="Ajouter">
    </form>
</fieldset>

<?php
$modele = '';
$modeleDAO = new ModeleDAO();
if(isset($_POST['identifiant']) && !empty($_POST['identifiant']) && isset($_POST['marque']) && !empty($_POST['marque'])
&& isset($_POST['modele']) && !empty($_POST['modele']) && isset($_POST['carburant']) && !empty($_POST['carburant'])){

    $id_modele =filter_input(INPUT_POST, 'identifiant',FILTER_SANITIZE_STRING);
    $marque = filter_input(INPUT_POST, 'marque', FILTER_SANITIZE_STRING);
    $modele = filter_input(INPUT_POST, 'modele', FILTER_SANITIZE_STRING);
    $carburant = filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_STRING);

$modele = new Modele($id_modele, $marque, $modele, $carburant);
$modeleDAO->ajouter($modele);
echo "<p>Votre nouveau modèle a bien été ajouté";
}
?>
</body>
</html>
