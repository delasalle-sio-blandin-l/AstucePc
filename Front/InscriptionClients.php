<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php'; 
	require_once '../core/inclusions/html_tete2.html';
?>

<!-- Formulaire d'inscription des clients -->
<div class="form-inscription-client">
    <h1>FORMULAIRE D'INSCRIPTION</h1>
	<form class="form-inscription-contenu" METHOD="POST" action="../back/enregClients.php">
		<label>Nom :</label><br><input name="nom" type="text" class="input-nom" maxlength="25" size="25" placeholder="Entrez votre nom" required><br>
        <label>Prenom :</label><br><input name="prenom" type="text" class="input-prenom" maxlength="25" size="25" placeholder="Entrez votre prenom" required><br>
        <label>Email :</label><br><input name="email" type="email" class="input-email" maxlength="25" size="25" placeholder="Entrez votre adresse mail" required><br>
        <label>Rue :</label><br><input name="rue" type="text" class="input-rue" maxlength="25" size="25" placeholder="Entrez votre Rue" required><br>
        <label>Ville :</label><br><input name="ville" type="text" class="input-ville" maxlength="25" size="25" placeholder="Entrez votre Ville" required><br>
        <label>Code Postal :</label><br><input name="codePostal" type="text" class="input-cp" maxlength="25" size="25" placeholder="Entrez votre Code Postal" required><br>
        <label>Téléphone :</label><br><input name="telephone" type="text" class="input-telephone" maxlength="25" size="25" placeholder="Entrez votre téléphone"><br>
        <label>Mot de passe :</label><br><input name="mdp" type="password" class="input-password" maxlength="25" size="25" placeholder="Entrez votre mot de passe" required /><br>

		<button class="inscription-button" type="submit" value="Inscription">inscription</button>
	</form>
</div>

<p>Vous avez déjà un compte ? <a class="" href="ConnexionClients.php">Cliquez-ici</a></p>



<!--pied de page-->
<?php require_once '../core/inclusions/html_pied2.html'; ?>