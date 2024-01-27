<?php
session_start();
require_once 'connectdb.php';
$role='';

if ($_POST){
    extract($_POST);
    $sql = "select * from admin where username='$username' and password=md5('$password')";
    //exécuter
    $result = $conn->query($sql);
    $_SESSION['role']='admin';
    if($result->num_rows==0){
    $_SESSION['role']='client';
    $sql = "select * from client where Username='$username' and password=md5('$password')";
    $result = $conn->query($sql);
    }
    //lire les resultats
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $_SESSION['user']=$row;
        if ($_SESSION['role']=='client'){
        header('location:page_acceuil.php');
    }
        else {
        header('location:accueil-admin.php');   
        }

    }
    else{
        header('location:index.php');
    }
    $conn->close();
}
?>