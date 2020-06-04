<?php
    //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
    require_once __DIR__.'/inclusions/config.php';
    require_once DOSS_INC.'/html_tete2.html';
?>

    <!-- Début de la page -->
    <h2>Ajout des images pour les produits : </h2> <br>

    <!-- Formulaire de modifications des images du site, elles seront stockées dans le dossier images -->
    <form class="form-importation-image" method="POST" enctype="multipart/form-data" action="ajoutImageProduits.php">
        <input name="userfile" type="File"/>
        <input name="submit" type="submit" value="Importer" />
    </form><br><br>


    <p>Le nom du fichier doit être le même que le nom que vous avez donné lors de l'ajout du produit</p><br>
</body>
</html>