<?php
require_once "Character.php";
require_once "Guerrier.php";
require_once "Orc.php";

session_start();

$guerrier = $_SESSION['guerrier'] ?? null;
$orc = $_SESSION['orc'] ?? null;

$message = "";

if (!$guerrier || !$orc) {
    $message = "Les deux combattants doivent être créés avant de lancer le combat.";
} else {
    // Tour du Guerrier
    $degatsGuerrier = $guerrier->attaque();
    $vieOrc = $orc->getVie() - $degatsGuerrier;
    $orc->setVie(max(0, $vieOrc));
    $message .= "Le Guerrier attaque et inflige $degatsGuerrier points de dégâts à l'Orc.<br>";

    // Vérification si l'Orc est vaincu
    if ($orc->getVie() <= 0) {
        $message .= "💀 L'Orc est vaincu ! Victoire du Guerrier !";
    } else {
        // Tour de l'Orc
        $degatsOrc = rand($orc->getDegatMin(), $orc->getDegatMax());

        // Bouclier absorbe une partie des dégâts
        $bouclier = $guerrier->getValeurBouclier();
        $degatsReels = max(0, $degatsOrc - $bouclier);

        $vieGuerrier = $guerrier->getVie() - $degatsReels;
        $guerrier->setVie(max(0, $vieGuerrier));

        $message .= "L'Orc riposte et inflige $degatsOrc points de dégâts (réduits à $degatsReels par le bouclier) au Guerrier.<br>";

        // Vérification si le Guerrier est vaincu
        if ($guerrier->getVie() <= 0) {
            $message .= "💀 Le Guerrier est vaincu ! Victoire de l'Orc !";
        }
    }

    // Mise à jour des sessions
    $_SESSION['guerrier'] = $guerrier;
    $_SESSION['orc'] = $orc;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Combat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">Résultat du Combat ⚔️</h1>
    <div class="alert alert-info mt-4">
        <?= $message ?>
    </div>
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-success">Retour à l'accueil</a>
    </div>
</body>
</html>
