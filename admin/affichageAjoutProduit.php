    <?php
        //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
        require_once __DIR__.'/inclusions/config.php';
        require_once DOSS_INC.'/html_tete2.html';
    ?>

    <!-- Début du formulaire d'ajout d'un produit -->
    <div class="form-ajout-produit">
        <h1>AJOUTER PRODUIT</h1>
            <form class="form-ajout-produit-contenu" METHOD="POST" ACTION="ajoutProduit.php">
                <label>Libelle :</label><br><input name="libelle" type="text" class="input-libelle" maxlength="200" size="25"><br>
                <label>Description :</label><br><input name="description" type="text" class="input-description" maxlength="200" size="25"><br>
                <label>Prix :</label><br><input name="prix" type="number" class="input-prix" maxlength="4" size="25"><br>
                <label>Image :</label><br><input name="image" type="text" class="input-image" maxlength="25" size="25"><br>
                <label>FamilleProduit :</label><br><input name="familleProduit" type="text" class="input-familleProduit" maxlength="25" size="25"><br>
                <label>Categorie :</label><br><input name="categorie" type="text" class="input-categorie" maxlength="50" size="25"><br>
                <label>Sous-Categorie :</label><br><input name="sousCategorie" type="text" class="input-sousCategorie" maxlength="50" size="25"><br>
                
                <input name="submit" class="ajout-produit-button" type="submit" value="Envoyer">
            </form><br><br>
    </div> <!-- Fin du formulaire d'ajout d'un produit -->

    <!-- Pied de page -->
    <footer class="retour-produit">
        <a href="AffichageProduit.php">Retour vers la liste des produits</a>
    </footer>