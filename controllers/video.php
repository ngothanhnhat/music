<?php
class Video extends Controller{
	public static $table ='video';

	protected $Id;
	public $TenVideo;
	public $CaSi;
	public $TheLoai;
	public $NguoiTao;

	protected function __withId( $id ) {
		$sql="SELECT * FROM video WHERE Id = $Id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id=$r->Id;
		$this->TenVideo=$r->TenVideo;
		$this->CaSi	=$r->CaSi;
		$this->TheLoai=$r->TheLoai;
	}

	public function save() {
		if(is_null($this->Id)){
			$sql= "INSERT INTO `video` (`TenVideo`,`CaSi`,`TheLoai`,`Video`) VALUES ('$this->TenVideo', '$this->CaSi', '$this->TheLoai,'$this->Video')";
		}else{
			$sql= "UPDATE chude SET TenVideo = '$this->TenVideo', CaSi= '$this->CaSi', Video= '$this->Video WHERE Id = $this->Id";
		}
		DatabaseProvider::execQuery($sql);
	}


}

?>