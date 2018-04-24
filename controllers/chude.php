<?php
include_once('../DatabaseProvider.php');

class ChuDe{
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
        $sql="SELECT * FROM chude WHERE 1 ORDER BY id DESC";
        return DatabaseProvider::execQuery($sql);
    }
    public function TenChuDe()
    {
        $sql="SELECT TenChuDe FROM chude";
        return DatabaseProvider::execQuery($sql);
    }
       
    public function SuaCD($id, $tencd)
    {
        $sql= "UPDATE `chude` SET `TenChuDe` = '$tencd' WHERE `chude`.id = $id";
        return DatabaseProvider::execQuery($sql);
    }
    
    public function XoaCD($id)
    {
        $sql="DELETE FROM chude WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }
    public function ThemCD($tenchude)
    {
        $sql= "INSERT INTO `chude`(`TenChuDe`) VALUES ('$tenchude')";
  
        return DatabaseProvider::execQuery($sql);
       
    }
    public function LayCDID($id)
    {
        $sql="SELECT * FROM `chude`WHERE id like '$id'";
       
        return DatabaseProvider::execQuery($sql);
    }
   
    public static function LayCD($id){
		$chude=new \stdClass();
        $sql="SELECT * FROM `chude` WHERE id = $id";
		$result=DatabaseProvider::execQuery($sql);
        while($r = $result->fetch_object()){
			$chude->id=$r->id;
			$chude->TenChuDe=$r->TenChuDe;
			
		}
		return $chude;
    }
}


?>