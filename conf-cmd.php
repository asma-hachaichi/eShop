<?php
session_start();
require_once 'connectdb.php';


if($_POST)
{
	    extract($_POST);
		$req="DELETE FROM panier WHERE 1";
		mysqli_query($conn,$req);
		$req = "INSERT INTO commande(`idc`,
         `date_cmd`, `montant_cmd`, `lieu_cmd`,
          `mode_paiement`, `comment`) VALUES 
          ($id,'$date_cmd',$montant,
          '$adresse','$mode','$comment')" ;
		$sql=mysqli_query($conn,$req);
		if ($sql) {
		$_SESSION['infoc'] = "Commande validée !";
        } 
		else 
		{
		$_SESSION['infoc'] = "Erreur lors de la validation de la commande !";
		}
        header('location:compte.php');
}
?>