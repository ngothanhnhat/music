<?php
abstract class Controller{
	public static $table;
	
	abstract protected function __withId($id);
	abstract public function save();
	
	public function __construct() {
		$args = func_get_args();
		if(count($args) == 1){
			$id = $args[0];
			$this->__withId($id);
		}
	}
	public function getId(){
		return $this->Id;
	}
	
	public function delete(){
		$sql="DELETE FROM ". static::$table . " WHERE Id = $this->Id";
		return DatabaseProvider::execQuery($sql);
	}
	
	public static function DanhSach($limit = -1){
	
		$sql="SELECT * FROM " . static::$table ." ORDER BY Id DESC ";
		if($limit != -1)
			$sql .= " limit {$limit}";
		return DatabaseProvider::execQuery($sql);
	}
}

?>