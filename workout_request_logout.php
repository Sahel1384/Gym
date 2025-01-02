<?php
include('connect.php');
session_start();
if(!isset($_SESSION['workout_request_insert_login'])){
    header('location: workout_request_insert_login.php');
    exit;
}
else{
    session_destroy();
    header('location: index.php');
    $pdo=null;
}
?>