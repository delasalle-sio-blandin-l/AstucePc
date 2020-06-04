<!-- Formulaire d'ajout de produit -->
<div class="form-modification-actualite">
        <h1>MODIFIER ACTUALITE</h1>
			<form class="form-modification-actualite-contenu" METHOD="POST" ACTION="actualites.php">
				<input type="hidden" name="reference" value="<?php echo $liste->actuRef; ?>" />
				<label>Texte :</label><br><textarea name="texte" rows="10" cols="93"><?php echo $texte; ?></textarea>
				
				<button type="submit" id="submit" class="modification-actualite-button" value="Modifier">Modifier</button>
			</form>
	</div> <!-- Fin du formulaire -->

	<p>La limite des caractères pour les actualités sont de 255</p>
 
	<!-- Pied de page -->
	<footer class="retour-actualites">
		<a href="affichageActualite.php">Retour à la liste des actualités</a>
	</footer>
</body>
</html>