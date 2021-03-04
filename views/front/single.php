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
    <?= $post['title']?>
    <?= $post['content']?>
    <?= $post['image']?>
    <?= $post['creation_date']?>
<?php $content = ob_get_clean();
require 'template.php'
?>