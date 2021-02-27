<?php ob_start(); ?>
    <?= $post['title']?>
    <?= $post['content']?>
    <?= $post['image']?>
    <?= $post['creation_date']?>
<?php $content = ob_get_clean();
require 'template.php'
?>