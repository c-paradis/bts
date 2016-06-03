<?php
require("model/panier.class.php");
if(!isset($_SESSION["panier"]))
	$_SESSION["panier"]= new  Panier();
$nouveauPanier = new Panier() ;
$nouveauPanier = Panier::affecter($_SESSION["panier"]) ;

if(isset($_GET["action"])) {
	$nouveauPanier->supprimer($_GET['num']);
}
else {
	if ($_POST["Bt_ajouter"]=="Modifier quantité") {
		$nouveauPanier->getUneRevue($_GET['num'])->setQuantite($_POST['quantite']);
	} else {
		$revue = Revue::recherche($_GET['num']);
		$revue->setQuantite($_POST['quantite']);
		$nouveauPanier->ajouter($revue);
	}
}


$_SESSION["panier"] = Panier::affecter($nouveauPanier);
ob_start();
header("Location:index.php?page=affichePanier");
ob_flush();
?>
