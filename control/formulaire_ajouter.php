<?php
	require('model/panier.class.php');

	if(!isset($_SESSION["panier"]))
		$_SESSION["panier"]= new  Panier();
	$nouveauPanier = new Panier() ;
	$nouveauPanier = Panier::affecter($_SESSION["panier"]) ;
	if(isset($_GET['action'])){
		if($_GET['action'] == "modifier"){
			$libelleBouton = "Modifier quantité";
			$quantite = $nouveauPanier->getUneRevue($_GET['num'])->quantite;
		}else{
			$libelleBouton = "Ajouter abonnement";
			$quantite = 1;
		}
	}else{
		$libelleBouton = "Ajouter abonnement";
	}
	
	include('views/formulaire_ajouter.php');
?>