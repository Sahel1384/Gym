<?php
include("connect.php");

    $cid = $_POST['cid'];
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $Email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $add = $_POST['add'];
    $phone = $_POST['phone'];
    $fees = $_POST['fees'];


    $query = "UPDATE  cust_info SET  C_F_Name = '$first', C_L_Name = '$last', C_Email = '$Email', C_age = $age, C_Gender = '$gender', C_Add = '$add', C_Phone = $phone, C_Fee = '$fees' WHERE C_ID = $cid";
    $result = $pdo->query($query);
// $print = "SELECT  * from cust_info";
// $query = $pdo->query($print);
// while($value = $query->fetch()){
//     echo "<script>alert('This is Your ID ".$value['C_ID']."')</script>";
// }
header('location:dashboard.php#update');
    


?>