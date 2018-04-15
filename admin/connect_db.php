<?php
include("../configs/db.php");

// $conn= mysqli_connect(HOST_NAME, DB_USERNAME,DB_PASSWORD, DB_NAME);

// if(mysqli_connect_errno()){
//     echo"...".mysqli_connect_error();
// }else{
//     echo "Connected successfully";
// }

$conn = new mysqli(HOST_NAME, DB_USERNAME,DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



?>