<?php ob_start(); ?>
<!-- Meta -->
<title>Kévin Derda / Mentions légales</title>
<meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
<meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
<meta name="author" content="Derda Kévin"/>
<meta name="copyright" content="Derda Kévin"/>
<meta name="robots" content="index"/>

<!-- Open Graph meta pour Facebook et LinkedIn -->
<meta property="og:title" content="Mentions légales"/>
<meta property="og:url" content="#"/>
<meta property="og:image" content="/public/img/LogoBleu.png"/>
<meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international."/>
    <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
<meta property="og:type" content="website"/>
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
<section style="background-color: #FFFFFF" id="topwhite" class="py-3">
    <div class="container text-center">
        <h1 class="pb-3"> Mentions légales</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" id="breadfont">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mentions légales</li>
            </ol>
        </nav>

    </div>

</section>


<section style="background-color: #FFFFFF" id="botwhite" class="py-3">
    <div class="container">
        <p class="pb-3">Le site kd.fr est la propriété exclusive de Kévin Derda, qui l’édite.</p>
        <h2 class="pb-3">HÉBERGEMENT</h2>
        <p class="pb-3">Le site est hébergé par OVH</br>
            https://www.ovh.com/fr/</br>
            L’adresse de notre site est : https://kd.fr/</p>

        <h2 class="pb-3">PROPRIÉTÉ INTELLECTUELLE</h2>
        <p class="pb-3"> L’accès au site https://kd.fr/ vous confère un droit d’usage privé et non exclusif de ce
            site. Tous
            les articles, photographies et autres documents sur ce site sont la propriété de Kévin Derda ou sont
            autorisés avec l’autorisation de leurs propriétaires, et sont soumis au droit d’auteur et autres droits
            de propriété intellectuelle. L’utilisation frauduleuse de tout contenu du site Internet est totalement
            interdite. Kévin Derda vous informe qu’il usera largement de ses droits de propriété intellectuelle pour
            engager des poursuites, mêmes pénales, si nécessaires.</p>
        </p>
    </div>
</section>
<?php $content = ob_get_clean();
require 'template.php';
?>
