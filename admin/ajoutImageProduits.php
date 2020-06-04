<?php 

require_once __DIR__.'/inclusions/config.php';
// Fichier de connexion à la base de données
include("inclusions/_inc_parametres.php"); 
include("inclusions/_inc_connexion.php");

// Importation de l'image
$image = $_FILES["userfile"]["name"];

if($image)
{

    // Récupération du nom de l'image et de l'extension
    $name = explode(".", $image);

    // Image sans extension
    $img = $name[0];

    // Récupération de l'extension de l'image
    $extensionImage = $name[1];

    $tname = $_FILES["userfile"]["tmp_name"]; 

    $uploads_dir = '../core/ressources/images/produits';

    // On crée un tableau avec les extensions autorisées
    $legalExtensions = "png";

    move_uploaded_file($tname, $uploads_dir.'/'.$img.'.'.$legalExtensions);

    ?>
    <!-- importation reussi -->
    <p align="center" >- Importation validé -</p>
    <?php header ("Refresh: 2;URL=affichageAjoutImageProduit.php"); exit();

} else {
?>
    <!-- importation échoué -->
    <p align="center" >- Importation échouée -</p>
    <?php header ("Refresh: 2;URL=affichageAjoutImageProduit.php"); exit(); 
}
?>