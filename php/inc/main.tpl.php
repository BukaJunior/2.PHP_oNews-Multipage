<?php include "inc/data.php";?>

<h2 class="right__title">Latest News</h2>
        <div class="posts">

          <?php foreach($postList as $key => $currentPost) : ?>

            <article class="post">
              <a href="" class="post__category post__category--color-<?= $currentPost['catégorie']?>"><?= $currentPost['catégorie']?></a>
              <h3><?= $currentPost['titre']?></h3>
              <div class="post__meta">
                <img class="post__author-icon" src="<?= $currentPost['l\'image de l\'auteur']?>" alt="">
                <strong class="post__author"><?= $currentPost['auteur']?></strong>
                <time datetime="2018-02-10"><?= $currentPost['date de publication']?></time>
              </div>
              <p><?= substr($currentPost['texte'], 0, 100) . " ..."?></p>
              <a href="article<?= $key?>.php" class="post__link">Continue reading</a>
            </article>
            
          <?php endforeach; ?>
            
        </div>
