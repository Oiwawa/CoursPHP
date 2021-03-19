<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/3cde53a0bb.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
$couleur = ['rouge' => 'red', 'blanc' => 'white', 'vert' => 'green'];
if (isset($_POST['fond']) && isset($_POST['texte'])) {
    $fond = $_POST['fond'];
    $texte = $_POST['texte'];
    setcookie('fond', $fond, time() + 300000);
    setcookie('texte', $texte, time() + 300000);
}
?>
<style>
    body {
        background-color: <?= $_COOKIE['fond'] ?>;
        color: <?= $_COOKIE['texte'] ?>;
    }
</style>
<div class="container">
    <div class="column is-4 is-offset-4">
        <h1>Changer le fond et le texte</h1>
        <hr>
        <form action="" method="post">
            <div class="field">
                <label for="fond" class="label is-small">Fond</label>
                <div class="control">
                    <div class="select is-rounded is-small is-primary">
                        <select name="fond" id="fond">
                            <?php
                            foreach ($couleur as $cle => $valeur) {
                                ?>
                                <option value="<?= $valeur ?>"><?= $cle ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label for="texte" class="label is-small">Texte</label>
                <div class="control">
                    <div class="select is-rounded is-small is-primary">
                        <select name="texte" id="texte">
                            <?php
                            foreach ($couleur as $cle => $valeur) {
                                ?>
                                <option value="<?= $valeur ?>"><?= $cle ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input id="submit" class="button is-small is-outlined is-rounded is-primary" name="submit"
                           type="submit"
                           value="Changer">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>