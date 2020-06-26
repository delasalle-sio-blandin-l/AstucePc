<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
    require_once '../core/inclusions/html_tete2.html';
    
?>
<!-- Début de la page de contact-->
<div class="contenu-contact">

  <!-- Formulaire de contact -->
  <div class="form-contact">
    <h1>CONTACTEZ NOUS</h1>
    <form class="form-contact-contenu" METHOD="POST" ACTION="../Back/enregContact.php">
        <label for="nom">Nom :<br></label><input id="nom" name="nom" type="text" pattern="^[a-zA-Z' \-]+$" class="input-nom" maxlength="25" size="25" placeholder="Entrez votre nom" required><br>
        <label for="prenom">Prénom :<br></label><input id="prenom" name="prenom" type="text" pattern="^[a-zA-Z' \-]+$" class="input-prenom" maxlength="25" size="25" placeholder="Entrez votre prénom" required /><br>
        <label for="telephone">Téléphone :<br></label><input id="telephone" name="telephone" type="tel" class="input-telephone" pattern="^([0-9]{2,2}(\.|-| )?){4,4}[0-9]{2,2}$" maxlength="50" size="25"  placeholder="Entrez votre numero de telephone" /><br>
        <label for="email">Email :<br></label><input id="email" name="email" type="email" pattern="^.+@.+\.(fr|com|net|org)$" class="input-email" maxlength="50" size="25"  placeholder="Entrez votre mail" /><br>
        <label for="sujet">Sujet :<br></label><input id="sujet" name="sujet" type="text" class="input-sujet" maxlength="25" size="25"  placeholder="Entrez votre sujet" required/><br>
        <label for="message">Message :<br></label><textarea id="message" name="message" class="input-textarea" cols=60 rows=10 required></textarea><br>

        <?php include ("../core/ressources/captcha/index.php"); ?><br>
        <input type="submit" id="submit" class="contact-button" value="Envoyer">

        <p class="p-contact">
        En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de ma demande 
        et de la relation commerciale qui peut en découler. Pour connaître et exercer vos droits, notamment de retrait de 
        votre consentement à l'utilisation des données collectées par ce formulaire, veuillez consulter 
        <a class="link-p-contact" href="MentionsLegales.php"> Mentions légales</a>.
        </p>
    </form><br><br>
  </div>  <!-- Fin du formulaire de la page de contact -->

  <!-- Informations complémentaires (Horaires, Maps) -->
  <div class="infos-contact">
    <div> 
      <h1>Où nous trouver ?</h1>

      <!--Map Google pour localiser l'entreprise -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.895109775!2d-1.6947987843518588!3d48.11225907922141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2bde801f29%3A0x806ac17949d08c0e!2sAstuce%20PC!5e0!3m2!1sfr!2sfr!4v1579182810185!5m2!1sfr!2sfr" width="550" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div> 
      <h1>Quand nous rendre visite ?</h1>

      <p class="horaires"> 
        Du lundi au vendredi :	14:00 – 19:00 <br>

        Sinon vous pouvez nous joindre au 02-23-46-75-75
      </p>
    </div>
  </div>
</div> <!-- Fin de la page contact -->

 <!-- Pied de page -->
<?php require_once '../core/inclusions/html_pied2.html'; ?>
