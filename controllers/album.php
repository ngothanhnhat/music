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
        $sql="SELECT a.*, t.TenTheLoai as TheLoai, c.TenCaSi,n.UserName FROM `album` a
        LEFT JOIN `theloai` t ON a.TheLoaiId=t.id
        LEFT JOIN `casi` c ON c.id =a.idCS
        LEFT JOIN `user` n ON a.NguoiTao=n.id order by id DESC limit $limit ";
        // var_dump($sql); die;
        return DatabaseProvider::execQuery($sql);
    }
    public static function ThemAlbum($tenab,$casi,$img,$ngtao,$tlab,$nam)
    {
        $sql= "INSERT INTO `album` (`TenAlbum`,`idCS`,`imgalbum`,`NguoiTao`,`TheLoaiId`,`NamPhatHanh`) VALUES ('$tenab',$casi,'$img',$ngtao,$tlab,'$nam')";
        //echo $sql;
        //var_dump($sql); die;
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