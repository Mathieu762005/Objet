<?php
require_once "Character.php";
require_once "Guerrier.php";
require_once "Orc.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$testCharacter = new Character(100, 50);
var_dump($guerrier);

$testGuerrier = new Guerrier(50, 100, "pistolet", 50, "armure", 100);

var_dump($vraiGuerrier);


$testOrc = new Orc(100, 200);

var_dump($testOrc);
?>


</body>
</html>
