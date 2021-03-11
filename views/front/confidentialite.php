<?php ob_start(); ?>
    <!-- Meta -->
    <title>Kévin Derda / Confidentialité </title>
    <meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
    <meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
    <meta name="author" content="Derda Kévin"/>
    <meta name="copyright" content="Derda Kévin"/>
    <meta name="robots" content="index"/>

    <!-- Open Graph meta pour Facebook et LinkedIn -->
    <meta property="og:title" content="Confidentialité"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="/public/img/LogoBleu.png"/>
    <meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international."/>
        <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
    <meta property="og:type" content="website"/>
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
    <section style="background-color: #FFFFFF" id="topwhite" class="py-3">
        <div class="container text-center">
            <h1 class="pb-3">Politique de confidentialité</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadfont">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Politique de confidentialité</li>
                </ol>
            </nav>

        </div>

    </section>


    <section style="background-color: #FFFFFF" id="botwhite" class="py-3">
        <div class="container">
            <p class="pb-3">Le site kd.fr est la propriété exclusive de Kévin Derda, qui l’édite.</p>
            <h2 class="pb-3">DROIT D'ACCES A VOS DONNÉES</h2>
            <p class="pb-3">Toute personne physique utilisant le service a la faculté d’exercer ses droits d’accès, de rectification, d’opposition et d’effacement au traitement de ses données conformément aux articles 38 à 40 de la loi du 6 janvier 1978.</p>
            <p class="pb-3">En application du règlement 2016/679 du 27 avril 2016, la personne physique peut exercer son droit à la limitation du traitement, à l’effacement de ses données et la portabilité à partir du 25 mai 2018. Ces droits peuvent être exercés auprès du propriétaire du site qui a collecté les données à caractère personnel de la manière suivante :</br>
                en adressant votre demande à l’adresse email : hello@kd.fr</p>
            <p class="pb-3">Le propriétaire du site adresse une réponse dans un délai de 1 mois. En cas de réponse non satisfaisante, la personne concernée a la faculté de saisir la CNIL. Par ailleurs, l’Utilisateur peut formuler des directives relatives à la conservation, à l’effacement et à la communication de ses données à caractère personnel après son décès conformément à l’article 40-1 de la loi 78-17 du 6 janvier 1978.
                Ces directives peuvent être générales ou particulières.</p>

            <h2 class="pb-3">COOKIES</h2>
            <p class="pb-3">Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran.</p>

            <p class="pb-3">Pour plus d’informations sur l’utilisation des cookies sur notre site nous vous invitons à vous rendre sur notre page concernant notre page <a href="/cookies">Politique de gestion des cookies</a></p>


            <h2 class="pb-3">CONTENU EMBARQUÉ DEPUIS D'AUTRES SITES</h2>
            <p class="pb-3"> Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p>

            <p class="pb-3">Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p>

        </div>
    </section>
<?php $content = ob_get_clean();
require 'template.php';

?>