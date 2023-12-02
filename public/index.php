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
    <link rel="icon" type="image/x-icon" href="./assets/pictures/favicon.svg" sizes="64x64">
    <!-- XTRAIL -->
    <title>X-Trail Beaumont</title>
</head>
<body>

    <?php include ('./header.php'); ?>

    <!-- MAIN -->
    <main class="main">
        <div class="title">
            <h1>X-Trail</h1>
            <p class="title__date">Dimanche 14 janvier 2024</p>
            <p class="counter" id="counter"></p>
        </div>
        <p class="description">Réservez l'un des 600 dossards pour profiter d'un bon moment tous ensemble au coeur de la Forêt de Carnelle. Des kinés seront à l'arrivée pour vous détendre après votre effort.</p>
        <a href="./inscriptions.php">Je m'inscris</a>
        <p class="description">Reconnaissance du 30km le 17/12/23.</p>
        <!-- <p class="description">Reconnaissance du 30km le 17/12/23. Toutes les informations en suivant le lien ci-dessous</p>
        <a href="https://www.strava.com/clubs/1189783/group_events/1516679" target="_blank">Rejoindre l'événement Strava</a> -->
    </main>
    <div class="videoDiv">
        <h2 class="subtitle">Trailer X-Trail</h2>
        <iframe class="video" src="https://www.youtube.com/embed/_P3j7Nx_4pU" title="X-Trail - Beaumont sur Oise" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <?php include ('./footer.php'); ?>

</body>
</html>