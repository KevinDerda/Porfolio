<?php ob_start(); ?>
<!-- Meta -->
<title>Kévin Derda / Chef de projet</title>
<meta name="description" content="Kévin Derda Lorem ipsum">
<meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets" />
<meta name="author" content="Derda Kévin" />
<meta name="copyright" content="Derda Kévin" />
<meta name="robots" content="index" />

<!-- Open Graph meta pour Facebook et LinkedIn -->
<meta property="og:title" content="Accueil" />
<meta property="og:url" content="#" />
<meta property="og:image" content="" />
<meta property="og:description" content="Kévin Derda Lorem ipsum" />
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
<section style="background-color: #FFFFFF" id="botwhite" class="py-3">
    <div class="container px-4">
    <div class="row px-4">
            <div class="col-2 col-md-3">
            </div>
            <div class="col-8 col-md-6 d-flex justify-content-center align align-items-center">
            <img src="public/img/bateau.jpg" class="img-fluid" alt="Navire perdu">
            </div>
            <div class="col-2 col-md-3">
            </div>
        </div>
        <div class="row px-4">
            <div class="col-2 col-md-3">
            </div>
            <div class="col-8 col-md-6 d-flex justify-content-center align align-items-center text-center">
                Remettez vite le cap vers la terre ferme !
            </div>
            <div class="col-2 col-md-3">
            </div>
        </div>
        <div class="row px-4">
            <div class="col-2 col-md-3">
            </div>
            <div class="col-8 col-md-6 d-flex justify-content-center align align-items-center">
            <a class="btn btn-primary btn-lg" href="/" role="button">Accueil</a>
            </div>
            <div class="col-2 col-md-3">
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean();
require 'template.php';

?>