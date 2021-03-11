<?php ob_start(); ?>
<!-- Meta -->
<title>Kévin Derda / Chef de projet</title>
<meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
<meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
<meta name="author" content="Derda Kévin"/>
<meta name="copyright" content="Derda Kévin"/>
<meta name="robots" content="index"/>

<!-- Open Graph meta pour Facebook et LinkedIn -->
<meta property="og:title" content="Article"/>
<meta property="og:url" content="#"/>
<meta property="og:image" content="/public/img/LogoBleu.png"/>
<meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international."/>
    <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
<meta property="og:type" content="article"/>
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
<section style="background-color: #FFFFFF" id="topwhite" class="py-3">
    <div class="container">
        <h1 class="pb-3 text-center">Blog</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadfont">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $post['title'] ?></li>
            </ol>
        </nav>
        <div class="row py-2" style="background-color: #FFFFFF;">
            <div class="col-12 col-md-9 d-flex align-items-center">
                <h2 class="px-3"><?= $post['title']; ?></h2>
            </div>
            <div class="col-12 col-md-3 px-5 d-flex align-items-center justify-content-center">
                <img src="/uploads/<?= $post['image']; ?>" class="img-fluid" alt="Blog" id=blogecran>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #FFFFFF" id="botwhite" class="py-3">
    <div class="container px-4">
        <?= $post['content']; ?>
    </div>
</section>
<?php $content = ob_get_clean();
require 'template.php';
?>
