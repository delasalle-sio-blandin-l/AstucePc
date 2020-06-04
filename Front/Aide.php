<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
	require_once '../core/inclusions/html_tete2.html';
?>

<!-- Début de la page besoin d'aide -->

<!-- Image en haut de la page -->
<img class="img-aide" src="../core/ressources/images/img-besoin-aide.png" alt="images besoin aide">

<!-- Contenu de la page avec les différentes option d'aide et d'assistance (FAQ, Assistance, etc...) -->
<!-- Contenu séparé en 3 sections -->
<div class="contenu-aide">
    <section class="section-aide">
        <a class="section-lien" href="FAQ.php">
            <img src="../core/ressources/images/icon-faq.png" alt="faq icon" height="50" width="50">
            <p>F.A.Q</p>
        </a>
    </section>

    <section class="section-aide">
        <a class="section-lien" href="Assistance.php">
            <img src="../core/ressources/images/icon-assistance.png" alt="icon assistance" height="50" width="50">
            <p>Assistance</p>
        </a>
    </section>

    <section class="section-aide">
        <a class="section-lien" href="">
            <img src="../core/ressources/images/icon-assistance.png" alt="icon autres" height="50" width="50">
            <p>Autres</p>
        </a>
    </section>
</div>

<!-- Redirection vers la page contact en cas de question précise -->
<div class="question">
    <h1 class="texte-question">UNE QUESTION ? UN BESOIN PRECIS ?</h1>
    <button class="btn-question"><a class="btn-question-lien" href="Contact.php">CONTACTEZ-NOUS</a></button>
</div>

<!--pied de page-->
<?php require_once '../core/inclusions/html_pied2.html'; ?>
