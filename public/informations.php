<?php
// Vérifiez si un paramètre "section" a été passé dans l'URL
if (isset($_GET['section'])) {
    $section = $_GET['section'];
    // En fonction de la section spécifiée, définissez l'ancre cible
    $target_anchor = '';
    switch ($section) {
        case 'reglement':
            $target_anchor = 'reglement__title';
            break;
        case 'results':
            $target_anchor = 'results__title';
            break;
        case 'FAQ':
            $target_anchor = 'FAQ__title';
            break;
        default:
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main-style.css">
    <link rel="stylesheet" href="./assets/css/pages/information-style.css">
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
        <h1 class="information__title">Les informations</h1>
        <p class="information__description">Vous retrouverez ici les informations concernant le X-Trail, notamment le réglement, les résultats ainsi que la FAQ</p>
        <div class="informationLinksDivMobile">
            <p><img class="informationsLinksMobileIcons" src="./assets/pictures/juge.png" alt="Icone réglement"><a class="informationsLinksMobile" href="#reglement__title">Réglement</a></p>
            <p><img class="informationsLinksMobileIcons" src="./assets/pictures/trophee.png" alt="Icone résultats"><a class="informationsLinksMobile" href="#results__title">Résultats</a></p>
            <p><img id="reglement__title" class="informationsLinksMobileIcons" src="./assets/pictures/faq.png" alt="Icone faq"><a class="informationsLinksMobile" href="#FAQ__title">FAQ</a></p>
        </div>
        <div class="informationBloc">
            <h3 class="information__title">Règlement X-trail</h3>
            <h4 class="reglement__subtitle">Article 1 : <strong>Organisation</strong></h4>
            <p class="information__reglement">
                Le X-Trail se déroulera dans la Forêt de Carnelle au départ de Beaumont sur Oise et est organisé
                par l’association Beaumont Triathlon, en collaboration avec la mairie de Beaumont sur Oise.
                L’épreuve se déroulera le 14 janvier 2024 et comprendra deux courses distinctes : une course
                de 15 km et une course de 30 km.
            </p>
            <h4 class="reglement__subtitle">Article 2 : <strong>Parcours</strong></h4>
            <p class="information__reglement">
                Le départ et l’arrivée de chaque épreuve se tiendront au stade Gilles DeGenève – Avenue du
                Président Wilson à Beaumont sur Oise (95).
                <br>
                Les courses proposent des parcours dans la forêt de Carnelle sur les communes de Beaumont
                sur Oise - Nointel – Noisy sur Oise – Asnières sur Oise – Viarmes – Saint Martin du Tertre.
                <br>
                L’organisation se réserve le droit de modifier ces parcours, y compris le jour de l’épreuve,
                notamment pour des raisons de sécurité ou d’autorisation.
                <br>
                Le dénivelé des courses : 
                <p class="information__reglement">- Environ 300m D+ sur les 15kms</p>
                <p class="information__reglement">- Environ 800m D+ sur les 30 kms</p>          
            </p>
            <h4 class="reglement__subtitle">Article 3 : <strong>Conditions de participation</strong></h4>
            <p class="information__reglement">
                3.1. Les courses sont ouvertes à toute personne âgée de 18 ans ou plus, le jour de la course,
                quelle que soit sa nationalité.
                <br>
                3.2. Chaque participant devra disposer d’une licence sportive en cours de validité (FFA, FFTRI)
                ou d’un certificat médical de non contre-indication à la pratique de la course à pied en
                compétition datant de moins d'un an.
            </p>
            <h4 class="reglement__subtitle">Article 4 : <strong>Inscriptions</strong></h4>
            <p class="information__reglement">
                4.1. Les inscriptions se font exclusivement en ligne via le site officiel de l'événement
                X-trail.run.
                <br>
                4.2. Les frais d'inscription sont fixés à 16€ pour la course de 15 km et 32€ pour la course de 30
                km.
                <br>
                <strong>Ces frais ne sont pas remboursables.</strong>
                <br>
                4.3. Les inscriptions sont personnelles et non transférables.
                <br>
                4.4. Le nombre total de participants pour les deux courses est fixé à 600. Les inscriptions seront
                prises en compte dans l'ordre d'arrivée et seront closes une fois ce nombre atteint.
            </p>
            <h4 class="reglement__subtitle">Article 5 : <strong>Dossards</strong></h4>
            <p class="information__reglement">
                5.1 Le retrait des dossards se fera :
                <p class="information__reglement">- Samedi 13 janvier, de 14 heures à 18 heures, au Magasin X (à préciser)</p>
                <span class="information__ou">ou</span>
                <p class="information__reglement">- Dimanche 14 janvier à partir de 7 h 00 à 7h45 au gymnase Henri      Michel, Avenue de la Division
                    Leclerc 95260 Beaumont sur Oise.</p>   
                <p class="information__reglement">
                    5.2 Les dossards seront remis en mains propres sur présentation d’une pièce d’identité.
                    En cas de retrait de dossards par un tiers, se munir de la photocopie d’une pièce d’identité du
                    coureur.
                </p>
            </p>
            <h4 class="reglement__subtitle">Article 6 : <strong>Déroulement de la course</strong></h4>
            <p class="information__reglement">
                6.1. Les départs des courses sont fixés à 8 h 30 pour le 30 km et 9 h pour le 15 km.
                <br>
                6.2. Les participants devront se présenter au moins 10 minutes avant le départ, munis de leur
                dossard.
                <br>
                6.3. Le parcours sera balisé et des signaleurs seront présents à des points stratégiques pour
                orienter les participants. Tout participant sortant du parcours balisé sera automatiquement
                disqualifié.
                <br>
                6.4. Les ravitaillements en eau seront situés à des points spécifiques du parcours et seront
                clairement indiqués. Il est interdit de jeter des déchets en dehors des zones prévues à cet effet.
                <br>
                6.5 Barrières horaires : ?
                <br>
                6.6 Ravitaillements :
                <br>
                Le 15 km,se fera en autonomie
                <br>
                Pour le 30 km, un ravitaillement est prévu à mi-parcours ainsi qu’à l’arrivée (Solide + Liquide)
                <br>
                Les coureurs devront prévoir un ravitaillement personnel suffisant entre deux ravitaillements
                prévus par l’organisation.
                <br>
                Chaque coureur doit disposer de son propre gobelet. Aucun gobelet ne sera disponible sur les
                postes de ravitaillements.
            </p>
            <h4 class="reglement__subtitle">Article 7 : <strong>Matériel recommandé</strong></h4>
            <p class="information__reglement">
                7.1 Pour les deux courses, il est recommandé d'être équipé d'une réserve d'eau, d’un gobelet,
                d'un vêtement de pluie, d’une couverture de survie ainsi que de tout autre équipement de
                sécurité jugé nécessaire.
                <br>
                7.2 Il est également recommandé pour chaque participant de posséder un téléphone portable
                chargé et opérationnel tout au long de la course. En cas d'urgence, il sera utilisé pour appeler
                les secours ou contacter l'organisation. Les participants devront veiller à préserver l'autonomie
                de leur téléphone portable pendant la durée de la course.
            </p>
            <h4 class="reglement__subtitle">Article 8 : <strong>Sécurité/ assistance médicale / abandon</strong></h4>
            <p class="information__reglement">
                8.1 <span class="lighterYellow">Des équipes médicales seront présentes sur le parcours et à l'arrivée pour fournir les
                premiers secours en cas de besoin.</span>
                <br>
                8.2 Tout participant en difficulté et/ou faisant le choix d’abandonner doit immédiatement alerter
                un signaleur ou un membre de l'organisation et remettre son dossard.
                Il est de la responsabilité de chaque participant de porter assistance à une personne en détresse
                si nécessaire.
                <br>
                8.3 Les concurrents doivent respecter les consignes de sécurité données par les signaleurs et les
                membres de l'organisation.
            </p>
            <h4 class="reglement__subtitle">Article 9 : <strong>Classement et récompenses</strong></h4>
            <p class="information__reglement">
                9.1 Un classement général sera établi pour chaque course, distinguant les trois premiers
                hommes et les trois premières femmes.
                <br>
                9.2 Les résultats seront disponibles sur le site officiel de l'événement et affichés lors de la
                cérémonie de remise des récompenses.
                <br>
                9.3 Des récompenses seront remises aux lauréats du classement général, ainsi que des prix
                spéciaux pour certaines catégories déterminées par l'organisation.
            </p>
            <h4 class="reglement__subtitle">Article 10 : <strong>Droit à l'image</strong></h4>
            <p class="information__reglement">
                10.1 En s’inscrivant, les participants autorisent expressément les organisateurs de la Course X-
                Trail à utiliser leur image, leur nom et leurs performances dans le cadre de la promotion de
                l'événement, sur tous supports médiatiques.
                <br>
                10.2 Les participants renoncent à toute rémunération ou compensation pour l'utilisation de leur
                image.
            </p>
            <h4 class="reglement__subtitle">Article 11 : <strong>Responsabilité</strong></h4>
            <p class="information__reglement">
                11.1 Les participants prennent part à la course sous leur entière responsabilité. Les organisateurs
                déclinent toute responsabilité en cas d'accident, de blessure, de vol ou de perte de matériel
                pendant la course.
                <br>
                11.2 Chaque participant est tenu de respecter les règles de bonne conduite, de fair-play et de
                respect de l'environnement tout au long de la course.
            </p>
            <h4 class="reglement__subtitle">Article 12 : <strong>Modification du règlement</strong></h4>
            <p class="information__reglement">
                12.1 Les organisateurs se réservent le droit de modifier le règlement en cas de besoin. Toute
                modification sera communiquée sur le site officiel de l'événement.
            </p>
            <h4 class="reglement__subtitle">Article 13 : <strong>Annulation (à valider avec le groupe)</strong></h4>
            <p class="information__reglement">
                13.1 Tout engagement est ferme et définitif ; aucun remboursement ne sera effectué en cas
                d’annulation de la part d’un concurrent, peu importe la raison.
                <br>
                13.2 La direction de course se réserve le droit d’annuler la/les compétition(s) en cas de force
                majeure, de mise en danger des personnes ou de raisons indépendantes de la volonté des
                organisateurs.
                <br>
                13.3 En cas d'intempéries ou de conditions météorologiques dangereuses, les organisateurs se
                réservent le droit de modifier le parcours, de reporter ou d'annuler la course notamment pour
                des raisons de sécurité. Dans ce cas, aucune demande de remboursement ne pourra être faite.
            </p>
            <h4 class="reglement__subtitle">Article 14 : <strong>Mise hors course</strong></h4>
            <p class="information__reglement">
                14.1 Au cours de l’épreuve, tout concurrent sera considéré « hors course » s’il ne respecte pas
                le tracé du parcours ou s’il affiche un comportement déloyal ou dangereux.
                <br>
                14.2 Tout coureur pris en train de jeter des détritus sur le parcours sera automatiquement
                disqualifié. Des poubelles seront disposées au point de ravitaillement et aucune dépose de
                déchets ne sera acceptée en dehors de ces zones.
            </p>
            <h4 class="reglement__subtitle">Article 15 : <strong>Assurance</strong></h4>
            <p class="information__reglement">
                15.1 <span class="lighterYellow">Responsabilité civile : les organisateurs sont couverts par une police d’assurance auprès
                de XXX.</span>
                <br>
                15.2 Individuelle accident : les licenciés bénéficient des garanties accordées par l’assurance de
                leur licence. Il incombe aux autres participants de s’assurer personnellement en souscrivant une
                assurance « accident de la vie ».
            </p>
            <h4 class="reglement__subtitle">Article 16 : <strong>Recommandations importantes</strong></h4>
            <p class="information__reglement">
                16.1 Les organisateurs déclinent toute responsabilité en cas d’accidents provoqués par une
                déficience physique immédiate ou future du coureur.
                <br>
                16.2 Du fait de la difficulté du parcours, le temps d’intervention des secours pourra varier selon
                la possibilité d’accès au lieu de l’accident.
                En conséquence, il ne pourra y avoir aucun recours contre l’organisation ou l’organisme
                assurant les secours.
                <br>
                16.3 Les participants doivent s’assurer avant le départ que leur état de santé les autorise à
                participer à cette course.
                <br>
                16.4 Toute personne s’inscrivant à la course s’engage à prendre connaissance et à respecter le
                règlement ci-dessus.
            </p>
            <p class="information__reglement">Vous pouvez aussi retrouver le réglement en PDF ici : <a href="#">PDF</a></p>
        </div>
        <h3 class="information__title" id="results__title">Les résultats</h3>
        <p class="information__resultat">Résultat 2024 : <a href="#">PDF</a></p>
        <p class="information__resultat">Résultat 2025 : <a href="#">PDF</a></p>
        <p class="information__resultat">Résultat 2026 : <a href="#">PDF</a></p>
        <h3 class="information__title" id="FAQ__title">FAQ</h3>
        <p class="information__question">Comment retirer mon dossard la veille de l'épreuve pour bénéficier des offres chez les partenaires X-Trail ?</p>
        <p class="information__reponse">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae.</p>
        <p class="information__question">Puis-je retirer mon dossard le jour de la course? Oui, jusqu'à 7h45 maxi? ?</p>
        <p class="information__reponse">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae.</p>
        <p class="information__question">Comment se rendre à Beaumont sur Oise pour le départ? Plans d'accès en véhicule comme en train ?</p>
        <p class="information__reponse">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, molestiae.</p>
    </main>

    <?php include ('./footer.php'); ?>

<!-- JavaScript pour faire défiler la page vers la section ciblée -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php
        // Si une ancre cible a été définie, faites défiler la page jusqu'à cette ancre
        if (!empty($target_anchor)) {
            echo "const navbarHeight = 100;"; // Hauteur de votre bandeau de navigation
            echo "const targetElement = document.getElementById('{$target_anchor}');";
            echo "if (targetElement) {";
            echo "  const offset = targetElement.getBoundingClientRect().top - navbarHeight;";
            echo "  window.scrollTo({ top: offset, behavior: 'smooth' });";
            echo "}";
        }
        ?>
    });

// Sélectionnez tous les liens avec la classe "informationsLinksMobile"
const mobileLinks = document.querySelectorAll('.informationsLinksMobile');

// Ajoutez un gestionnaire d'événement clic à chaque lien
mobileLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Empêchez le comportement de lien par défaut

        const targetId = this.getAttribute('href').substring(1); // Obtenez l'ID cible
        const targetElement = document.getElementById(targetId); // Sélectionnez l'élément cible

        if (targetElement) {
            const offset = targetElement.getBoundingClientRect().top - 80; // Ajustez la position de défilement
            window.scrollTo({ top: offset, behavior: 'smooth' }); // Faites défiler la page vers la cible ajustée
        }
    });
});
</script>

</body>
</html>