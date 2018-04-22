<?php

class BaiHat{
	public function __construct() {
	}
	
	public function DanhSachBH($limit){
		$sql="SELECT b.*, theloai.TenTheLoai as TheLoai, casi.TenCaSi, nhacsi.TenNhacSi,casi.TieuSu FROM BaiHat b
        left join theloai on b.TheLoaiId=theloai.id
        left join casi on casi.id = b.CaSiId
        left join nhacsi on nhacsi.id = b.NhacSiId
        ORDER BY id DESC limit $limit ";
		
		return DatabaseProvider::execQuery($sql);
	}
	public function ThemBH($TenBH, $CSId,$NSId, $TLId, $audio, $lyric){
		$sql= "INSERT INTO `baihat` (`TenBaiHat`, `CaSiId`, `NhacSiId`, `TheLoaiId`,  `Audio`,`Lyrics`) VALUES ('$TenBH', '$CSId', '$NSId', '$TLId', '$audio', '$lyric') ";
		//echo $sql;
		return DatabaseProvider::execQuery($sql);
	}
	  
    public function SuaBH($id,$TenBH, $CSId,$NSId, $TLId, $audio, $lyric){
        $sql= "UPDATE `baihat` SET `TenBaiHat` = '$TenBH', `CaSiId`='$CSId', `NhacSiId`='$NSId', `TheLoaiId`='$TLId' ,`Audio`='$audio' , `Lyrics`='$lyric' WHERE `baihat`.`id` = $id";
		return DatabaseProvider::execQuery($sql);
      
    }
    
	public function XoaBH( $id){
		$sql="DELETE FROM BaiHat WHERE id=$id";
		 DatabaseProvider::execQuery($sql);
		 $sql="DELETE FROM baihat_album WHERE idBH=$id";
		 DatabaseProvider::execQuery($sql);
		 $sql="DELETE FROM baihat_playlist WHERE idBH=$id";
		 DatabaseProvider::execQuery($sql);
	}
	public function LayBaiHat($id){
		$sql="SELECT b.*, c.TenCaSi FROM `baihat` b left join `casi` c on b.CaSiId=c.id WHERE b.id = $id limit 1";
		return DatabaseProvider::execQuery($sql);
	}
	public static function LayBH($id){
		$baihat=new \stdClass();
        $sql="SELECT b.*, c.TenCaSi FROM `baihat` b left join `casi` c on b.CaSiId=c.id WHERE b.id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
        while($r = $result->fetch_object()){
			$baihat->id=$r->id;
			$baihat->BaiHat=$r->TenBaiHat;
			$baihat->CaSi=$r->CaSiId;
			$baihat->NhacSi=$r->NhacSiId;
			$baihat->TheLoai=$r->TheLoaiId;
			$baihat->Audio=$r->audio;
			$baihat->Lyric=$r->lyrics;

		}
		return $baihat;
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
	public function LuotNghe($id)
    {
        $sql="UPDATE `baihat` SET `LuotNghe`= LuotNghe + 1 WHERE id= $id";
		 DatabaseProvider::execQuery($sql);
    }



}


?>