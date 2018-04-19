<?php
include_once ('../DatabaseProvider.php');
class TheLoai{
	public function __construct() {
	}
     
    public function DanhSachTheLoai()
    {
        $sql="SELECT * FROM theloai";
        return DatabaseProvider::execQuery($sql);
       
    }
    public function LayTLID($id)
    {
        $sql="SELECT * FROM `theloai`WHERE id like '$id'";
        return DatabaseProvider::execQuery($sql);

    }
    public function ThemTL($tentheloai)
    {
        $sql= "INSERT INTO `theloai`(`TenTheLoai`) VALUES ('$tentheloai')";
        return DatabaseProvider::execQuery($sql);

      
    }
    public function XoaTL($id)
    {
        $sql="DELETE FROM theloai WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }
    
    public function KiemTraTL($tentheloai)
    {
        $sql="SELECT * FROM `theloai` WHERE TenTheLoai='$tentheloai'";
        return DatabaseProvider::execQuery($sql);
       
    }
    public function SuaTL($id, $tentl)
    {
        $sql= "UPDATE `theloai` SET `TenTheLoai` = '$tentl' WHERE `theloai`.`id` = $id";
       // echo $sql;
       return DatabaseProvider::execQuery($sql);
      
    }
}


?>