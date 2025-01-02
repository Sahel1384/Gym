<?php
// include('connect.php');
session_start();
if(!isset($_SESSION['clients_login'])){
    header('location: clients_login.php');
    exit;
}
else{
    session_destroy();
    header('location: index.php');
    $pdo=null;
}
?>