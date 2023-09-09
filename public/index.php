<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/accueil-style.css">
    <!-- JS -->
    <script src="./assets/scripts/slider.js" defer></script>
    <script src="./assets/scripts/counter.js" defer></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/pictures/favicon.png">
    <!-- XTRAIL -->
    <title>X-Trail Beaumont</title>
</head>
<body>

    <?php include ('./header.php'); ?>

    <!-- MAIN -->
    <main class="main">
        <div class="title">
            <img src="./assets/pictures/logo/logoXTrailRW.png" alt="logo XTrail" />
            <h1>X-Trail</h1>
            <p class="title__date">Dimanche 14 janvier 2024</p>
            <p class="counter" id="counter"></p>
        </div>
        <p class="description">Reservez l'un des 600 dossards pour profiter d'un bon moment tous ensemble au coeur de la Forêt de Carnelle</p>
        <a href="./inscription.php">Je m'inscris</a>
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>