<?php

class NhacSi extends Controller {
	public static $table = 'nhacsi';

	protected $Id;
	public $TenNhacSi;


	protected function __withId($id)
	{
		$sql="SELECT * FROM nhacsi WHERE Id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id = $r->Id;
		$this->TenNhacSi = $r->TenNhacSi;
	}

	public function save()
	{
		if (is_null($this->Id)) {
			$sql = "INSERT INTO nhacsi (TenNhacSi) VALUES ('$this->TenNhacSi')";
		} else {
			$sql = "UPDATE nhacsi SET TenNhacSi = '$this->TenNhacSi' WHERE Id = $this->Id";
		}
		databaseProvider::execQuery($sql);
	}
}


?>