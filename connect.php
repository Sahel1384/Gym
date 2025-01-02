<?php
$host = "localhost";
$user = "root";
$pass = "12345";
$dbname = "gym";

//  mysqli connection

// $conn = new mysqli($host,$user,$pass,$dbname);
// if($conn->connect_error){
//     die("Connection is failed".$conn->connect_error);
// }else{
//     // echo "Connected successfully";
// }


// PDO connection 
$array = "mysql:host=$host; dbname=$dbname";
try {
    $pdo = new PDO($array,$user,$pass);
    // echo "yes";
} catch (PDOException $ex) {
    throw new PDOException($ex->getMessage(),(int)$ex->getCode());
}
?>