
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
<?php
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
//$nom = $_POST['nom'];
    $nom = filter_input(INPUT_POST, 'nom',FILTER_SANITIZE_STRING);
    echo "$nom \n";
}
if(isset($_POST['nom']) && !empty($_POST['nom'])) {
    //$prenom = $_POST['prenom'];
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    echo "$prenom \n";
}
?>
<br/>
<a href="index.php">Retourner au formulaire</a>
</body>
</html>


