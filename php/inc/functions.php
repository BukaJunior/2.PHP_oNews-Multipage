<?php

// Cette fonction va récupérer l'article selon son paramètre.
/**
 * Fonction qui va chercher un article d'apres son identifiant
 *
 * @param int $postId Identifiant de l'article qu'on cherche
 * @return array Article trouvé
 */
function getPostById($postId) {
    
    include __DIR__ . "/data.php";

    // On utilise l'ID de l'article a chercher recu en parametre pour recuperer l'article voulu
    $article = $postList[$postId];

    return $article;

}

?>