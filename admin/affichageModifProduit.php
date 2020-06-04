<!-- Formulaire de modification de produit -->
<div class="form-modification-produit">
        <h1>MODIFIER PRODUIT</h1>
			<form class="form-modification-produit-contenu" METHOD="POST" ACTION="modifProduit.php">
				<input type="hidden" name="reference" value="<?php echo $liste->pdtRef; ?>">
				<label>Libelle :</label><br><input name="Libelle" type="text" class="input-libelle" maxlength="200" size="25" value="<?php echo $libelle; ?>"><br>
				<label>Description :</label><br><input name="Description" type="text" class="input-description" maxlength="200" size="25" value="<?php echo $description; ?>"><br>
				<label>Prix :</label><br><input name="Prix" type="number" class="input-prix" maxlength="4" size="25" value="<?php echo $prix; ?>"><br>
				<label>Image :</label><br><input name="Image" type="text" class="input-image" maxlength="200" size="25" value="<?php echo $image; ?>"><br>
				<label>Famille de produit :</label><br><input name="FamilleProduit" type="text" class="input-familleProduit" maxlength="25" size="25" value="<?php echo $familleProduit; ?>"><br>
			
				<!--<input type="hidden" name="id" value="<?php echo $ref; ?>" />-->
				<input type="submit" id="submit" class="modification-produit-button" value="Modifier">
			</form>
	</div> <!-- Fin du formulaire -->
 
	<!-- Pied de page -->
	<footer class="retour-produit">
		<a href="affichageProduit.php">Retour à la liste des produits</a>
	</footer>
</body>
</html>