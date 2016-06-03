<?php
	require("model/panier.class.php");
	$nouveauPanier = Panier::affecter($_SESSION["panier"]) ;
	$nouveauPanier->vider();
	$_SESSION['panier'] = Panier::affecter($nouveauPanier);
	ob_start();
	header("Location: index.php?page=listeRevues");
	ob_flush();
?>