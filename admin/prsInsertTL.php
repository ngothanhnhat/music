<?php
include('../connect.php');
if(isset($_GET["tentl"]))
{
    $ten = $_GET["tentl"];
    $kq = new MyConnect();
    $k = new MyConnect();
    $kt= $kq->KiemTraTL($ten);
    if(mysqli_num_rows($kt)==1)
    {
        echo "Dữ liệu đã tồn tại"; 
    }
    else{
        $k->ThemTL($ten);
        header('location:http://localhost/webmusica/admin/?option=qltl');

    } 
}
?>