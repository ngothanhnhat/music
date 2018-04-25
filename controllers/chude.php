<?php
class ChuDe extends Controller {
	public static $table = 'chude';
	
	protected $Id;
	public $TenChuDe;

	protected function __withId( $id ) {
		$sql="SELECT * FROM chude WHERE Id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id=$r->Id;
		$this->TenChuDe=$r->TenChuDe;
	}
	
	public function save() {
		if(is_null($this->Id)){
			$sql= "INSERT INTO chude (TenChuDe) VALUES ('$this->TenChuDe')";
		}else{
			$sql= "UPDATE chude SET TenChuDe = '$this->TenChuDe' WHERE Id = $this->Id";
		}
		DatabaseProvider::execQuery($sql);
	}
	
}


?>