<?php
class Video extends Controller{
	public static $table ='video';

	protected $Id;
	public $TenVideo;
	public $Hinh;
	public $CaSi;
	public $TheLoai;
	public $Video;
	public $Lyric;
	public $LyricString;

	protected function __withId( $id ) {
		$sql="SELECT * FROM video WHERE id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id=$r->Id;
		$this->Hinh=$r->Hinh;
		$this->TenVideo=$r->TenVideo;
		$this->CaSi	=$r->CaSi;
		$this->TheLoai=$r->TheLoai;
		$this->Video=$r->Video;
		$this->Lyric = $r->Lyric;
		$this->LyricString = $r->LyricString;
	}

	public function save() {
		if(is_null($this->Id)){
			$sql= "INSERT INTO `video` (TenVideo,Hinh,CaSi,TheLoai,Video,Lyric,LyricString) VALUES ('$this->TenVideo', '$this->Hinh',$this->CaSi, $this->TheLoai,'$this->Video','$this->Lyric', '$this->LyricString')";
		}else{
			$sql= "UPDATE `video` SET TenVideo = '$this->TenVideo', Hinh='$this->Hinh', CaSi= $this->CaSi,TheLoai= $this->TheLoai, Video='$this->Video',Lyric='$this->Lyric', LyricString='$this->LyricString' WHERE Id = $this->Id";
		}
		return DatabaseProvider::execQuery($sql);
	}
	public function getCaSi()
	{
		$ca_si = new CaSi($this->CaSi);
		return $ca_si;
	}
	public function getVideoGiongTen(){
		$sql='SELECT * FROM video where MATCH(TenVideo) AGAINST("'. $this->TenVideo.'" IN NATURAL LANGUAGE MODE) limit 10';
		return DatabaseProvider::execQuery($sql);
	}
	public static function search($key)
	{
		$rlt = array();
		$sql = 'SELECT * FROM video where MATCH(TenVideo) AGAINST("' . $key . '" IN NATURAL LANGUAGE MODE) limit 10';

		$query_result = DatabaseProvider::execQuery($sql);
		while ($r = $query_result->fetch_object()) {
			$video = new Video($r->Id);
			array_push($rlt, $video);
		}
		return $rlt;
	}

}

?>