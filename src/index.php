<?php
require_once "Character.php";
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
$guerrier = new Character(100, 50);
var_dump($guerrier);
?>


</body>
</html>
