<?php
    //Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
    require_once __DIR__.'/inclusions/config.php';
	require_once DOSS_INC.'/html_tete2.html';
	// Fichier de connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");
?>
	<!-- Affichage des actualités stockées dans la base -->
	<table>
        <section class="actualite">
            <thead><tr><td>Infos</td><td>Modifier</td></tr></thead>
                
            <?php
                // Préparation de la requête : Selection des actualités stockées dans la base de données
                $req_pre = $cnx->prepare("SELECT * FROM actualites");
                $req_pre->execute();
                //le résultat est récupéré sous forme d'objet
				$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
				// Boucle parcourant les actualités de la base de données
                while($ligne) 
                {		
			?>
					<!-- Affichage des actualités --> 
					<tr><tr></tr><tr></tr>
						<td> <span> <?php echo $ligne->texteActu ?> </span> </td>
						<!-- Modification des actualités -->
						<td><?php echo '<a href="modifActualites.php?modifier_actualite=' . $ligne->actuRef . '">'; ?><span>X</span></a></td>	
					</tr>
				<?php
					$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
            	} // Fin de la boucle qui liste les news.
            	?>
        	</section>
	</table></br></br>
</body>
</html>