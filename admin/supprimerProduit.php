<?php
	// connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");
	
	// Suprimer un produit
	if (isset($_GET['supprimer_produit']))
	{
		// Alors on supprime le produit correspondant.
		$_GET['supprimer_produit'] = addslashes($_GET['supprimer_produit']);
		$cnx->exec("DELETE FROM produit WHERE pdtRef ='".$_GET['supprimer_produit']."'");

		header ("Refresh: 0;URL=affichageProduit.php");
	}
?>