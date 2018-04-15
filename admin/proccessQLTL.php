<?php
include("../connect.php");
$id= $_GET['id'];

$url='http://localhost/webmusica/admin/?option=qltl';
$connect=new MyConnect();
$connect->XoaTL($id);






header('Location: '.$url);
?>