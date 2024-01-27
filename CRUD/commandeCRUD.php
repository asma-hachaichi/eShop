<?php
function getById($conn,$identifiant){
	$sql = "SELECT * FROM client WHERE idc=$identifiant";
	$result=mysqli_query($conn,$sql);
	return $result;
}
function Lcommande($conn,$identifiant){
	$sql = "SELECT * FROM commande WHERE idc=$identifiant";
	$result=mysqli_query($conn,$sql);
	return $result;
}
?>