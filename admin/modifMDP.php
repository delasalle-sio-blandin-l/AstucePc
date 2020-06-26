<?php
// connexion à la base de données
include("inclusions/_inc_parametres.php"); 
include("inclusions/_inc_connexion.php");

// Permettant de faire en sorte que le texte soit encodé et lisible
header('Content-type: text/html; charset=utf-8');

// Récupération des données précedement renseignées
$newMDP= $_POST['newMDP'];

if(strlen($newMDP) < 12 || !preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $newMDP)){
    echo 'Votre mot de passe doit contenir au moins 1 majuscule, 1 chiffre et 1 caractère spéciale';
    header ("Refresh: 4;URL=affichageModifPassword.php"); exit();
} else {
    $newMDP = password_hash($newMDP, PASSWORD_DEFAULT);
    
    // Préparation de la requête de modification d'un produit
    $req_pre = $cnx->prepare("UPDATE `admin` SET `mdp`= :newMDP, `actuRef`= 1");
    // Variable lié a la requête SQL
    $req_pre->bindValue(':newMDP', $newMDP, PDO::PARAM_STR);
    // Execution de la requête
    $req_pre->execute();

    // fermeture du curseur associé à un jeu de résultats
    $req_pre->closeCursor();
    
    echo 'Votre mot de passe a bien été changé';
        
    header ("Refresh: 3;URL=affichageModifPassword.php"); exit(); 
}

    