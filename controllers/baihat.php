<?php
include_once ('./DatabaseProvider.php');

class BaiHat{
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
	public function ThemBH($TenBH, $CSId,$NSId, $TLId, $loibh)
	{
		$sql= "INSERT INTO `baihat` (`TenBaiHat`, `CaSiId`, `NhacSiId`, `TheLoaiId`,  `Loi`) VALUES ('$TenBH', '$CSId', '$NSId', '$TLId',  '$loibh') ";
		//echo $sql;
		return DatabaseProvider::execQuery($sql);
	}
	public function XoaBH( $id)
	{
		$sql="DELETE FROM BaiHat WHERE id=$id";
		return DatabaseProvider::execQuery($sql);
	}
	
}


?>