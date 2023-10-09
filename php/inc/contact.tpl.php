<h2 class="right__title">Nous contacter</h2>
        <div class="posts">
          <div class="post post--solo">

            <?php

            var_dump($_POST);
            // var_dump($_GET);

            // Si l'entrée nom existe dans le tableau $_POST
            if(isset($_POST['nom'])) {

              // Si l'entrée est différente d'une chaine vide
              if($_POST['nom'] != "") {

                // On récupère la valeur de l'entrée nom dans une variable
                $nom = $_POST['nom'];

                // On affiche dans un message de remerciement le nom de l'utilisateur
                echo "Merci " . $nom . " de nous avoir contacté";

              } else {

                // Sinon, c'est qu'il existe mais contient une chaine vide.
                echo " Vous n'avez pas renseigné votre nom";
              }
              
            }
            ?>
            
            <form action="contact.php" method="POST">
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
                <input type="radio" name="civilite" id="Monsieur">
                <label for="Me">Madame</label>
                <input type="radio" name="civilite" id="Madame">
              </div>
              
              <div>
                <label for="pays">Votre pays</label>
                <select name="pays" id="pays">
                  <option value="france">France</option>
                  <option value="espagne">Espagne</option>
                  <option value="italie">Italie</option>
                </select>
              </div>



              <button type="submit">Envoyer votre nom</button>

            </form>

            <a href="./index.php" class="post__link">Back to home</a>
          </div>
        </div>