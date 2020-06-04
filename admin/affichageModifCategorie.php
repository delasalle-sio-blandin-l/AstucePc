<!-- Formulaire de modification de produit -->
<div class="form-modification-categorie">
        <h1>MODIFIER CATEGORIE</h1>
			<form class="form-modification-categorie-contenu" METHOD="POST" ACTION="modifCategorie.php">
				<input type="hidden" name="reference" value="<?php echo $liste->famillePdtRef; ?>">
				<label>Libelle :</label><br><input name="Libelle" type="text" class="input-libelle" maxlength="200" size="25" value="<?php echo $liste->famillePdtLibelle; ?>"><br>
			
				<!--<input type="hidden" name="id" value="<?php echo $ref; ?>" />-->
				<input type="submit" id="submit" class="modification-categorie-button" value="Modifier">
			</form>
	</div> <!-- Fin du formulaire -->
 
	<!-- Pied de page -->
	<footer class="retour-categorie">
		<a href="affichageCategorie.php">Retour à la liste des categories</a>
	</footer>
</body>
</html>