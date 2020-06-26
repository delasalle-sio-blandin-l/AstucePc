<?php
	session_start();
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php';
    require_once 'inclusions/html_tete.html';
?>
	<!-- Contenu de la page -->
	<div class="admin-index">
		<div class=admin-index-contenu>
			<h2>CONNEXION</h2>
			<!-- Formulaire de connexion -->
			<div class="admin-form-connexion">
				<form class="form-contact-contenu" METHOD="POST" action="login.php?action=connexion">
					<label>Identifiant :</label><br><input name="identifiant" type="text" pattern="^[a-zA-Z' \-]+$" class="input-identifiant" maxlength="25" size="25" placeholder="Entrez votre identifiant" required><br>
					<label>Mot de passe :</label><br>
					<div class="afficher-mdp">
						<input name="mdp" id="mdp" type="password" class="input-mdp" maxlength="25" size="25" placeholder="Entrez votre mot de passe" required />
						<img class="img-view-password" id="monBouton" src="../core/ressources/images/view.png" alt="icon-affiche-mdp">
					</div><br>
					<button class="admin-button-connexion" name="submit" type="submit" value="Connexion">Connexion</button>
				</form>
			</div>
		</div>
		
		<!-- Pied de page -->
		<?php require_once 'inclusions/html_pied.html'; ?>
	</div>
</body>
</html>