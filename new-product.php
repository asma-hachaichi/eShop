<?php
session_start();
require_once 'connectdb.php';

if($_POST)
{

		extract($_POST);
		$imgname=$_FILES['image']['name'];
		$req="SELECT `id_cat` from `Catalogue` WHERE `nom`='$catalogue'";
		$result=mysqli_query($conn,$req);
		$cat = $result->fetch_assoc();
		$cat2=$cat['id_cat'];
		$sql = "INSERT INTO `produit`( `id_cat`,`libelle`, `description`,`img`, `prix`,`categorie`) 
		VALUES ('$cat2','$nom','$desc','$imgname','$prix','$categorie')" ;
		$req=mysqli_query($conn,$sql);
		if ($req) {
		$_SESSION['info'] = "Produit ajouté";
		header('location:ajout-produit.php');
		} 
		else 
		{
		$_SESSION['info'] = "Erreur lors de l'ajout";
		 header('location:ajout-produit.php');
		}
}
?>