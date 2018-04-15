<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlcs';
$connect=new MyConnect();
$connect->XoaCS($id);






header('Location: '.$url);
?>