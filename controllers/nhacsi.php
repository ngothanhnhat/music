<?php

class NhacSi{
	public function __construct() {
    }
    public function DanhSachNhacSi()
    {
        $sql="SELECT id,TenNhacSi FROM nhacsi";
        return DatabaseProvider::execQuery($sql);

    }
}


?>