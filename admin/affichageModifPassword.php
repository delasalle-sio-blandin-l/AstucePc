<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php';
    require_once 'inclusions/html_tete2.html';
?>
	<!-- Contenu de la page -->
	<div class="admin-index">
		<div class=admin-index-contenu>
			<h2>MODIFIER VOTRE MOT DE PASSE</h2>
			<!-- Formulaire de connexion -->
			<div class="admin-form-modifMDP">
				<form class="form-modifMDP-contenu" METHOD="POST" action="ModifMDP.php">
					<label>Nouveau mot de passe :</label><br>
					<div class="afficher-mdp">
						<input name="newMDP" id="newMDP" type="password" class="input-modif-mdp" maxlength="8" size="8" placeholder="Entrez votre nouveau mot de passe" required />
						<img class="img-view-password" id="monBouton" src="../core/ressources/images/view.png" alt="icon-affiche-mdp">
					</div><br>
					
                    <button class="admin-button-connexion" name="submit" type="submit" value="Modifier">Modifier</button>
                </form>
			</div>
		</div>
		
		<!-- Pied de page -->
		<?php require_once 'inclusions/html_pied.html'; ?>
	</div>

	<script src="ressources/js/viewPassword.js"></script>
</body>
</html>
