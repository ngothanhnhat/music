<?php

class BaiHat extends Controller
{
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


	protected function __withId($id)
	{
		$sql = "SELECT baihat.*, casi.TenCaSi, nhacsi.TenNhacSi FROM baihat left join casi on casi.Id=baihat.CaSi left join nhacsi on nhacsi.Id=baihat.NhacSi WHERE baihat.Id = $id limit 1";

		$result = DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();

		$this->Id = $r->Id;
		$this->TenBaiHat = $r->TenBaiHat;
		$this->CaSi = $r->CaSi;
		$this->NhacSi = $r->NhacSi;
		$this->TheLoai = $r->TheLoai;
		$this->Audio = $r->Audio;
		$this->Lyric = $r->Lyric;
		$this->LyricString = $r->LyricString;
		$this->TenCaSi = $r->TenCaSi;
		$this->TenNhacSi = $r->TenNhacSi;
		$this->LuotNghe = $r->LuotNghe;
	}

	public static function DanhSach($limit = -1)
	{
		$sql = "SELECT b.*, theloai.TenTheLoai as TheLoai, casi.TenCaSi, nhacsi.TenNhacSi,casi.TieuSu FROM BaiHat b
        left join theloai on b.TheLoai=theloai.id
        left join casi on casi.id = b.CaSi
        left join nhacsi on nhacsi.id = b.NhacSi
        ORDER BY id DESC ";

		if ($limit != -1)
			$sql .= " limit {$limit}";

		return DatabaseProvider::execQuery($sql);
	}

	public function save()
	{
		if (is_null($this->Id)) {
			$sql = "INSERT INTO baihat (TenBaiHat, CaSi, NhacSi, TheLoai, Audio, Lyric,LyricString) VALUES ('$this->TenBaiHat', $this->CaSi, $this->NhacSi, $this->TheLoai, '$this->Audio', '$this->Lyric', '$this->LyricString') ";
		} else {
			$sql = "UPDATE baihat SET TenBaiHat = '$this->TenBaiHat', CaSi=$this->CaSi, NhacSi=$this->NhacSi, TheLoai=$this->TheLoai ,Audio='$this->Audio' , Lyric='$this->Lyric', LyricString='$this->LyricString' WHERE Id = $this->Id";
		}

		DatabaseProvider::execQuery($sql);
	}

	public function delete()
	{
		$sql = "DELETE FROM BaiHat WHERE id=$this->Id";
		DatabaseProvider::execQuery($sql);

		$sql = "DELETE FROM baihat_playlist WHERE BaiHat=$this->Id";
		DatabaseProvider::execQuery($sql);
	}

	public function getBaiHatGiongTen()
	{
		$sql = 'SELECT * FROM baihat where MATCH(TenBaiHat) AGAINST("' . $this->TenBaiHat . '" IN NATURAL LANGUAGE MODE) limit 10';
		return DatabaseProvider::execQuery($sql);
	}

	public static function search($key)
	{
		$rlt = array();
		$sql = 'SELECT * FROM baihat where MATCH(TenBaiHat) AGAINST("' . $key . '" IN NATURAL LANGUAGE MODE) limit 10';

		$query_result = DatabaseProvider::execQuery($sql);
		while ($r = $query_result->fetch_object()) {
			$baihat = new BaiHat($r->Id);
			array_push($rlt, $baihat);
		}
		return $rlt;
	}

	public function Update_LuotNghe()
	{
		$this->LuotNghe += 1;
		$sql = "UPDATE `baihat` SET `LuotNghe`= $this->LuotNghe WHERE id= $this->Id";
		DatabaseProvider::execQuery($sql);
		return $this->LuotNghe;
	}

	public static function bxh_LuotNghe($limit)
	{
		$sql = "select baihat.TenBaiHat, baihat.LuotNghe from  baihat order by LuotNghe desc limit $limit";
		return DatabaseProvider::execQuery($sql);

	}


	public static function top_yeu_thich()
	{
		$rst = array();
		$sql = "select count(RefId) as number, RefId as id from wishlist where Type = " . BAIHAT_WISHLIST . " group by RefId order by number desc limit 5;";
		$query_rst = DatabaseProvider::execQuery($sql);
		while ($r = $query_rst->fetch_object()) {
			$baihat = new BaiHat($r->id);
			array_push($rst, $baihat);
		}
		return $rst;
	}
}

?>




