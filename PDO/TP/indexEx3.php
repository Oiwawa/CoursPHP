<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1 BDD Ex3</title>
</head>
<body>
<?php
require_once './DAL/ProprietaireDAO.php';
?>
<fieldset style="width: 500px">
    <legend>Accédez à vos informations</legend>
    <form method="post" action="indexEx3.php">
        <label>Numéro à vos informations
            <input type="number" name="id_pers">
        </label>
        <br>
        <label>Nom de famille
            <input type="text" name="nom">
        </label>
        <br>
        <input type="submit" value="Connexion">
    </form>
</fieldset>
<?php
if (isset($_POST['id_pers']) && isset($_POST['nom'])) {
    $proprietaireDAO = new ProprietaireDAO();
    $id = settype($_POST['id_pers'], 'int');
    $nom = $_POST['nom'];
    $proprietaire = $proprietaireDAO->selectId($id, $nom);
    var_dump($proprietaire);
}
?>
<br>
<fieldset style="width: 500px">
    <legend>Modification de vos informations</legend>
    <form method="post" action="indexEx3.php">
        <label>Nom de famille:
            <input type="text" name="nom">
        </label>
        <br>
        <label>Prénom:
            <input type="text" name="prenom">
        </label>
        <br>
        <label>Adresse:
            <input type="text" name="adresse">
        </label>
        <br>
        <label>Code Postal:
            <input type="text" name="codepostal">
        </label>
        <br>
        <label>Ville:
            <input type="text" name="ville">
        </label>
        <br>
        <input type="submit" value="Enregister">
    </form>
</fieldset>
<a href="index.php">Exercice 1</a>
<a href="indexEx2.php">Exercice 2</a>

</body>
</html>
