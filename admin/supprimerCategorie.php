<?php
	// connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");
	
	// Suprimer un produit
	if (isset($_GET['supprimer_categorie']))
	{
		// Alors on supprime la catégorie correspondante.
		$_GET['supprimer_categorie'] = addslashes($_GET['supprimer_categorie']);
		$cnx->exec("DELETE FROM familleproduits WHERE famillePdtRef ='".$_GET['supprimer_categorie']."'");

		header ("Refresh: 0;URL=affichageCategorie.php");
	}
?>