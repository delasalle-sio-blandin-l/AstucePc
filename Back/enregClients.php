<?php
	// Connexion à la base de données
    include("../core/inclusions/_inc_parametres.php"); 
    include("../core/inclusions/_inc_connexion.php");

	// Permettant de faire en sorte que le texte soit encodé et lisible
    header('Content-type: text/html; charset=utf-8');
    

        // Récupération des données saisies dans le formulaire de contact grâce à la méthode POST
        $nom = $_POST['nom'];
	    $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $rue = $_POST['rue'];
        $ville = $_POST['ville'];
        $cp = $_POST['codePostal'];
        $telephone = $_POST['telephone'];
        $mdp = $_POST['mdp'];


	    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

	    // FONCTION ENVOIE DE MAIL

	    // if (filter_var($email, FILTER_VALIDATE_EMAIL))
	    // {
        //     // Redirection vers la page d'accueil
        //     header ("Refresh: 5;URL=../index.php");
        //     // adresse du destinataire (Votre adresse) !!
        //     $adresseDestinataire = $email;

        //     // Fonction mais permettant d'envoyer un mail avec différents paramètres
        //     mail($adresseDestinataire, $sujet, $message);
        //     //Le mail a bien été envoyé
        //     echo 'Votre message a bien été reçu';
	    // }
	    // else
	    // {
        //     // Mail non envoyé et redirection vers la page contact
        //     header ("Refresh: 5;URL=../Front/Contact.php");
        //     echo 'Erreur, message non envoyé.';
	    // }

        // Requête d'ajout sécurisée du prenom, nom, telephone et mail dans la table client 
        $req_pre = $cnx->prepare("INSERT INTO `clients`(`nom`, `prenom`, `mail`, `mdp`, `telephone`, `ville`, `rue`, `cp`) 
        VALUES (:nom,:prenom,:email,:mdp,:telephone,:ville,:rue,:cp)"); 
                    
        // Affectation des valeurs de la requêtes
        $req_pre->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req_pre->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $req_pre->bindValue(':email', $email, PDO::PARAM_STR);
        $req_pre->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req_pre->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $req_pre->bindValue(':ville', $ville, PDO::PARAM_STR);
        $req_pre->bindValue(':rue', $rue, PDO::PARAM_STR);
        $req_pre->bindValue(':cp', $cp, PDO::PARAM_INT);
        $req_pre->execute();

        // fermeture du curseur associé à un jeu de résultats
        $req_pre->closeCursor();

        echo 'Bien joué tu es inscris';
        header ("Refresh: 4;URL=../index.php");