<?php
    //Inclusions de la barre de navigation (html_tete.html) et le fichier config (config.php)
    //require_once __DIR__.'/inclusions/config.php';
	require_once '../core/inclusions/html_tete2.html';
	// Fichiers de connexion à la base de données
	include("../core/inclusions/_inc_parametres.php"); 
	include("../core/inclusions/_inc_connexion.php");

?>
<!-- Filtre produit -->
<form class="form-filtre-produit" method="get">
	<select name="filtre-produit" >
		<option value="none" disabled hidden selected >Choisissez une catégorie</option>

		<!-- Inclusion des choix de la iste déroulante en dynamique -->
		<?php require_once '../Back/filtreProduit.php' ?> 

	</select>
	<input type="submit" class="btn-filtre-produit" value="Filtrer">
	<a href="Produits.php" class="btn-filtre-produit">Tout afficher</a>
</form><br>

<!-- Début de la page produit -->       
<h1>NOS PRODUITS</h1>

<!-- Affichage des produits stockées dans la base -->
<section class="produits">

	<?php
	//Mettre if si parametre GET sinon Select * from produit
	if(isset($_GET['filtre-produit'])) {
		//Requête SQL permettant de selectionner toutes les produits stockée dans la base de données
		$req_pre = $cnx->prepare("SELECT * FROM produit WHERE famillePdtLibelle = '".$_GET['filtre-produit']."'");
	} else {
		//Requête SQL permettant de selectionner toutes les produits stockée dans la base de données
		$req_pre = $cnx->prepare("SELECT * FROM produit");
	}
	$req_pre->execute();

	//Le résultat est récupéré sous forme d'objet
	$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
		
	//Boucle permettant de parcourir toutes les donnes de la base de données
    while($ligne) {
	?>
		<div class="wrapper">
            <div class="product-img">
				<img alt="Produit mis en vente" src="../core/ressources/images/produits/<?php echo $ligne->pdtImage ?>.png" height="420" width="327">
			</div>
			<div class="product-info">
				<div class="product-text">
					<h1><?php echo $ligne->pdtLibelle ?></h1>
					<h2><?php echo $ligne->famillePdtLibelle ?></h2>
					<p><?php echo $ligne->pdtDescription ?></p>
				</div>
				<div class="product-price-btn">
					<p>Prix : <span><?php echo $ligne->pdtPrix ?></span>€</p>
					<button type="button">Ajouter au panier</button>
				</div>
			</div>
        </div>
    <?php 
    $ligne=$req_pre->fetch(PDO::FETCH_OBJ);
	}
	// fermeture du curseur associé à un jeu de résultats
    $req_pre->closeCursor();
	?>
</section> <!-- Fin de l'affichage des produits -->


<!--pied de page-->
<?php require_once '../core/inclusions/html_pied2.html'; ?>