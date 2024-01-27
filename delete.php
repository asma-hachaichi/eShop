<?php
	session_start();
    include('./CRUD/panierCRUD.php');
    require_once 'connectdb.php';
    $id=$_GET['idpl'];
    $res_data = delete($conn,$id);
    header('location:panier.php');
?>