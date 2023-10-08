<h2 class="right__title">Nous contacter</h2>
        <div class="posts">
          <div class="post post--solo">
            
            <form action="">
              <div>
                <label for="nom">Votre nom</label>

                <input type="text" name="nom" id="nom" placeholder="Mon nom" required>
                
              </div>

              <div>
                <label for="email">Votre email</label>

                <input type="email" name="email" id="email" placeholder="monadress@exemple.com" required>
              </div>

              <div>
                <label for="age">Votre age</label>

                <input type="number" name="age" id="age" placeholder="19" min="18" max="90">
              </div>
              
              <div>
                <label for="image">Votre Image</label>

                <input type="file" name="image" id="image">
              </div>

              <div>
                <label for="password">Votre mot de passe</label>
                <input type="password" name="password" id="password">
              </div>

              <div>
                <label for="birthday">Votre date de naissance</label>
                <input type="date" name="birthday" id="birthday">
              </div>
              
              <div>
                <label for="Mr">Monsieur</label>
                <input type="radio" name="civilite" id="Mr">
                <label for="Me">Madame</label>
                <input type="radio" name="civilite" id="Me">
              </div>
              <button type="submit">Envoyer votre nom</button>

            </form>

            <a href="./index.php" class="post__link">Back to home</a>
          </div>
        </div>