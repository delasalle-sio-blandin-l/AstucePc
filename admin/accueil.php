<?php 
	// Ouverture d'une session utilisateur
	session_start();
?>
	
<div>
	<?php 
	// Si on est connecté on affiche le contenu plus bas
	if (isset($_SESSION['ref']))
	{
			//Inclusions de la barre de navigation (html_tete2.html), le fichier config (config.php) et ouverture d'une session utilisateur
			//require_once __DIR__.'/inclusions/config.php';
			require_once 'inclusions/html_tete2.html';	
	?>
		<!-- Contenu de la page accueil de l'espace administration -->
		<h2>ACCUEIL</h2>
		<h4>Bienvenue dans l'espace administrateur. </h4></br></br>
		<p class="admin-accueil-texte">
			Cliquez sur les onglets pour gérer les produits, les images, les textes et les actualités</br></br>
			Par sécurité, n'oubliez pas de cliquer sur le lien "Déconnexion" une fois vos tâches accomplies.
		</p>

		<!-- Pied da page -->
		<footer>
			<p>Espace Administrateur Astuce PC</p>
		</footer>
		</body>
		</html>
			
	<?php 
	} 
	?>
</div>