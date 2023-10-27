<?php

    include "inc/functions.php";

    // Pour savoir quel article aller chercher, on voir dans l'url si on a un parametre GET appelé ID et on le récupere
    $postId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    // var_dump($articleId);
    
    // on demande à la fonction de nous donner l'article dont on lui passe l'ID en argument.
    $article = getPostById($postId);
?>

<?php include "inc/header.tpl.php"; ?>
<?php include "inc/article.tpl.php"; ?>
<?php include "inc/footer.tpl.php"; ?> 