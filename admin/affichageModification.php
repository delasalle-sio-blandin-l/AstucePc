<?php
    //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
    require_once __DIR__.'/inclusions/config.php';
    require_once DOSS_INC.'/html_tete2.html';
?>

    <!-- Début de la page -->
    <h2>Veuillez choisir ce que vous voulez modifier : </h2> <br>

    <!-- Formulaire de modifications des images du site, elles seront stockées dans le dossier images -->
    <p class="admin-importation-image">Modifications des images : </p>
    <form class="form-importation-image" method="POST" enctype="multipart/form-data" action="modifImage.php">
        <input name="userfile" type="File"/>
        <input name="submit" type="submit" value="Importer" />
    </form>

    <!-- Formulaire de modifications des textes du site, elles seront stockées dans le fichier images -->
    <!-- <p class="admin-importation-texte">Modifications des textes : </p>
    <form class="form-importation-texte" method="POST" enctype="multipart/form-data" action="modifTexte.php">
        <input name="userfile" type="File"/>
        <input name="submit" type="submit" value="modifier" />
    </form> -->
</body>
</html>