<?php
include('connect.php');
session_start();
if(!isset($_SESSION['registration_sign_in'])){
    header('location: Regisration_sign_in.php');
    exit;
}
else{
    session_destroy();
    header('location: index.php');
    $pdo=null;
}
?>