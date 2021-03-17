<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP Formulaire Ex4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset>
    <legend>Calcul des taxes</legend>
    <form action="indexTP1Ex4.php" method="post">
        <label> Prix HT <br>
            <input type="number" step="0.01" name="prix_ht"
                   value="<?php echo isset($_POST['prix_ht']) ? htmlspecialchars($_POST['prix_ht'], ENT_QUOTES) : ''; ?>">
        </label>
        <br>
        <label>Taux de TVA <br>
            <input type="number" step="0.01" name="tva"
                   value="<?php echo isset($_POST['tva']) ? htmlspecialchars($_POST['tva'], ENT_QUOTES) : ''; ?>">
        </label>
        <br>
        <input type="submit" value="Calculer">

        <?php
        $prix_ht = filter_input(INPUT_POST,'prix_ht', FILTER_SANITIZE_NUMBER_FLOAT);
        $tva = filter_input(INPUT_POST,'tva', FILTER_SANITIZE_NUMBER_FLOAT);
        $prix_ttc = $prix_ht + ($prix_ht * $tva /100);
        $montantTva = ($prix_ht * $tva) /100 ;

        $nombre_format_tva = number_format($montantTva, 2,'€','' );
        $nombre_format_ttc = number_format($prix_ttc, 2,'€','' );
        ?>
        <br>Montant de la TVA <input value="<?= $nombre_format_tva?>" readonly><br>
        <br>Montant TTC<input value="<?=$nombre_format_ttc ?>" readonly>
    </form>

</fieldset>

</body>
</html>
