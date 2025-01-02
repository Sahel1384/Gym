<?php
include 'connect.php';
$sid = $_GET['id'];

$Dquery = "DELETE from client_confirmation where id = $sid";
$dex = $pdo->query($Dquery);

header('location: dashboard.php');


?>