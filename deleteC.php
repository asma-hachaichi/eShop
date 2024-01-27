<?php
	session_start();
    include('./CRUD/clientCRUD.php');
    require_once 'connectdb.php';
    $id=$_GET['idc'];
    $res_data = delete($conn,$id);
    header('location:clienta.php');
?>