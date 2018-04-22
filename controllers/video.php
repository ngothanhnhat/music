<?php
include_once ('../DatabaseProvider.php');


class Video{
	public function __construct() {
	}
	
	function DanhSachVideo()
    {
        $sql="SELECT casi.TenCaSi,video.* FROM `video` left join `casi` on casi.id = video.idCS";
        
        return DatabaseProvider::execQuery($sql);

    }
       
    public function ThemVD($TenVD, $tlvd)
    {
        $sql= "INSERT INTO `video` (`TenVideo`, `TheLoai`) VALUES ('$TenVD', '$tlvd')";
        //echo $sql;
        return DatabaseProvider::execQuery($sql);

      
    }

    public function XoaVD($id)
    {
        $sql="DELETE FROM video WHERE id=$id";
        return DatabaseProvider::execQuery($sql);

    }

}

?>