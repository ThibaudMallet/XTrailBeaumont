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
        <h1 class="main__title">Les parcours</h1>
        <section class="parcours__carnelle">
            <p class="parcours__description">Les 2 parcours se déroulent dans la magnifique forêt de Carnelle. Le 15km est représenté en <span class="bluespan">bleu</span>, le 30km en <span class="redspan">rouge</span>.</p>
            <img class="parcours__img" src="./assets/pictures/carnelle.jpeg" alt="Map de la forêt de Carnelle">
        </section>
        <div class="parcours__card">
            <section class="parcours parcours-15">
                <h3 class="parcours__title">Le Petit : 15 km / 300D+</h3>
                <p class="parcours__description">Ce parcours est destiné à ceux qui souhaitent se challenger tout en découvrant une partie de la forêt de Carnelle</p>
                <img class="parcours__typo" src="./assets/pictures/typo-15.png" alt="Typographie parcours 15 kilomètres">
                <h5 class="parcours__subtitle">Informations diverses</h5>
                <p>Départ : 9h00.</p>
                <p>Barrières horaires : 11h30 à l'arrivée (6km/h de moyenne).</p>
                <p>Ce parcours est représenté en <span class="bluespan">bleu</span>, sur la carte, les dossards et sur le fléchage.</p>
                <p>Voici le <a href="./assets/gpx/X-trail 15km.gpx" download="X-Trail 15km.gpx" target="_blank">GPX</a> du parcours.</p>
            </section>
            <section class="parcours parcours-30">
                <h3 class="parcours__title">Le Grand : 30 km / 800D+</h3>
                <p class="parcours__description">Ce parcours est destiné aux gourmands d'efforts qui souhaitent se mesurer aux difficultés présentes en forêt de Carnelle</p>
                <img class="parcours__typo" src="./assets/pictures/typo-30.png" alt="Typographie parcours 30 kilomètres">
                <h5 class="parcours__subtitle">Informations diverses</h5>
                <p>Départ : 8h30.</p>
                <p>Barrières horaires : 11 H 00 au ravitaillement soit au 15ème km / 14 H 00 à l’arrivée soit 5,5 km/h de moyenne.</p>
                <p>Ce parcours est représenté en <span class="redspan">rouge</span>, sur la carte, les dossards et sur le fléchage.</p>
                <p>Voici le <a href="./assets/gpx/X-Trail 30km.gpx" download="X-Trail 30km.gpx" target="_blank">GPX</a> du parcours.</p>
            </section>
        </div>
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>