<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/inscription-style.css">
    <!-- JS -->
    <script src="./assets/scripts/slider.js" defer></script>
    <script src="./assets/scripts/counter.js" defer></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/pictures/favicon.svg">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- XTRAIL -->
    <title>X-Trail Beaumont</title>
</head>
<body>

    <?php include ('./header.php'); ?>

    <!-- MAIN -->
    <main class="main">
        <h1 class="inscription__title">Les inscriptions</h1>
        <p class="inscription__description">Les inscriptions au X-Trail se font sur onsinscrit.com, vous trouverez ci-dessous les liens utiles.</p>
        <h3 class="inscription__subtitle">Date d'ouverture des inscriptions</h3>
        <p class="inscription__date">le 30 septembre 2023</p>
        <div class="BlocInscription">
            <div class="leftBlocInscription">
                <p class="inscription__link"><strong>15 km</strong> / 300 D+</p>
                <p class="inscription__link">Tarif : 16€</p>
                <!-- <p class="inscription__link"><a href="#">Parcours</a></p> -->
                <p class="inscription__link"><a target="_blank" href="https://x-trail-2024.onsinscrit.com">Inscription 15kms</a></p>
                <p class="inscription__link"><a target="_blank" href="https://x-trail-2024.onsinscrit.com/listeinscrits.php?tous=1&dossards=1">Liste des inscrits</a></p>
            </div>
            <div class="rightBlocInscription">
                <p class="inscription__link"><strong>30 km</strong> / 800 D+</p>
                <p class="inscription__link">Tarif : 32€</p>
                <!-- <p class="inscription__link"><a href="#">Parcours</a></p> -->
                <p class="inscription__link"><a target="_blank" href="https://x-trail-2024.onsinscrit.com">Inscription 30kms</a></p>
                <p class="inscription__link"><a target="_blank" href="https://x-trail-2024.onsinscrit.com/listeinscrits.php?tous=1&dossards=1">Liste des inscrits</a></p>
            </div>
        </div>
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>