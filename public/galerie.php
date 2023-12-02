<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/galerie-style.css">
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
    <title>XTrail Beaumont</title>
</head>
<body>
  
    <?php include ('./header.php'); ?>
    
    <!-- MAIN -->
    <main class="main">
        <h1 class="galerie__title">La galerie</h1>
        <p class="galerie__description">Les organisateurs de l'X-Trail vous offrent la possibilité de télécharger ici toutes les photos prises par l'organisation et cela gratuitement.</p>
        <p class="galerie__description">Nous vous invitons à revenir sur cette page après l'évenement.</p>
        <section class="galerie__section">
            <h2 class="galerie__subtitle">Reconnaissance du 15 km - 26/11/2023</h2>
            <div class="section__photos">
                <img class="section__photo" src="./assets/pictures/photoReco15/photo1.jpg" alt="Photo de la reconnaissance du 15km">
                <!-- <img class="section__photo" src="./assets/pictures/photoReco15/photo2.jpg" alt="Photo de la reconnaissance du 15km">
                <img class="section__photo" src="./assets/pictures/photoReco15/photo3.jpg" alt="Photo de la reconnaissance du 15km">
                <img class="section__photo" src="./assets/pictures/photoReco15/photo4.jpg" alt="Photo de la reconnaissance du 15km"> -->
            </div>
            <p>Retrouvez la totalité des photos et des vidéos sur ce <a href="https://drive.google.com/drive/folders/1g2ZQ3JT0l11OO_MMuoA90AmMUCVRtjiM" target="_blank">drive</a>.</p>
        </section>
        <h2 class="galerie__subtitle">Affiche</h2>
        <img class="afficheImg" src="./assets/pictures/affiche.png" alt="Affiche de la course">
        <!-- <div class="galerie">
            <p class="galerie__description">Les photos de l'édition 2024 : <a href="#">LIEN</a></p>
            <p class="galerie__description">Les photos de l'édition 2025 : <a href="#">LIEN</a></p>
            <p class="galerie__description">Les photos de l'édition 2026 : <a href="#">LIEN</a></p>
        </div> -->
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>