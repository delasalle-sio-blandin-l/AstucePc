<?php

if (isset ($_GET['action']))
{
	// Si on se connecte
	if ( $_GET['action'] == 'connexion' ) 
	{
		$identifiant = $_POST['identifiant']; 
		$mdp = $_POST['mdp'];



		// Démarrage de la session et sauvegarde des informations dans 2 variables
		session_start();
			
		// Inclusions des fichiers de connexion a la base de données
		include("../core/inclusions/_inc_parametres.php"); 
		include("../core/inclusions/_inc_connexion.php");
			
		// Préparation de la requête pour rechercher l'utilisateur
		$req_pre = $cnx->prepare("SELECT * FROM admin WHERE identifiant = :identifiant");
		// Variable lié a la requêtes SQL
		$req_pre->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
		$req_pre->execute();
		// Le résultat est récupéré sous forme d'objet
		$ligne=$req_pre->fetch(PDO::FETCH_OBJ);

		$adminRef = $ligne->adminRef;

		if($ligne && password_verify($mdp, $ligne->mdp))
		{
			echo 'Vous êtes connecté';
			// Recuperation de la refAdmin de la session en court
			$_SESSION['ref'] = $adminRef;

			?>
				<html>
				<head>
					<!-- Redirection vers la page accueil lors de la connexion et de la reussite de celle ci -->
					<meta http-equiv="refresh" content="0 ; url=accueil.php"> 
				</head> 
				<body> 
				</body> 
				</html>
			<?php
		} else {
			?>
				<h2>Erreur</h2>
				<p>Mot de passe ou identifiant incorrect (attention au majuscule/minuscule).</p>

				<html>
				<head>
					<!-- Redirection vers la page connexion si le mot de passe n'est pas bon -->
					<meta http-equiv="refresh" content="2 ; url=connexion.php"> 
				</head> 
				<body> 
				</body> 
				</html>
			<?php 
		}
			
		// Fermeture du curseur associé à un jeu de résultats
		$req_pre->closeCursor();

		
	} 
	
	elseif ( $_GET['action'] == 'deconnexion' )
	{
		// Après avoir cliqué sur le bouton Déconnexion de la page accueil.php de l'espace administrateur 
		// Destruction de la session et retour à la page index.php du site 
		session_start();
		session_destroy(); ?>
		<html>
			<head>
				<meta http-equiv="refresh" content="0 ; url=../index.php">  
			</head> 
			<body> 
			</body> 
		</html>
		<?php
	}
}
else {

} 
?>
