<?php
    // connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");

    // Récupération des données précedement renseignées
    $ref = $_POST['reference'];
    $libelle = $_POST['Libelle'];
		
    // Préparation de la requête de modification d'un produit
	$req_pre = $cnx->prepare("UPDATE `familleproduits` SET `famillePdtLibelle`= :libelle WHERE `famillePdtRef`= :ref");
    // Variable lié a la requête SQL
    $req_pre->bindValue(':libelle', $_POST['Libelle'], PDO::PARAM_STR);
    $req_pre->bindValue(':ref', $_POST['reference'], PDO::PARAM_INT);
    // Execution de la requête
    $req_pre->execute();

    // fermeture du curseur associé à un jeu de résultats
	$req_pre->closeCursor();
		
	header ("Refresh: 0;URL=affichageCategorie.php"); exit(); 