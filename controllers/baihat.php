<?php

class BaiHat extends Controller {
	public static $table = 'baihat';
	
	protected $Id;
	public $TenBaiHat;
	public $CaSi;
	public $TenCaSi;
	public $NhacSi;
	public $TenNhacSi;
	public $TheLoai;
	public $LuotNghe;
	public $Audio;
	public $Lyric;
	public $LyricString;

	public function getNhacSi()
	{
		$nhac_si = new NhacSi($this->NhacSi);
		return $nhac_si;
	}


	protected function __withId($id){
		$sql="SELECT * FROM baihat WHERE id = $id limit 1";

		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();

		$this->Id = $r->Id;
		$this->TenBaiHat = $r->TenBaiHat;
		$this->CaSi = $r->CaSi;
		$this->NhacSi = $r->NhacSi;
		$this->TheLoai = $r->TheLoai;
		$this->Audio = $r->Audio;
		$this->Lyric = $r->Lyric;
		$this->LyricString = $r->LyricString;
	}
	
	public static function DanhSach($limit=-1){
		$sql="SELECT b.*, theloai.TenTheLoai as TheLoai, casi.TenCaSi, nhacsi.TenNhacSi,casi.TieuSu FROM BaiHat b
        left join theloai on b.TheLoai=theloai.id
        left join casi on casi.id = b.CaSi
        left join nhacsi on nhacsi.id = b.NhacSi
        ORDER BY id DESC ";

		if($limit != -1)
			$sql .= " limit {$limit}";

		return DatabaseProvider::execQuery($sql);
	}
	  
  public function save(){
	  if(is_null($this->Id)){
		  $sql= "INSERT INTO baihat (TenBaiHat, CaSi, NhacSi, TheLoai, Audio, Lyric,LyricString) VALUES ('$this->TenBaiHat', $this->CaSi, $this->NhacSi, $this->TheLoai, '$this->Audio', '$this->Lyric', '$this->LyricString') ";
	  }else{
      $sql= "UPDATE baihat SET TenBaiHat = '$this->TenBaiHat', CaSi=$this->CaSi, NhacSi=$this->NhacSi, TheLoai=$this->TheLoai ,Audio='$this->Audio' , Lyric='$this->Lyric', LyricString='$this->LyricString' WHERE Id = $this->Id";
	  }
	  
		DatabaseProvider::execQuery($sql);
  }
    
	public function delete(){
		$sql="DELETE FROM BaiHat WHERE id=$this->Id";
		DatabaseProvider::execQuery($sql);
		
		$sql="DELETE FROM baihat_playlist WHERE BaiHat=$this->Id";
		 DatabaseProvider::execQuery($sql);
	}
	
	public function getBaiHatGiongTen(){
		$arr=explode(" ", $this->TenBaiHat);

		if(count($arr) > 2){
			$result = array();
			array_push($result, $arr[0],$arr[1]);
		}else{
			$result = $arr;
		}
		$str= "%".implode("%",$result)."%";
		$sql='SELECT * FROM baihat where TenBaiHat like "'.$str.'"';
		return DatabaseProvider::execQuery($sql);
	}
	public function LuotNghe($id){
    $sql="UPDATE `baihat` SET `LuotNghe`= LuotNghe + 1 WHERE id= $id";
    DatabaseProvider::execQuery($sql);
  }
}


?>