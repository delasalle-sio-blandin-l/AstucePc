<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
    require_once 'core/inclusions/html_tete.html';
?>

    <!-- Début de la page d'accueil-->
    <!-- Affichage de l'actualité concernant le site -->
    <div class="actualites">
        <?php require 'Back/allActualite.php' ?> 
    </div>


    <!-- Slider -->
    <div> 
        <!-- Slider contenu -->
        <div class="slider-contenu">

            <!-- Image 1 et son texte -->
            <div class="mySlides fade">
                <img src="core/ressources/images/offre/offre.png" alt="offre du moment pc HP 250 G7" style="width:100%">
            </div>

            <!-- Image 2 et son texte -->
            <div class="mySlides fade">
                <img src="core/ressources/images/offre/offre2.png" alt="offre du moment SSD" style="width:100%">
            </div>

            <!-- Image 3 et son texte -->
            <div class="mySlides fade">
                <img src="core/ressources/images/offre/offre3.png" alt="Nouveautés" style="width:100%">
            </div>

            <!-- Boutons next et previous -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div> <!-- Fin du contenu du slider -->
    </div> <!-- Fin du slider -->

    <!-- Cercles en dessous le slider -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- Article du site Les Numériques que nous intégrons via le flux rss du site -->
    <?php 
        //Adapter le fichier feedparser.php en fonction du lien donné
        //require_once("feedparser.php");
        //Insérer le lien du flux RSS et le nombre d'article voulu (3 actuellement) 
        //echo FeedParser("https://www.lesnumeriques.com/rss.xml", 3); 
    ?>

    <!-- contenu de la page avec des titres (h1) et textes (p) -->
    <div class="contenu">
        <h1>INTERVENTION TRÈS PROFESSIONNELLE</h1>

        <div class="intervention">
            <img src="core/ressources/images/img-qualite.png" alt="image qualite" height="50" width="50">
            <p>Qualité</p>
        </div>
        <div class="intervention">
            <img src="core/ressources/images/img-transparence.png" alt="image transparence" height="50" width="50">
            <p>Transparence</p>
        </div>

        <div class="intervention">
            <img src="core/ressources/images/img-rapidite.png" alt="image rapidite" height="50" width="50">
            <p>Rapidité</p>
        </div>

        <div class="intervention">
            <img src="core/ressources/images/img-installation-icon.png" alt="image intervention" height="50" width="50">
            <p>Installation de A À Z</p>
        </div>
    </div> <!-- Fin du contenu -->

    <!-- Avis Google -->
    <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-2a2fad4b-a7cd-44f3-92e1-a557895fbda4"></div> -->

    <!-- Avis Google -->
    <button  class="btn-google"><a class="lien-avis-google" href="https://www.google.com/search?q=astucepc+rennes&rlz=1C1GCEA_enFR884FR884&oq=astucepc+rennes&aqs=chrome..69i57j69i60l5.13720j0j7&sourceid=chrome&ie=UTF-8#lrd=0x480ede2bde801f29:0x806ac17949d08c0e,1,,,">AVIS GOOGLE</a></button>

<!-- Pied de page -->
<?php require_once 'core/inclusions/html_pied.html'; ?> 
