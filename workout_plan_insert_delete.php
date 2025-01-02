<?php
include('connect.php');

if(isset($_GET['id'])){
    $cid = $_GET['id'];
    $delete = "DELETE FROM workout_request WHERE id = $cid";
    $result = $pdo->query($delete);
    if($result){
        header('location:dashboard.php');
    }
}
?>