<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Kévin Derda / Chef de projet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta -->
    <meta name="description" content="Kévin Derda Lorem ipsum">
    <meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
    <meta name="author" content="Derda Kévin"/>
    <meta name="copyright" content="Derda Kévin"/>
    <meta name="robots" content="index"/>

    <!-- Open Graph meta pour Facebook et LinkedIn -->
    <meta property="og:title" content="Accueil"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="Kévin Derda Lorem ipsum"/>
    <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
    <meta property="og:type" content="website"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/public/img/Favicon/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/public/img/Favicon/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/public/img/Favicon/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/img/Favicon/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/public/img/Favicon/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/public/img/Favicon/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/public/img/Favicon/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/public/img/Favicon/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="/public/img/Favicon/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="/public/img/Favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="/public/img/Favicon/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/public/img/Favicon/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/public/img/Favicon/favicon-128.png" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png"/>

    <!-- Lien CSS -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/front/style.css"/>
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="/public/css/front/telephone.css"/>
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="/public/css/front/ordinateur.css"/>

    <!-- Lien Typo -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fed6a1c0d3.js" crossorigin="anonymous"></script>

</head>


<body style="background-color: #215EB5;">

<!-- MENU -->

<header>
    <div class="container" style="background-color: #215EB5;" id="start">
        <nav>
            <div id="burger">
                <input type="checkbox" id="burger_checkbox"/>
                <label for="burger_checkbox"></label>
                <ul class="menu">
                    <li><a href="/">ACCUEIL</a></li>
                    <li><a href="/parcours">PARCOURS</a></li>
                    <li><a href="/references">RÉFÉRENCES</a></li>
                    <li><a href="/blog">BLOG</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<!-- FOOTER -->

<?= $content; ?>
<footer>
    <div class="container-fluid" style="background-color: #215EB5;" id="end">

        <div class="row d-flex justify-content-center align-items-center px-5" id="footer">

            <div class="col-12 col-md-3 pt-1 px-2 text-center">
                <a href="/legale">Mentions légales</a>
            </div>

            <div class="col-12 col-md-4 pt-1 px-2 text-center">
                <a href="/confidentialite">Politique de confidentialité</a>
            </div>

            <div class="col-12 col-md-5 pt-1 px-2 text-center">
                <a href="/cookies">Politique de gestion des cookies</a>
            </div>

        </div>

<!-- COOKIE -->

    </div>
    <div id="cookie-banner" class="alert alert-warning alert-dismissible fade container-fluid"
         style="height: auto;">
        <div class="row px-3">
            <div class="col-10 px-3 pt-2 text-center">
                <p>Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site. En
                    poursuivant
                    votre navigation sur ce site, nous considérerons que vous acceptez l'utilisation des cookies. <a
                            href="KDpolitique-de-gestion-des-cookies.html" style="color: #FFFFFF;">En savoir plus</a>
                </p>
            </div>
            <div class="col-2 px-3 d-flex align-items-center">
                <button onclick="hideCookieBanner()" type="button" class="btn btn-secondary">J'AI COMPRIS</button>
            </div>
        </div>
    </div>
</footer>

<script src="/public/js/front/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="/public/js/front/myScript.js"></script>

</body>

</html>
