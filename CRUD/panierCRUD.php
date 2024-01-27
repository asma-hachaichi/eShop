<?php
function selection($link)
{
	$sql = "SELECT idpl,img,libelle,prix,qtte FROM produit,panier WHERE produit.idp=panier.idpl";
	$result=mysqli_query($link,$sql);
	return $result;
}
function delete($link,$id)
{
	$sql = "Delete FROM panier where idpl='$id'";
	$result=mysqli_query($link,$sql);
	return $result;
}
?>