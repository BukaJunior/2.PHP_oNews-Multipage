<h2 class="right__title"><?= $article['titre'] ?></h2>
            <div class="posts">
              <article class="post--solo">
                
                <a href="" class="post__category post__category--color-<?= $article['catégorie'] ?>"><?= $article['catégorie'] ?></a>
                <div class="post__meta">
                  <img class="post__author-icon" src="<?= $article['l\'image de l\'auteur'] ?>" alt="">
                  <strong class="post__author"><?= $article['auteur'] ?></strong>
                  <time datetime="2018-02-10"><?= $article['date de publication'] ?></time>
                </div>
                <p><?= $article['texte'] ?></p>
                <a href="index.php" class="post__link">Back to home</a>
              </article>
            </div>
          </main>
    </div>
    
    
</body>
</html>