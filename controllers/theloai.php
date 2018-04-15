<?php
include_once ('../DatabaseProvider.php');

class TheLoai{
	public function __construct() {
	}
	
	public function DanhSachBH()
	{
		$sql="SELECT b.*, theloai.TenTheLoai as TheLoai, casi.TenCaSi, nhacsi.TenNhacSi FROM BaiHat b
        left join theloai on b.TheLoaiId=theloai.id
        left join casi on casi.id = b.CaSiId
        left join nhacsi on nhacsi.id = b.NhacSiId
        ORDER BY id DESC ";
		
		return DatabaseProvider::execQuery($sql);
	}
	
	
	public function DanhSachCD()
    {
        $sql="SELECT * FROM chude WHERE 1";
        return DatabaseProvider::execQuery($sql);
    }
    public function TenChuDe()
    {
        $sql="SELECT TenChuDe FROM chude";
        return DatabaseProvider::execQuery($sql);
    }
       
    public function SuaCD($id, $tencd)
    {
        $sql= "UPDATE `chude` SET `TenChuDe` = '$tencd' WHERE `chude`.`id` = $id";
        return DatabaseProvider::execQuery($sql);

      
    }
    
     
    public function DanhSachTL()
    {
        $sql="SELECT * FROM theloai WHERE 1";
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
}


?>