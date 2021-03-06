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
        <h1 class="pb-3 text-center"> Blog</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadfont">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
        <div class="row py-2">
            <div class="col-12 col-md-9 d-flex align-items-center" style="background-color: #FFFFFF;">
                <p class="px-3 lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras incongue
                    tellus.
                    Vestibulum at
                    tortor
                    posuere, hendrerit felis quis, condimentum nunc. Nulla facilisi.</p>
            </div>
            <div class="col-12 col-md-3 text-center" style="background-color: #FFFFFF;">
                <div class="row ">
                    <div class="col-6 col-md-12 p-3 d-flex justify-content-center">
                        <a class="btn btn-primary btn-lg" href="/parcours" role="button">Parcours</a>
                    </div>
                    <div class="col-6 col-md-12 p-3 d-flex justify-content-center">
                        <a class="btn btn-secondary btn-lg" href="/contact" role="button">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #FFFFFF" id="botwhite" class="py-3">
    <div class="container px-4">
        <?php foreach($posts as $post): ?>
            <a href="/blog/<?= $post['id'] ?>" style="text-decoration: none">
                <div class="row my-3">
                    <div class="col-1 d-md-none">
                    </div>
                    <div class="col-10 col-md-4 ">
                        <img src="/uploads/<?= $post['image'] ?>" class="img-fluid imageblog" alt="...">
                    </div>
                    <div class="col-1 d-md-none">
                    </div>
                    <div class="col-1 d-md-none">
                    </div>
                    <div class="col-10 col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h2 class="display-5 card-title"><?= $post['title'] ?></h2>
                            <p class="card-text" style="color: black">
                                <?= substr(strip_tags($post['content']), 0, 200)."..."?>
                            </p>
                        </div>
                        <div class="col-1 d-md-none">
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php $content = ob_get_clean();
require 'template.php';

?>