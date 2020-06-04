    <?php
        //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
        require_once __DIR__.'/inclusions/config.php';
        require_once DOSS_INC.'/html_tete2.html';
    ?>

    <!-- Début du formulaire d'ajout d'une categorie -->
    <div class="form-ajout-categorie">
        <h1>AJOUTER CATEGORIE</h1>
            <form class="form-ajout-categorie-contenu" METHOD="POST" ACTION="ajoutCategorie.php">
                <label>Libelle :</label><br><input name="libelle" type="text" class="input-libelle" maxlength="200" size="25"><br>
                
                <input name="submit" class="ajout-categorie-button" type="submit" value="Envoyer">
            </form><br><br>
    </div> <!-- Fin du formulaire d'ajout d'une categorie -->

    <!-- Pied de page -->
    <footer class="retour-categorie">
        <a href="AffichageCategorie.php">Retour vers la liste des catégories</a>
    </footer>