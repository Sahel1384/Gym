<?php
include 'connect.php';
$sid = $_GET['id'];

$Dquery = "DELETE from cust_info where C_ID = $sid";
$dex = $pdo->query($Dquery);

header('location: dashboard.php');


?>