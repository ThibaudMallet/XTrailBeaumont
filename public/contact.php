<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/contact-style.css">
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
        <h1 class="inscription__title">Contact</h1>
        <p class="inscription__description">Vous pouvez nous contacter via le formulaire ci-dessous ou en envoyant directement un mail à l'addresse suivant : <a href="mailto:xtrail95@gmail.com">xtrail95@gmail.com</a></p>
        <form>      
            <input name="name" type="text" class="feedback-input" placeholder="Nom" />   
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
            <input type="submit" value="Envoyer"/>
        </form>
    </main>

    <?php include ('./footer.php'); ?>

</body>
</html>