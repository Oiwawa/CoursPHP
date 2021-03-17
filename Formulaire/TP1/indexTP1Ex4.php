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
    <form>
        <label> Prix HT <br>
            <input type="number" step="0.01" name="prixHT">
        </label>
        <br>
        <label>Taux de TVA <br>
            <input type="number" step="0.01" name="tauxTva">
        </label>
        <br>
        <input type="submit" value="Calculer">

        <?php
        $prixHT = filter_input(INPUT_POST,'prixHT', FILTER_SANITIZE_NUMBER_FLOAT);
        $tauxTva = filter_input(INPUT_POST,'tauxTva', FILTER_SANITIZE_NUMBER_FLOAT);
        $ttc = $prixHT + ($prixHT * $tauxTva);
        $tva = $tauxTva;
         var_dump($ttc);
        echo "<br>Montant de la TVA <input value='$ttc'><br>";
        echo "<br>Montant TTC<input value='$ttc'>";
        ?>
    </form>

</fieldset>

</body>
</html>
