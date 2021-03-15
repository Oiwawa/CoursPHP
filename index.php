<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>D2WM - 139(A)</p>
<p>ENI</p>
<?php
$maVariable = 42;
echo "Hello World - $maVariable ";
var_dump($maVariable);
?>
<?php
$tableauEx3['Dupont'] = ['Gerard'=>1, 'Paris'=>2, 67=>3];
$tableauEx3['Badin'] = ['Aurelie', 'Nantes', 3];
foreach ($tableauEx3 as $values) {
    echo "<ul> Element $values";
    "<li> element $values";

}
?>
</body>
</html>


