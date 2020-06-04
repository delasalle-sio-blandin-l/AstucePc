<?php
    // connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
    include("inclusions/_inc_connexion.php");
      
	// Récupération des données saisies dans le formulaire grâce à la méthode POST
	$libelle = $_POST['libelle'];

	// Requête d'insertion sécurisée permettant d'ajouter une categorie à la base de données
	$req_pre = $cnx->prepare("INSERT INTO `familleproduits`(`famillePdtRef`, `famillePdtLibelle`) VALUES  ('', :val2)"); 

	// Variable lié  à la requête SQL
	$req_pre->bindValue(':val2', $_POST['libelle'], PDO::PARAM_STR);
	// Execution de la requête
	$req_pre->execute();

	// fermeture du curseur associé à un jeu de résultats
	$req_pre->closeCursor();
    header ("Refresh: 0;URL=affichageCategorie.php"); 
?>