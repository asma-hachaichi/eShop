<?php
function selection($link)
{
	$sql = "SELECT *  FROM produit";
	$result=mysqli_query($link,$sql);
	return $result;
}
function readById($conn,$identifiant){
	$sql = "SELECT *  FROM produit WHERE idp=$identifiant";
	$result=mysqli_query($conn,$sql);
	return $result;
}
function selectioncata($link,$cat)
{
	$sql = "SELECT *  FROM produit WHERE id_cat=$cat";
	$result=mysqli_query($link,$sql);
	return $result;
}
function delete($link,$id)
{
	$sql = "Delete FROM produit where idp='$id'";
	$result=mysqli_query($link,$sql);
	return $result;
}
?>