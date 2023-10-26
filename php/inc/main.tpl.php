<?php include "inc/data.php";?>

<h2 class="right__title">Latest News</h2>
        <div class="posts">
          <?php foreach($postList as $key => $currentPost) : ?>
            <article class="post">
              <a href="" class="post__category post__category--color-team">CATEGORE</a>
              <h3>TITRE</h3>
              <div class="post__meta">
                <img class="post__author-icon" src="../images/icon-dar.png" alt="">
                <strong class="post__author">AUTEUR</strong>
                <time datetime="2018-02-10">DATE</time>
              </div>
              <p>TEXTE</p>
              <a href="LIENS VERS ARTICLES" class="post__link">Continue reading</a>
            </article>
          <?php endforeach; ?>
            
        </div>
