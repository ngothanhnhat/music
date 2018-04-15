<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlpl';
$connect=new MyConnect();
$connect->XoaPL($id);






header('Location: '.$url);
?>