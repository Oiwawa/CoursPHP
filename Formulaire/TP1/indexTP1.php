<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1 Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset>
    <legend>Adresse clients</legend>
<form action="traitementTP1.php" method="post">
    <label>Nom :
        <br>
        <input type="text" name="nom">
    </label>
    <br>
    <label>Prenom :
        <br>
        <input type="text" name="prenom">
    </label>
    <br>
    <label>Adresse :
        <br>
        <input type="text" name="adresse">
    </label>
    <br>
    <label>CP:
        <br>
        <input type="text" name="codepostal" >
    </label>
    <br>
    <label>Ville:
        <br>
        <input type="text" name="ville" >
    </label>
    <br>
    <input type="submit" value="Envoyer le formulaire">
</form>
</fieldset>
<br>
<a href="indexTP1Ex3.php">Exercice 3</a>
<br>
<a href="indexTP1Ex4.php">Exercice 4</a>

</body>
</html>
