<?php
    // connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
    include("inclusions/_inc_connexion.php");
      
	// Récupération des données saisies dans le formulaire grâce à la méthode POST
	$libelle = $_POST['libelle'];
	$prix = $_POST['prix'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$familleProduit = $_POST['familleProduit'];
	$categorie = $_POST['categorie'];
	$sousCategorie = $_POST['sousCategorie'];
		

	// Requête d'insertion sécurisée permettant d'ajouter un produit à la base de données
	$req_pre = $cnx->prepare("INSERT INTO `produit`(`pdtRef`, `pdtLibelle`,  `pdtDescription`, `pdtPrix`, `pdtImage`, `famillePdtLibelle`, `pdtCategorie`, `pdtSousCategorie`) 
	VALUES  ('', :val2, :val3, :val4, :val5, :val6, :val7, :val8)"); 

	// Variable lié  à la requête SQL
	$req_pre->bindValue(':val2', $_POST['libelle'], PDO::PARAM_STR);
	$req_pre->bindValue(':val3', $_POST['description'], PDO::PARAM_STR);
	$req_pre->bindValue(':val4', $_POST['prix'], PDO::PARAM_INT);
	$req_pre->bindValue(':val5', $_POST['image'], PDO::PARAM_STR);
	$req_pre->bindValue(':val6', $_POST['familleProduit'], PDO::PARAM_STR);
	$req_pre->bindValue(':val7', $_POST['categorie'], PDO::PARAM_STR);
	$req_pre->bindValue(':val8', $_POST['sousCategorie'], PDO::PARAM_STR);
	// Execution de la requête
	$req_pre->execute();

	// fermeture du curseur associé à un jeu de résultats
	$req_pre->closeCursor();
    header ("Refresh: 0;URL=affichageProduit.php"); 
?>