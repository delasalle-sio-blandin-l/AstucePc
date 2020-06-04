<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    require_once __DIR__.'/inclusions/config.php'; 
	require_once DOSS_INC.'/html_tete.html';
?>

<!-- Formulaire d'inscription des clients -->
<div class="form-connexion-client">
    <h1>FORMULAIRE DE CONNEXION</h1>
	<form class="form-connexion-contenu" METHOD="POST" action="">
		<label>Identifiant :</label><br><input name="identifiant" type="text" class="input-identifiant" maxlength="25" size="25" placeholder="Entrez votre identifiant"><br>
        <label>Mot de passe :</label><br><input name="mdp" type="password" class="input-password" maxlength="25" size="25" placeholder="Entrez votre mot de passe" required /><br>

		<button class="connexion-button" type="submit" value="Connexion">Connexion</button>
	</form>
</div>

<p>Vous n'avez pas de compte ? <a class="" href="vueInscriptionClients.php">Cliquez-ici</a></p>



<!--pied de page-->
<?php require_once DOSS_INC.'/html_pied.html'; ?>