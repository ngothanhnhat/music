<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlab';
$connect=new MyConnect();
$connect->XoaAB($id);






header('Location: '.$url);
?>