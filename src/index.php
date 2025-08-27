<?php

require_once "Character.php";
require_once "Guerrier.php";
require_once "Orc.php";

session_start();

$guerrier = $_SESSION['guerrier'] ?? null;
$orc = $_SESSION['orc'] ?? null;
$character = $_SESSION['character'] ?? null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['creerGuerrier'])) {
        $_SESSION['guerrier'] = new Guerrier("armure", "La merguez", 2000, 500, 250, 600);
        $guerrier = $_SESSION['guerrier'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['creerOrc'])) {
        $_SESSION['orc'] = new Orc(1500, 200, 100, 400);
        $orc = $_SESSION['orc'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nouveauJeu'])) {
        session_destroy();
        header("Location: index.php");
        exit;
    }
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['lancement'])) {
//         $character = new Character(100, 50,);
//         $character->nbAleatoire();
//         $_SESSION['character'] = $character;
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['combat'])) {
//     }
// }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="row justify-content-center">
        <div class="display d-flex justify-content-md-between align-items-center">
            <?php if (isset($guerrier)) { ?>
                <div class="statGuerrier p-5">
                    <p>Bouclier : <?= htmlspecialchars($guerrier->getBouclier()) ?></p>
                    <p>Arme : <?= htmlspecialchars($guerrier->getArme()) ?></p>
                    <p>Vie : <?= htmlspecialchars($guerrier->getVie()) ?></p>
                    <p>Magie : <?= htmlspecialchars($guerrier->getMagie()) ?></p>
                    <p>Dégâts Arme : <?= htmlspecialchars($guerrier->getDegatArme()) ?></p>
                    <p>Valeur Bouclier : <?= htmlspecialchars($guerrier->getValeurBouclier()) ?></p>
                </div>
            <?php }; ?>
            <div>
            </div>
            <?php if (isset($orc)) { ?>
                <div class="statOrc p-5">
                    <p>Vie : <?= htmlspecialchars($orc->getVie()) ?></p>
                    <p>Magie : <?= htmlspecialchars($orc->getMagie()) ?></p>
                    <p>degat Min : <?= htmlspecialchars($orc->getDegatMin()) ?></p>
                    <p>degat Max : <?= htmlspecialchars($orc->getDegatMax()) ?></p>
                </div>
            <?php }; ?>
        </div>
        <div class="combat text-center">
            <form method="POST">
                <input type="hidden" name="action" value="">
                <button class="btn btn-primary me-md-2 fs-3 fw-bold" type="submit" name="combat">Combat 🔥</button>
            </form>
        </div>
    </main>

    <footer class="d-flex justify-content-md-between">
        <div class="creerGuerrier ms-5  d-grid gap-2 d-md-flex justify-content-md-between align-items-center">
            <form method="POST" class="form d-flex justify-content-md-between align-items-center">
                <input type="hidden" name="action" value="">
                <button class="btn btn-primary me-md-2" type="submit" name="creerGuerrier">Créer Guerrier</button>
            </form>
            <form method="POST">
                <input type="hidden" name="action" value="">
                <button class="btn btn-primary me-md-2" type="submit" name="creerOrc">Créer un Orc</button>
            </form>
        </div>
        <div class="d-flex align-items-center">
        </div>
        <div class="ms-5  d-grid gap-2 d-md-flex justify-content-md-end align-items-center">
            <form method="POST">
                <input type="hidden" name="action" value="">
                <button class="btn btn-primary me-md-2" type="submit" name="nouveauJeu">Nouveau Jeu</button>
            </form>
            <form method="POST">
                <input type="hidden" name="action" value="">
                <button class="btn btn-primary me-md-2" type="submit" name="lancement">Qui commence ? 🎲</button>
            </form>
        </div>
    </footer>
</body>

</html>