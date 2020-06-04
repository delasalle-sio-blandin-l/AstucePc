<?php

// Fichiers de connexion à la base de données
include("core/inclusions/_inc_parametres.php"); 
include("core/inclusions/_inc_connexion.php");

// Requête SQL permettant de selectionner toutes les pièces détachées stockée dans la base de données
$req_pre = $cnx->prepare("SELECT * FROM actualites");
$req_pre->execute();
//le résultat est récupéré sous forme d'objet
$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
// Boucle permettant de parcourir toutes les donnes de la base de données
while($ligne) 
{		
    echo $ligne->texteActu;
    $ligne=$req_pre->fetch(PDO::FETCH_OBJ);
}
// fermeture du curseur associé à un jeu de résultats
$req_pre->closeCursor();

require_once 'index.php';