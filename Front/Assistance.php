<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
	require_once '../core/inclusions/html_tete2.html';
?>

<!-- Script Javascript pour l'assistance -->
<script type="text/javascript" src="https://www.islonline.net/webapi/api.js?libs=join"></script>

<!-- Contenu de la page -->
<div class="assistance-contenu">

    <!-- Titre (h1) et texte (p) de la page -->
    <h1>ASSISTANCE A DISTANCE</h1>
    <p>
    Besoin <strong>d’un dépannage informatique rapide</strong> directement chez vous ? Profitez de notre 
    <strong>service d’assistance à distance</strong>.<strong>Nos techniciens</strong> peuvent prendre le contrôle de votre 
    machine par internet afin d’effectuer <strong>un diagnostic</strong> et si possible, procéder à son 
    dépannage. En quelques clics, nous pouvons <strong>installer, désinstaller ou optimiser vos 
    logiciels et le système</strong> de votre ordinateur. Après intervention, notre technicien vous 
    contactera par téléphone pour vérifier le bon fonctionnement de votre machine.
    </p><br><br>

    <!-- Formulaire avec saisie du code pour une assistance -->
    <div class="isl-connect-form">
        <form id="assistance-contenu" class="assistance-form-contenu" action="#" method="get" onsubmit="return isl_connect();" name="assistance-contenu">
            <fieldset class="assistance-fieldset">
            <legend class="assistance-titre">Entrez votre code de session et cliquez sur se connecter</legend>
            <div class="assistance-texte-contenu">
                <label class="assistance-texte-code" for="isl-code-field">Code de session</label> 
                <input type="text" name="code" id="isl-code-field" value="" /></div>
                <input type="submit" name="submit" class="assistance-button" value="Se connecter" /></fieldset>
        </form>
        <div id="isl-feedback"></div>
    </div>
</div> <!-- Fin du contenu -->

<!-- Script Javascript -->
<!-- Script tout fait je ne comprends pas toutes les fonctionnalités -->
<!-- Script Javascript pour la prise en main a distance -->

<script type="text/javascript">
//<![CDATA[
    function isl_connect() {
        var doc = document,
            f = doc.getElementById('assistance-contenu'),
            r = doc.getElementById('isl-feedback'),
            is_msie = navigator.userAgent.indexOf('MSIE') >= 0,
            b = null;
        
        ISLOnline.Join.getSessionInfoByCode(
            f.code.value,
            function (info) {
                r.className = 'isl-success';
                r.innerHTML = 'Connecting to session ' + info.getAttribute('sessionCode');
                if (is_msie) {
                    r.innerHTML += ', please click the button below:<br />';
                    r.appendChild(doc.createElement('br'));
                    var b = doc.createElement('input');
                    b.type = 'button';
                    b.name = 'join';
                    b.value = 'Start';
                    b.onclick = function () {
                        info.join();
                    };
                    r.appendChild(b);
                } else {
                    info.join();
                }
            },
            function (error) {
                r.className = 'isl-error';
                r.innerHTML = '<p class="texte-error-assistance">Code de session invalide !</p>';
                /* comment the line above and uncomment the line below if you wish to
                    display the error that is sent by the server */
                //r.innerHTML += error.getDescription();
            }
        );
        return false;
    }
//]]>
</script>


<!--pied de page-->
<?php require_once '../core/inclusions/html_pied2.html'; ?>
