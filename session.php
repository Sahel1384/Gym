<?php
// include('connect.php');
session_start();
if(!isset($_SESSION['log'])){
    header('location: login.php');
}
?>