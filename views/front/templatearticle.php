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
        <h1 class="pb-3 text-center">Blog</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadfont">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Article</li>
            </ol>
        </nav>
        <div class="row py-2" style="background-color: #FFFFFF;">
            <div class="col-12 col-md-9 d-flex align-items-center">
                <h2 class="px-3">Titre article</h2>
            </div>
            <div class="col-12 col-md-3 px-5 d-flex align-items-center justify-content-center">
                <img src="/public/img/blog.png" class="img-fluid" alt="Blog" id=blogecran>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #FFFFFF" id="botwhite" class="py-3">
    <div class="container px-4">

        <div class="row">
            <div class="col-12 px-5">
                <h3 class="pb-3">Sous-titre 1</h3>
                <p>paragraphe 1</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center">
                <img src="image blog 1" class="img-fluid" alt="description image">
            </div>
            <div class="col-12 col-md-7 ps-3">
                <h3 class="pb-3"> Sous-titre 2</h3>
                <p>paragraphe 2</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 px-5">
                <h3 class="pb-3">Sous-titre 3</h3>
                <p>paragraphe 3</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-7 ps-3">
                <h3 class="pb-3"> Sous-titre 3</h3>
                <p>paragraphe 3</p>
                <div class="col-12 col-md-5 d-flex align-items-center">
                    <img src="image blog 1" class="img-fluid" alt="description image">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 px-5">
                <h3 class="pb-3">Sous-titre 4</h3>
                <p>paragraphe 4</p>
            </div>
        </div>
        
    </div>

</section>
<?php $content = ob_get_clean();
require 'template.php';

?>