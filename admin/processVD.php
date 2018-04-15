<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qlvd';
$connect=new MyConnect();
$connect->XoaVD($id);






header('Location: '.$url);
?>