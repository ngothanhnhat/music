<?php
include_once ('../DatabaseProvider.php');

class PlayList{
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
	
    public function XoaPL($id)
    {
        $sql="DELETE FROM playlist WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }
    public function SuaPL($id, $tenpl,$img,$ngtao ,$duongdan,$theloai)
    {
        $sql= "UPDATE `playlist` SET `TenPlayList` = '$tenpl', `img`='$img' ,`NguoiTao`='$ngtao', `DuongDan`='$duongdan' ,  `TheLoai`='$theloai'  WHERE `playlist`.`id` = $id";
      // echo $sql;
      return DatabaseProvider::execQuery($sql);
      
    }
    
    public function ThemPL($TenPL, $img,$ngtao,$duongdan,$tl)
    {
        $sql= "INSERT INTO `playlist` (`TenPlayList`, `img`, `NguoiTao`,`DuongDan` , `TheLoai`) VALUES ('$TenPL', '$img', '$ngtao', '$duongdan', '$tl')";
        //echo $sql;
        return DatabaseProvider::execQuery($sql);
      
    }
    public function LayPLID($id)
    {
        $sql="SELECT * FROM `playlist`WHERE id like '$id'";
        //echo $sql;
        return DatabaseProvider::execQuery($sql);
    }
    public function DanhSachPL()
    {
        $sql="SELECT * FROM `playlist`, `theloai` WHERE playlist.id = theloai.id";
        return DatabaseProvider::execQuery($sql);
    }
  
}


?>