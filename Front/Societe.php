<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
    require_once '../core/inclusions/html_tete2.html';
?>
    <!-- Début de la page notre société -->

    <!-- Image en haut de page -->
    <img class="img-societe" src="../core/ressources/images/img-vitrine-astuce-pc.png" alt="image astuce pc">

    <!-- Début du contenu de la page -->
    <div>
        <h1>DES SPECIALISTES A VOTRE ECOUTE</h1>
        <p class="texte-societe">
           <strong>Astuce PC</strong>, c’est avant tout une équipe de <strong>spécialistes en vente et dépannage 
           informatique</strong>, au service de vos besoins. Grâce à notre parfaite connaissance des <strong>technologies 
           Mac et PC</strong>, nous pouvons intervenir sur tous vos <strong>équipements informatiques</strong>, pour un 
           dépannage logiciel, une réparation matériel, le montage et l'installation complète de machines. Particuliers 
           et professionnels, n’hésitez pas à venir nous rencontrer.
        </p>

        <h1>VOTRE MAGASIN D’INFORMATIQUE À RENNES</h1>
        <p class="texte-societe">
            Pour tous vos besoins <strong>d’installation, dépannage et assistance informatique</strong>, rendez-vous chez 
            <strong>Astuce PC</strong>. 
            Notre magasin <strong>d’informatique à Rennes</strong> propose des solutions sur mesure pour les particuliers 
            et professionnels. Nous intervenons pour le dépannage de vos ordinateurs ou pour la mise en 
            place d’un système informatique complet, adapté à vos besoins. N’hésitez pas à <a class="lien-societe" href="contact.php">contacter 
            notre magasin informatique</a> à Rennes pour bénéficier de solutions clés en main en 
            Ille-et-Vilaine.
        </p>

        <h1>UN ENGAGEMENT ÉCOLOGIQUE</h1>
        <p class="texte-societe">
            Conscients des <strong>enjeux écologiques</strong> de demain, nous travaillons chaque jour avec pour 
            philosophie qu'il est préférable de réparer un composant plutôt que de changer une machine !

            C’est dans cet objectif que nous mettons toutes nos <strong>compétences</strong> à votre service pour réparer 
            vos <strong>cartes mères, disques durs, écrans et autres composants</strong>. En faisant appel à 
            <strong>Astuce PC</strong>, vous optez pour une solution à la fois <strong>écologique et économique</strong>.
        </p> 

        <h1>DES PRESTATIONS SUR MESURE</h1>

        <p class="texte-societe">
            Notre boutique de <strong>vente et dépannage informatique</strong> propose de nombreuses prestations 
            personnalisées pour vos besoins professionnels ou personnels. Profitez de possibilités de 
            <strong>dépannage rapide, d’un montage d’ordinateurs</strong> sur mesure et de solutions professionnelles 
            complètes :
        </p>
    </div> <!-- Fin du contenu de la page -->

        <!-- Lien rédirigeant vers différents lien du site -->
        <ul class="presta">
            <li><a class="presta-link" href="../Front/Depannage.php">Dépannage informatique</a></li>
            <li><a class="presta-link" href="../Front/Assemblage.php">Assemblage d’ordinateur sur mesure</a></li>
            <li><a class="presta-link" href="../Front/InstallationPC.php">Installation d’ordinateurs et d’équipements</a></li>
            <li><a class="presta-link" href="../Front/Produits.php">Vente d’accessoires, ordinateurs et pièces détachées</a></li>
        </ul><br>

<!-- Pied de page -->
<?php require_once '../core/inclusions/html_pied2.html'; ?>