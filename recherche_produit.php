<?php
$conn = new mysqli('localhost','root', '', 'shop');
session_start();

if ($_SESSION['cat']==3)
{
	$x=3;
}
else if ($_SESSION['cat']==2)
{
	$x=2;
}
else {$x=1;}
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM produit WHERE id_cat=$x AND libelle LIKE '".$search."%' ";


$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result)){

 $output .='<div class="col">
	<div class="p-5 border ">
	<center><img src="./img_prod/'.$row['img'].'" height=150px width=150px>
	<hr/>
	<h4>'.$row['libelle'].'</h4>
	<h6>Prix :'.$row['prix'].'$</h6>
	<hr/>
	<a class="btn btn-primary" href="details_produit.php?identifiant='.$row['idp'].'" role="button">Voir Plus</a></center>
	</div>
	</div>';
 } 
}
}
else {

 $query ="SELECT * FROM produit WHERE id_cat=$x";
 $result = mysqli_query($conn, $query);

 
 if(mysqli_num_rows($result) > 0)
	{while($row = mysqli_fetch_array($result)){
 		$output .='<div class="col">
		<div class="p-5 border ">
		<center><img src="./img_prod/'.$row['img'].'" height=150px width=150px>
		<hr/>
		<h4>'.$row['libelle'].'</h4>
		<h6>Prix :'.$row['prix'].'$</h6>
		<hr/>
		<a class="btn btn-primary" href="details_produit.php?identifiant='.$row['idp'].'" role="button">Voir Plus</a></center>
		</div>
		</div>';
	 }
	}else {
		$output.='Aucun resultat';
	}
}
echo $output;

?>