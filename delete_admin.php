<?php
include 'connect.php';
$sid = $_GET['id'];

$Dquery = "DELETE from dashboard_sign_up where id = $sid";
$dex = $pdo->query($Dquery);

header('location: dashboard.php');


?>