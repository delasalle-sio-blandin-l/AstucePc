<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
    require_once '../core/inclusions/html_tete2.html';
?>
    <!-- Début de la page d'installation -->

    <!-- Slider -->
    <div> 
        <!-- Slider contenu -->
        <div class="slider-contenu">

            <!-- Image 1 et son texte -->
            <div class="mySlides">
                <img src="../core/ressources/images/img-installation1.png" alt="desert" style="width:100%">
            </div>

            <!-- Image 2 et son texte -->
            <div class="mySlides">
                <img src="../core/ressources/images/img-installation2.png" alt="ile" style="width:100%">
            </div>

            <!-- Image 3 et son texte -->
            <div class="mySlides">
                <img src="../core/ressources/images/img-installation3.png" alt="montagne" style="width:100%">
            </div>

            <!-- Boutons next et previous -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div> <!-- Fin du slider -->
    <br>

    <!-- Cercles en dessous le slider -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div><br>

    <!-- Contenu de la page avec des titres (h1) et des textes (p) -->

    <h1>INSTALLATION DES EQUIPEMENETS</h1>

    <p class="texte-installation">
    Suite à l’analyse de <strong>vos besoins</strong> et à la sélection de <strong>vos équipements</strong>, notre équipe 
    intervient sur site afin de réaliser <strong>l’installation complète de votre parc informatique</strong>. 
    Nous assurons notamment <strong>la mise en réseau de votre PC</strong> avec ses périphériques 
    (imprimantes, etc…) et les autres PC du parc. Profitez d’une <strong>véritable solution</strong> sur mesure 
    adaptée à votre activité professionnelle. <strong>Un service d’installation d’ordinateurs et d’équipements clé en 
    main !</strong>
    </p>

<!-- Pied de page -->
<?php require_once '../core/inclusions/html_pied2.html'; ?>