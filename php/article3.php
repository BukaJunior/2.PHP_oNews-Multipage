<?php
    $article = 
        [
            'titre' => 'Lorem ipsum dolor article 3',
            'auteur' => 'Olivier Hertz',
            'texte' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maiores nobis nihil molestiae! Assumenda, repellendus quasi alias praesentium, reiciendis qui, labore dolore est vero hic voluptas atque officia dolor. Nihil vero amet repellendus. Dolorum nisi suscipit dolor dicta! Minima accusantium dignissimos, est vero vel quae inventore vitae iusto nobis. Minus sapiente ',
            'catégorie' => 'news',
            'date de publication' => '2018-05-05',
            'l\'image de l\'auteur' => '../images/icon-ohz.png',
        ];

    $timestamp = strtotime($article['date de publication']);

    $date = date('d F Y', $timestamp);
?>

<?php include "inc/header.tpl.php"; ?>
<?php include "inc/article.tpl.php"; ?>
<?php include "inc/footer.tpl.php"; ?>