<?php
function selection($link)
{
	$sql = "SELECT * FROM client";
	$result=mysqli_query($link,$sql);
	return $result;
}
function delete($link,$id)
{
	$sql = "Delete FROM commande where idc=$id";
	$result=mysqli_query($link,$sql);
	$sql = "Delete FROM client where idc='$id'";
	$result=mysqli_query($link,$sql);
	
	return $result;
}
?>