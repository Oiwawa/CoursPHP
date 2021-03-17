<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les formulaires</title>
</head>
<body>
<form action="traitement.php" method="post">
    <label>Nom :
        <input type="text" name="nom">
    </label>
    <label>Prenom :
        <input type="text" name="prenom">
    </label>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>