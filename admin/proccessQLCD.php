<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlcd';
$connect=new MyConnect();
$connect->XoaCD($id);






header('Location: '.$url);
?>