<?php
class TheLoai extends Controller
{
	public static $table = 'theloai';
	protected $Id;
	public $TenTheLoai;

	protected function __withId($id)
	{
		$sql = "SELECT * FROM theloai WHERE Id = $id limit 1";
		$result = DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id = $r->Id;
		$this->TenTheLoai = $r->TenTheLoai;
	}

	public function save()
	{
		if (is_null($this->Id)) {
			$sql = "INSERT INTO theloai (TenTheLoai) VALUES ('$this->TenTheLoai')";
		} else {
			$sql = "UPDATE theloai SET TenTheLoai = '$this->TenTheLoai' WHERE Id = $this->Id";
		}
		databaseProvider::execQuery($sql);
	}

}

?>