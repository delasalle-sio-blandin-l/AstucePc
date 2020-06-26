<?php
	// Connexion à la base de données
    include("../core/inclusions/_inc_parametres.php"); 
    include("../core/inclusions/_inc_connexion.php");

	// Permettant de faire en sorte que le texte soit encodé et lisible
    header('Content-type: text/html; charset=utf-8');
    

        // Récupération des données saisies dans le formulaire de contact grâce à la méthode POST
	    $prenom = htmlspecialchars($_POST['prenom']);
	    $nom = htmlspecialchars($_POST['nom']);
	    $email = htmlspecialchars($_POST['email']);
	    $sujet = htmlspecialchars($_POST['sujet']);
	    $message = htmlspecialchars($_POST['message']);
        $telephone = htmlspecialchars($_POST['telephone']);


	    // FONCTION ENVOIE DE MAIL

	    if (filter_var($email, FILTER_VALIDATE_EMAIL))
	    {
            // Redirection vers la page d'accueil
            header ("Refresh: 5;URL=../index.php");
            // adresse du destinataire (Votre adresse) !!
            $adresseDestinataire = $email;
            // $headers = 'From: ' . $email . "\r\n" .
            // 'Reply-To: astucepc@alwaysdata.net' . "\r\n" .
            // 'X-Mailer: PHP/' . phpversion();

            // Fonction mais permettant d'envoyer un mail avec différents paramètres
            if(mail($adresseDestinataire, $sujet, $message))
            {
                // mail bien envoyé
                header ("Refresh: 5;URL=../index.php");
                echo "Votre mail a bien été envoyé, nous allons vous répondre dans les meilleurs délais";
            } else {
                // Mail non envoyé et redirection vers la page contact
                header ("Refresh: 5;URL=../Front/Contact.php");
                echo "Votre mail n'a pas pu être envoyé";
            }     
	    }

        // Requête d'ajout sécurisée du prenom, nom, telephone et mail dans la table client 
        $req_pre = $cnx->prepare("INSERT INTO contact (nom, prenom, telephone, mail)
        VALUES (:val1,:val2,:val3,:val4)"); 
                    
        // Affectation des valeurs de la requêtes
        $req_pre->bindValue(':val1', $nom, PDO::PARAM_STR);
        $req_pre->bindValue(':val2', $prenom, PDO::PARAM_STR);
        $req_pre->bindValue(':val3', $telephone, PDO::PARAM_STR);
        $req_pre->bindValue(':val4', $email, PDO::PARAM_STR);
        $req_pre->execute();

        // fermeture du curseur associé à un jeu de résultats
        $req_pre->closeCursor();