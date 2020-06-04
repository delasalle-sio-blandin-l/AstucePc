    <?php
        //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
        require_once __DIR__.'/inclusions/config.php';
		require_once DOSS_INC.'/html_tete2.html';
		// Fichier de connexion à la base de données
		include("inclusions/_inc_parametres.php"); 
		include("inclusions/_inc_connexion.php");
    ?>

	<!-- Début de la page produit -->
	<h1>Ajouter une catégorie</h1>
	<!-- Lien permettant d'ajouter un produit -->
    <a class="lien-ajout-produit" href="affichageAjoutCategorie.php">Ajouter une catégorie</a>
		<!-- Affichage des produits stockés stocké dans la base -->
		<table>
            <section class="produit">
                <thead><tr><td>Libelle</td><td>Modifier</td><td>Supprimer</td></tr></thead>
                
                <?php
                    // Préparation de la requête : Selection des produits stockés dans la base de données
                    $req_pre = $cnx->prepare("SELECT * FROM familleproduits");
                    $req_pre->execute();
                    //le résultat est récupéré sous forme d'objet
					$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
					// Boucle parcourant les produits de la base de données
                    while($ligne) 
                    {		
						?>
						<!-- Affichage des produits dans la base --> 
						<tr><tr></tr><tr></tr>
							<td><span> <?php echo $ligne->famillePdtLibelle ?> </span></td>
							<!-- Modification et suppression des produits -->
							<td><?php echo '<a href="recupCategorie.php?modifier_categorie=' . $ligne->famillePdtRef . '">'; ?><span>X</span></a></td>
							<td><?php echo '<a href="supprimerCategorie.php?supprimer_categorie=' . $ligne->famillePdtRef . '">'; ?><span>X</span></a></td>
							
						</tr>
						<?php
						$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
            		} // Fin de la boucle qui liste les news.
            	?>
        	</section>
		</table></br></br>
</body>
</html>