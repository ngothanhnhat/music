<?php

class CaSi extends Controller {
	public static $table = 'casi';
	
	protected $Id;
	public $TenCaSi;
	public $NgaySinh;
	public $QueQuan;
	public $Hinh;
	public $TieuSu;
	
	protected function __withId($id){
		$sql="SELECT * FROM casi WHERE id = $id limit 1";
		
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		
		$this->Id = $r->Id;
		$this->TenCaSi = $r->TenCaSi;
		$this->NgaySinh = $r->NgaySinh;
		$this->QueQuan = $r->QueQuan;
		$this->Hinh = $r->Hinh;
		$this->TieuSu = $r->TieuSu;
	}
	public static function DanhSachForSelection(){
		$sql="SELECT Id, TenCaSi FROM casi ORDER BY Id DESC ";
		return DatabaseProvider::execQuery($sql);
	}
	public function save(){
		if(is_null($this->Id)){
			$sql= "INSERT INTO casi (TenCaSi, NgaySinh, QueQuan, Hinh, TieuSu) VALUES ('$this->TenCaSi', '$this->NgaySinh', '$this->QueQuan', '$this->Hinh','$this->TieuSu')";
		}else{
			$sql= "UPDATE casi SET TenCaSi = '$this->TenCaSi', NgaySinh='$this->NgaySinh', QueQuan='$this->QueQuan', Hinh='$this->Hinh' ,TieuSu='$this->TieuSu' WHERE Id = $this->Id";
		}
		DatabaseProvider::execQuery($sql);
	}
}


?>