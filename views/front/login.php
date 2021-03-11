<?php ob_start(); ?>
    <!-- Meta -->
    <title>Kévin Derda / Chef de projet</title>
    <meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
    <meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
    <meta name="author" content="Derda Kévin"/>
    <meta name="copyright" content="Derda Kévin"/>
    <meta name="robots" content="index"/>

    <!-- Open Graph meta pour Facebook et LinkedIn -->
    <meta property="og:title" content="login"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="/public/img/LogoBleu.png"/>
    <meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international."/>
        <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
    <meta property="og:type" content="website"/>
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div class="main">
        <section class="module bg-dark-30" data-background="/public/img/connexion.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt mb-0">Connexion</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                        <h4 class="font-alt">Connexion</h4>
                        <hr class="divider-w mb-10">
                        <form class="form" action="/redaction" method="post">
                            <div class="form-group">
                                <input class="form-control" id="username" type="text" name="username" placeholder="Identifiant"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-round btn-b">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $content = ob_get_clean();
require 'template.php';

?>