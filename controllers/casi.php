<?php

class CaSi{
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
    public function DanhSachCS()
    {
        $sql="SELECT * FROM casi ORDER BY id DESC ";
        return DatabaseProvider::execQuery($sql);
    }
    public function ThemCS($TenCS, $ns, $quequan,$img, $tieusu)
    {
        $sql= "INSERT INTO `casi` (`TenCaSi`, `NgaySinh`, `QueQuan`, `img`, `TieuSu`) VALUES ('$TenCS', '$ns', '$quequan', '$img','$tieusu')";
        return DatabaseProvider::execQuery($sql);
      
    }
       
    public function XoaCS($id)
    {
        $sql="DELETE FROM casi WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }
    
    public function SuaCS($id, $tencs, $img, $ns, $quequan,$tieusu)
    {
        $sql= "UPDATE `casi` SET `TenCaSi` = '$tencs',`NgaySinh`='$ns', `img`='$img' ,`QueQuan`='$quequan' , `TieuSu`='$tieusu'  WHERE `casi`.`id` = $id";
        return DatabaseProvider::execQuery($sql);
      
    }
    public function DSCaSi()
    {
        $sql="SELECT id,TenCaSi FROM casi";
        return DatabaseProvider::execQuery($sql);
    }
    public static function LayCS($id){
		$casi=new \stdClass();
        $sql="SELECT * FROM `casi` WHERE id = $id";
		$result=DatabaseProvider::execQuery($sql);
        while($r = $result->fetch_object()){
			$casi->id=$r->id;
			$casi->CaSi=$r->TenCaSi;
			$casi->NgaySinh=$r->NgaySinh;
			$casi->QueQuan=$r->QueQuan;
			$casi->TieuSu=$r->TieuSu;
			$casi->img=$r->img;
		}
		return $casi;
    }

}


?>