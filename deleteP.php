<?php
	session_start();
    include('./CRUD/produitCRUD.php');
    require_once 'connectdb.php';
    $id=$_GET['idp'];
    $res_data = delete($conn,$id);
    header('location:produita.php');
?>