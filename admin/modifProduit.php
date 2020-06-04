<?php
    // connexion à la base de données
	include("inclusions/_inc_parametres.php"); 
	include("inclusions/_inc_connexion.php");

    // Récupération des données précedement renseignées
    $ref = $_POST['reference'];
    $libelle = utf8_encode($_POST['Libelle']);
    $description = utf8_encode($_POST['Description']);
    $prix = $_POST['Prix'];
    $image = $_POST['Image'];
    $familleProduit = $_POST['FamilleProduit'];
		
    // Préparation de la requête de modification d'un produit
	$req_pre = $cnx->prepare("UPDATE `produit` SET `pdtLibelle`= :libelle,
    `pdtDescription`= :description, `pdtPrix`= :prix, `pdtImage`= :image, `famillePdtLibelle`= :famillePdt WHERE `pdtRef`= :ref");
    // Variable lié a la requête SQL
    $req_pre->bindValue(':libelle', utf8_encode($_POST['Libelle']), PDO::PARAM_STR);
    $req_pre->bindValue(':description', utf8_encode($_POST['Description']), PDO::PARAM_STR);
    $req_pre->bindValue(':prix', $_POST['Prix'], PDO::PARAM_STR);
    $req_pre->bindValue(':image', $_POST['Image'], PDO::PARAM_STR);
	$req_pre->bindValue(':famillePdt', $_POST['FamilleProduit'], PDO::PARAM_STR);
    $req_pre->bindValue(':ref', $_POST['reference'], PDO::PARAM_INT);
    // Execution de la requête
    $req_pre->execute();

    // fermeture du curseur associé à un jeu de résultats
	$req_pre->closeCursor();
		
	header ("Refresh: 0;URL=affichageProduit.php"); exit(); 