<?php


class Album{
    private $__TenAlbum;
    private $__id;
    public function getTenAlbum()
    {
        return $this->__TenAlbum;
        
    }
    public function getId()
    {
        return $this->__id;
        
    }
	 public function __construct($id) {
        $sql="SELECT * FROM `album` WHERE album.id = $id";
        // var_dump($sql); die;
        $result=DatabaseProvider::execQuery($sql);
        while($r = $result->fetch_object()){
            // var_dump($r); die;
            $this->__id = $r->id;
            
            $this->__TenAlbum = $r->TenAlbum;

        }
	}
    
    public static function DanhSachAlbum($limit)
    {
        $sql="SELECT * FROM `album` limit $limit ";
        
        return DatabaseProvider::execQuery($sql);
    }
    public function ThemAlbum($TenAB, $tloai,$nam,$hinh)
    {
        $sql= "INSERT INTO `playlist` (`TenAlbum`, `TheLoai`, `NamPhatHanh`,`imgalbum` ) VALUES ('$TenAB', '$tloai', '$nam', '$hinh')";
        //echo $sql;
        return DatabaseProvider::execQuery($sql);
      
    }
    public function XoaAlbum($id)
    {
        $sql="DELETE FROM album WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }
    public function DSBaiHat(){
        $sql="SELECT b.* FROM `baihat` b 
        right join `baihat_album` ba on ba.idBH=b.id 
        WHERE ba.idAB= $this->__id";
        // var_dump($sql); die;
        return DatabaseProvider::execQuery($sql);
    }
   
}


?>