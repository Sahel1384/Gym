<?php
// include('connect.php');
session_start();
if(!isset($_SESSION['log'])){
    header('location: login.php');
    exit;
}
else{
    session_destroy();
    header('location: login.php');
    $pdo=null;
}
?>