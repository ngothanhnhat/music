<?php


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
	public function ThemBH($TenBH, $CSId,$NSId, $TLId, $audio, $lyric)
	{
		$sql= "INSERT INTO `baihat` (`TenBaiHat`, `CaSiId`, `NhacSiId`, `TheLoaiId`,  `Audio`,`Lyrics`) VALUES ('$TenBH', '$CSId', '$NSId', '$TLId', '$audio', '$lyric') ";
		//echo $sql;
		return DatabaseProvider::execQuery($sql);
	}
	public function XoaBH( $id)
	{
		$sql="DELETE FROM BaiHat WHERE id=$id";
		return DatabaseProvider::execQuery($sql);
	}
	public static function LayBH($id)
    {
        $sql="SELECT b.*, c.TenCaSi FROM `baihat` b left join `casi` c on b.CaSiId=c.id WHERE b.id = $id limit 1";
        //echo $sql;
		return DatabaseProvider::execQuery($sql);
    }
	public function LayBHGiongTen($tenbh){
		$arr=explode(" ", $tenbh);

		if(count($arr) > 2){
			$result = array();
			array_push($result, $arr[0],$arr[1]);
		}else{
			$result = $arr;
		}
		

		// var_dump($arr); die;

		$str= "%".implode("%",$result)."%";
		$sql='SELECT * FROM baihat where TenBaiHat like "'.$str.'"';
		return DatabaseProvider::execQuery($sql);
	}
	

}


?>