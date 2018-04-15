<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlus';
$connect=new MyConnect();
$connect->XoaND($id);






header('Location: '.$url);
?>