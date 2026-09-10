
<?php
/* 
Template Name: Histoire
*/
?>
<?php get_header(); ?>

<h1>Histoire</h1>


      <h1>FORMULAIRE D'INSCRIPTION</h1>
      <form>
        <div class="input-box">
          <label for="surname">Nom*</label>
          <input id="surname" type="text" placeholder="Entrez un nom" />
          <p class="error" id="error-surname">Nom invalide.</p>
        </div>

        <div class="input-box">
          <label for="name">Prénom*</label>
          <input id="name" type="text" placeholder="Entrez un prénom" />
          <p class="error" id="error-name">Prénom invalide.</p>
        </div>
        <div class="input-box">
          <label for="gen">Genre</label>
        </div>
        <div class="input-box-lines">
          <div class="input-box-line">
            <input type="radio" id="woman" name="genre" value="femme" />
            <label for="femme">Femme</label>
          </div>

          <div class="input-box-line">
            <input type="radio" id="man" name="genre" value="homme" />
            <label for="homme">Homme</label>
          </div>
        </div>

        <div class="input-box">
          <label for="birth">Date de naissance*</label>
          <input id="birth" type="date" placeholder="cliquez" />
          <p class="error" id="error-birth">Date de naissance invalide</p>
        </div>
        
        <div class="input-box">
          <label for="mail">Adresse mail*</label>
          <input id="mail" type="text" placeholder="Entrez une adresse mail" />
        </div>

        <div class="input-box">
          <label for="confirm">Confirmation mail*</label>
          <input
            id="confirm"
            type="text"
            placeholder="Entrez le mail identique"
          />
        </div>
        <div class="input-box">
          <label for="confirma">Confirmation du mot de passe*</label>
          <input
            id="confirma"
            type="password"
            placeholder="Entrez un mot de passe"
          />
        </div>

        <div class="input-box" id="case">
          <input type="checkbox" placeholder="Entrez le mail identique" />
          <label for="case"
            >En cochant cette case vous acceptez nos conditions
            d'utilisation.<span class="blanc">*</span>
          </label>
        </div>

        <div class="input-box">
          <div id="champs">
            <p class="*Ces champs sont obligatoires">
              <span class="blanc">*</span>Ces champs sont obligatoires
            </p>
          </div>
        </div>
        <div class="input-box" id="valid">
          <input type="submit" id="val" value="VALIDER" />
        </div>
      </form>
    </section>
    <script ></script>
  </body>

<?php get_footer(); ?>