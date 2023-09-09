<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/parcours-style.css">
    <!-- JS -->
    <script src="./assets/scripts/slider.js" defer></script>
    <script src="./assets/scripts/counter.js" defer></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/pictures/favicon.png">
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
        <h1 class="main__title">Les parcours</h1>
        <div class="parcours__card">
            <section class="parcours parcours-15">
                <h3 class="parcours__title">Le Petit : 15kms / 290D+</h3>
                <p class="parcours__description">Ce parcours est destiné à ceux qui souhaitent se challenger tout en découvrant une partie de la forêt de Carnelle</p>
                <h5 class="parcours__subtitle">Tracé</h5>
                <img class="parcours__img" src="./assets/pictures/parcours15.jpg" alt="Parcours XTrail 15 kilomètres">
                <h5 class="parcours__subtitle">Typographie</h5>
                <img class="parcours__typo" src="./assets/pictures/typo-15.png" alt="Typographie parcours 15 kilomètres">
                <h5 class="parcours__subtitle">Informations diverses</h5>
                <p>Horaires - Départ : 9h00</p>
                <p>Barrières - 10kms : 10h45</p>
                <p>Informations importantes</p>
            </section>
            <section class="parcours parcours-30">
                <h3 class="parcours__title">Le Grand : 30kms / 500D+</h3>
                <p class="parcours__description">Ce parcours est destiné aux gourmands d'efforts qui souhaitent se mesurer aux difficultés présentent en forêt de Carnelle</p>
                <h5 class="parcours__subtitle">Tracé</h5>
                <img class="parcours__img" src="./assets/pictures/parcours30.jpg" alt="Parcours XTrail 30 kilomètres">
                <h5 class="parcours__subtitle">Typographie</h5>
                <img class="parcours__typo" src="./assets/pictures/typo-30.png" alt="Typographie parcours 30 kilomètres">
                <h5 class="parcours__subtitle">Informations diverses</h5>
                <p>Horaires - Départ : 8h30</p>
                <p>Barrières - 10kms : 10h00 - 20kms : 11h30</p>
                <p>Informations importantes</p>
            </section>
        </div>
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>