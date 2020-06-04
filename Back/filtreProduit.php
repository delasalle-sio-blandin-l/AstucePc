<?php 
// Fichiers de connexion à la base de données
include("../core/inclusions/_inc_parametres.php"); 
include("../core/inclusions/_inc_connexion.php");


$resultat = $cnx->query("SELECT * FROM familleproduits ORDER BY famillePdtLibelle ASC;");
$resultat->setFetchMode(PDO::FETCH_OBJ);
$ligne = $resultat->fetch();

$select = isset($_GET['filtre-produit']) ? $_GET['filtre-produit'] : "";

while ($ligne) {
    $selected = $select == $ligne->famillePdtLibelle ? "selected" : "";

	echo'<option value="'.$ligne->famillePdtLibelle.'" '.$selected.'>'.utf8_encode($ligne->famillePdtLibelle)."</option>";
	$ligne = $resultat->fetch();
}