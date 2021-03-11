<?php ob_start(); ?>
<!-- Meta -->
<title>Kévin Derda / Erreur 404</title>
<meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
<meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets" />
<meta name="author" content="Derda Kévin" />
<meta name="copyright" content="Derda Kévin" />
<meta name="robots" content="noindex">

<!-- Open Graph meta pour Facebook et LinkedIn -->
<meta property="og:title" content="Erreur 404" />
<meta property="og:url" content="#" />
<meta property="og:image" content="/public/img/LogoBleu.png" />
<meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international." />
<meta property="og:site_name" content="Kévin Derda Chef de projet" />
<meta property="og:type" content="website" />
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
<section style="background-color: #FFFFFF" id="topwhite" class="py-3">
    <div class="container">
        <h1 class="pb-3 text-center">Erreur 404</h1>
        <p class="pb-3 text-center">Vous naviguez en zone inconnue !</p>
    </div>
</section>
<section style="background-color: #FFFFFF" id="botwhite" class="py-2">
    <div class="container px-4">
        <div class="row px-4">
            <div class="col-2 d-md-none">
            </div>
            <div class="col-8 col-md-6 d-flex justify-content-center align align-items-center pb-5">
                <img src="/public/img/bateau.png" class="img-fluid" alt="Navire perdu">
            </div>
            <div class="col-2 d-md-none">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align align-items-center text-center">
                <div class="row px-4">
                    <div class="col-2 d-md-none">
                    </div>
                    <div class="col-8 col-md-12 d-flex justify-content-center align align-items-center text-center pb-3">
                        <p>Remettez vite le cap vers la terre ferme !<P>
                    </div>
                    <div class="col-2 d-md-none">
                    </div>
                </div>

                <div class="row px-4">
                    <div class="col-2 d-md-none">
                    </div>
                    <div class="col-8 col-md-12 d-flex justify-content-center align align-items-center pb-5">
                        <a class="btn btn-primary btn-lg" href="/" role="button">Accueil</a>
                    </div>
                    <div class="col-2 d-md-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'template.php';
?>