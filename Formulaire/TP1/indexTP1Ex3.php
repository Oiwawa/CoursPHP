<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP1 Formulaire Ex3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset>
    <legend>S'abonner</legend>
    <?php
    $email ="";
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    ?>
    <form action="indexTP1Ex3.php" method="post">
        <label>E-mail : <br>
            <input type="text" name="email" value="<?= $email?>">
        </label>
        <input type="submit" value="Valider">
    </form>

    <?php

    echo $email ."<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
</fieldset>
</body>
</html>
