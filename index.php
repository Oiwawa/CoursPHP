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
$tableauEx3['Badin'] = ['Aurelie'=>1, 'Nantes'=>2, 3];
foreach ($tableauEx3 as $cle => $values) {
    $i = 0;
    echo "<ul> Element $cle";
    "<li> element $values </li>";

}
?>
</ul>
</body>
</html>


