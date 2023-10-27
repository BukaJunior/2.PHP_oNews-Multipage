<?php include "inc/functions.php" ?>

<?php
    
    // on demande à la fonction de nous donner l'article dont on lui passe l'ID en argument.
    $article = getPostById(1);
?>

<?php include "inc/header.tpl.php"; ?>
<?php include "inc/article.tpl.php"; ?>
<?php include "inc/footer.tpl.php"; ?>