<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie ex 2</title>
</head>
<body>

<form method="post" action="index2.php">
    <label>Login :
        <input type="text" name="login"
            <?php
            if (isset($_COOKIE['login'])) {
                echo ' value="'.$_COOKIE['login'] . '"';
            }
            ?>>
    </label>
    <br>
    <br>
    <label>Mot de passe :
        <input type="password" name="mdp"
            <?php
            if (isset($_COOKIE['mdp'])) {
                echo ' value="' . $_COOKIE['mdp'] . '"';
            } ?>>
    </label>
    <br>
    <br>
    <label>Conserver ces informations pendant
        <input type="number" name="cookietime"> jours
    </label>
    <br>
    <br>
    <input type="submit" value="Se connecter">
</form>
<?php
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $cookieTime = $_POST['cookietime'] * 86400;
    setcookie('login', $login, time() + $cookieTime);
    setcookie('mdp', $mdp, time() + $cookieTime);
    var_dump($_COOKIE['login']);
    var_dump($_COOKIE['mdp']);

}
?>

</body>
</html>
