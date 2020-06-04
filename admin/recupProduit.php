<?php
	//Inclusions de la barre de navigation (html_tete2.html) et le fichier config (config.php)
	require_once __DIR__.'/inclusions/config.php';
	require_once DOSS_INC.'/html_tete2.html';
	// Fichier de connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");

	// Si on demande de modifier un produit.
	if (isset($_GET['modifier_produit'])) 
	{
		// On récupère les informations du produit correspondante $_GET['modifier_produit'].
		// préparation de la requête permettant de selectionner les données du produit avec son id
		$req_pre = $cnx->prepare("SELECT * FROM produit WHERE pdtRef = :ref");
		// Variable lié à la requête SQL
		$req_pre->bindValue(':ref', $_GET['modifier_produit'], PDO::PARAM_INT);
		$req_pre->execute();
		//le résultat est récupéré sous forme d'objet
		$liste=$req_pre->fetch(PDO::FETCH_OBJ);
		
		// On place les données dans des variables.
		$libelle = $liste->pdtLibelle;
		$prix = $liste->pdtPrix;
		$image = $liste->pdtImage;
		$familleProduit = $liste->famillePdtLibelle;
		$description = $liste->pdtDescription;
		$ref = $liste->pdtRef;
	}

	require('affichageModifProduit.php');
?>