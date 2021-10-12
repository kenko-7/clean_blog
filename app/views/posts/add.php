<?php 
/*
    ./app/views/categories/editForm.php 
    Variables disponibles :
*/
?>
 <!-- Page Header -->
 <header class="masthead">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                  <h1 class="editable" data-type="text" data-field="titre">Add a post</h1>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Formulaire -->
        <form action="posts/edit/update.html" method="post" class="form">
    <div>
        <label for="Titre">Titre </label>
</br>
        <input type="text" id="titre" name="titre" placeholder="Saisissez votre titre ici">
        <hr>
    </div>
    <div>
        <label for="sous_titre">Sous-titre </label>
        </br>
        <input type="text" id="sousTitre" name="sousTitre" placeholder="Saisissez votre sous-titre ici" >
    </div>
    <hr>
    <div>
        <label for="texte">Texte </label>
        </br>
        <textarea id="texte" name="texte" placeholder="Saisissez votre texte ici" ></textarea>
    </div>
    <hr>
    <div class="button">
        <button type="submit">Envoyer le post</button>
    </div>
</form>
        </div>