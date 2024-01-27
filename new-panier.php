<?php
session_start();
require_once 'connectdb.php';
$id=$_SESSION['identifiant'];

if($_POST)
	{
		extract($_POST);
		$sql = "INSERT INTO `Panier`( `idpl`,`qtte`) VALUES ('$id','$Qu')" ;
		$req=mysqli_query($conn,$sql);
		if ($req) {
		$_SESSION['infopa'] = "commande ajouté au panier";
		#header('location:details_produit.php?identifiant='.$id);
		header('location:shop.php');
		} 
		else 
		{
		$_SESSION['infopa'] = "Erreur lors de l'ajout";
		#header('location:details_produit.php?identifiant='.$id);	
		header('location:shop.php');	
	}
	}