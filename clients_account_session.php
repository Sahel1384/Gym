<?php
// include('connect.php');
session_start();
if(!isset($_SESSION['clients_login'])){
    header('location: clients_login.php');
}
?>