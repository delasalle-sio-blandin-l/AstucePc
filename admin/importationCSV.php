    <?php
        //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
        require_once __DIR__.'/inclusions/config.php';
        require_once DOSS_INC.'/html_tete2.html';
    ?>
    
    <!-- Début de la page -->
    <h2>Veuillez choisir un fichier csv : </h2> <br>

    <!-- importation du fichier csv vers la table pièces détachées -->
    <p class="admin-importation-produit">Importation des produits : </p>
    <form class="form-importation-produit" method="POST" enctype="multipart/form-data" action="importProduit.php">
        <input name="userfile" type="file" value="table" />
        <input name="submit" type="submit" value="importer" />
    </form> <br>

    <!-- importation du fichier csv vers la table Clients -->
    <p class="admin-importation-contact">Importation des contacts : </p>
    <form class="form-importation-contact" method="POST" enctype="multipart/form-data" action="importContact.php">
        <input name="userfile" type="file" value="table" />
        <input name="submit" type="submit" value="importer" />
    </form>
</body>
</html>