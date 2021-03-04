<?php ob_start(); ?>
<!-- Meta -->
<title>Kévin Derda / Chef de projet</title>
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
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="home-section home-parallax home-fade home-full-height bg-dark bg-dark-30" id="home" data-background="/public/img/alaska.jpg">
    <div class="titan-caption">
        <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-4">Erreur</div>
            <div class="font-alt"><?= $errorMsg = "e404" ? "La page n'existe pas" : $errorMsg ?></div>
            <div class="font-alt mt-30"><a class="btn btn-border-w btn-round" href="/">Retour à la page d'accueil</a></div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'template.php';
?>
