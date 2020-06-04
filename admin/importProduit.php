<?php	

// Fichier de connexion à la base de données
include("inclusions/_inc_parametres.php"); 
include("inclusions/_inc_connexion.php");

extract(filter_input_array(INPUT_POST));

// Importation du fichier csv
$fichier = $_FILES["userfile"]["name"];
    if ($fichier)
    {
        // Ouvre le fichier
        $fp = fopen ($_FILES["userfile"]["tmp_name"], "r"); 
    } else {
    ?>
        <!-- importation échoué -->
        <p align="center" >- Importation échouée -</p>
        <p align="center" ><B>Désolé, mais vous n'avez pas spécifie de chemin valide</B></p>
        <?php header ("Refresh: 2;URL=importationCSV.php"); exit();
    }

    // Initialisation du compteur à zéro
    $cpt=0; 
    ?>
    <!-- importation reussi -->
    <p align="center" >- Importation reussie -</p>


    
    <?php

    // Boucle jusqu'a la fin du fichier
    while (!feof($fp))
    {
        // Lecture du fichier avec la fonction fgets
        $ligne = fgets($fp, 4096);

        // Extraction des valeurs séparées par des ;
        $ligne = explode(";", $ligne);
        $table = filter_input(INPUT_POST, 'userfile');

       

        // Séparation de chaque valeur dans le fichier avec une clé précise
        $ligne[0] = ( isset($ligne[0]) ) ? $ligne[0]  :Null;
        $ligne[1] = ( isset($ligne[1]) ) ? $ligne[1]  :Null;
        $ligne[2] = ( isset($ligne[2]) ) ? $ligne[2]  :Null;
        $ligne[3] = ( isset($ligne[3]) ) ? $ligne[3]  :Null;
        $ligne[4] = ( isset($ligne[4]) ) ? $ligne[4]  :Null;
        $ligne[5] = ( isset($ligne[5]) ) ? $ligne[5]  :Null;
        $ligne[6] = ( isset($ligne[6]) ) ? $ligne[6]  :Null;
        $ligne[7] = ( isset($ligne[7]) ) ? $ligne[7]  :Null;

        // Initialisation des valeurs du csv dans une variable qui va être inserée plus tard
        $champs1=$ligne[0];
        $champs2=$ligne[1];
        $champs3=$ligne[2];
        $champs4=$ligne[3];
        $champs5=$ligne[4];
        $champs6=$ligne[5];
        $champs7=$ligne[6];
        $champs8=$ligne[7];
        

        if ($champs1!='')
        {
            //Incrémentation du compteur
            $cpt++; 
            // Insertion dans la base de données avec les valeurs récupéré plus tard
            $req_pre = $cnx->prepare("INSERT INTO `produit`(`pdtRef`, `pdtLibelle`, `pdtDescription`, `pdtPrix`, `pdtImage`, `famillePdtLibelle`, `pdtCategorie`, `pdtSousCategorie`)
            VALUES (:ref, :libelle, :description,  :prix, :image, :famillePdt, :categorie, :sousCategorie)");
            $req_pre->bindValue(':ref', $champs1, PDO::PARAM_INT);
            $req_pre->bindValue(':libelle', $champs2, PDO::PARAM_STR);
            $req_pre->bindValue(':description', $champs3, PDO::PARAM_STR);
		    $req_pre->bindValue(':prix', $champs4, PDO::PARAM_INT);
            $req_pre->bindValue(':image', $champs5, PDO::PARAM_STR);
            $req_pre->bindValue(':famillePdt', $champs6, PDO::PARAM_STR);
            $req_pre->bindValue(':categorie', $champs7, PDO::PARAM_STR);
            $req_pre->bindValue(':sousCategorie', $champs8, PDO::PARAM_STR);
            $req_pre->execute();

            

	        // Fermeture du curseur associé à un jeu de résultats
	        $req_pre->closeCursor();
        }

    }

    // Fermeture du fichier
    fclose($fp);

?>

<!-- Affichage du nombre de valeurs enregistrées dans la base -->
<h4>Nombre de valeurs nouvellement enregistrees : </h4><?php echo $cpt;?>
<?php header ("Refresh: 3;URL=importationCSV.php"); exit();