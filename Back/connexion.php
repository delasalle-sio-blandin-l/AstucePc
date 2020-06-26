<?php

if (isset ($_GET['action']))
{
	// Si on se connecte
	if ( $_GET['action'] == 'connexion' ) 
	{
		$mail = htmlspecialchars($_POST['mail']); 
		$mdp = htmlspecialchars($_POST['mdp']);

		// Démarrage de la session et sauvegarde des informations dans 2 variables
		session_start();
			
		// Inclusions des fichiers de connexion a la base de données
		include("../core/inclusions/_inc_parametres.php"); 
		include("../core/inclusions/_inc_connexion.php");
			
		// Préparation de la requête pour rechercher l'utilisateur
		$req_pre = $cnx->prepare("SELECT * FROM clients WHERE mail = :mail");
		// Variable lié a la requêtes SQL
		$req_pre->bindValue(':mail', $mail, PDO::PARAM_STR);
		$req_pre->execute();
		// Le résultat est récupéré sous forme d'objet
		$ligne=$req_pre->fetch(PDO::FETCH_OBJ);

		$clientRef = $ligne->clientRef;

		if($ligne && password_verify($mdp, $ligne->mdp))
		{
			echo 'Vous êtes connecté';
			// Recuperation de la refClient de la session en court
			$_SESSION['ref'] = $clientRef;

			?>
				<html>
				<head>
					<!-- Redirection vers la page accueil lors de la connexion et de la reussite de celle ci -->
					<meta http-equiv="refresh" content="1 ; url=../index.php"> 
				</head> 
				<body> 
				</body> 
				</html>
			<?php
		} else {
			?>
				<h2>Erreur</h2>
				<p>Mot de passe incorrect (attention au majuscule/minuscule).</p>

				<html>
				<head>
					<!-- Redirection vers la page connexion si le mot de passe n'est pas bon -->
					<meta http-equiv="refresh" content="2 ; url=../Front/ConnexionClients.php"> 
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
