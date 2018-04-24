<?php
class Album{
    public $id;
    
    public $TenAlbum;
    public $CaSiId;
    public $TheLoaiId;
    public $NamPhatHanh;
    public $Hinh;

    public function __construct($id) {
        $sql="SELECT * FROM `album` WHERE album.id = $id limit 1";
        $result=DatabaseProvider::execQuery($sql);
        $r = $result->fetch_object();

        $this->id = $r->id;
        $this->TenAlbum = $r->TenAlbum;
        $this->CaSiId = $r->idCS;
        $this->TheLoaiId = $r->TheLoaiId;
        $this->NamPhatHanh =  $r->NamPhatHanh;
        $this->Hinh = $r->imgalbum;

	}
    
    public static function DanhSachAlbum($limit)
    {
        $sql="SELECT al.*, tl.TenTheLoai as TheLoai, cs.TenCaSi,u.UserName FROM `album` al
        LEFT JOIN `theloai` tl ON tl.id = al.TheLoaiId
        LEFT JOIN `casi` cs ON cs.id =al.idCS
        LEFT JOIN `user` u ON u.id=al.NguoiTao order by al.id DESC limit $limit";
        // var_dump($sql); die;
        return DatabaseProvider::execQuery($sql);
    }
    public static function ThemAlbum($tenab,$casi,$img,$ngtao,$tlab,$nam)
    {
        $sql= "INSERT INTO `album` (`TenAlbum`,`idCS`,`imgalbum`,`NguoiTao`,`TheLoaiId`,`NamPhatHanh`) VALUES ('$tenab',$casi,'$img',$ngtao,$tlab,'$nam')";
        return DatabaseProvider::execQuery($sql);
    }
    public function update(){
        $sql= "UPDATE `album` SET `TenAlbum` = '$this->TenAlbum', `TheloaiId`='$this->TheLoaiId',`idCS`='$this->CaSiId',`NamPhatHanh`='$this->NamPhatHanh' ,`imgalbum`='$this->Hinh'  WHERE id = $this->id";
		return DatabaseProvider::execQuery($sql);
    }
    public function delete()
    {
        $sql="DELETE FROM album WHERE id=$this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public function DSBaiHatChuaCo(){
        $sql="SELECT b.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` b 
        left join casi on casi.id = b.CaSiId
        left join nhacsi on nhacsi.id = b.NhacSiId
        left join theloai on theloai.id = b.TheLoaiId
        WHERE b.id not in
            (Select idBH from baihat_album tmp where idAB = $this->id) 
            and b.CaSiId = $this->CaSiId";
        return DatabaseProvider::execQuery($sql);
    }
    public function DSBaiHat(){
        $sql="SELECT b.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` b 
        right join `baihat_album` ba on ba.idBH=b.id 
        left join casi on casi.id = b.CaSiId
        left join nhacsi on nhacsi.id = b.NhacSiId
        left join theloai on theloai.id = b.TheLoaiId
        WHERE ba.idAB = $this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public function removeBaiHat($bai_hat_id){
        $sql="DELETE FROM baihat_album WHERE idBH=$bai_hat_id and idAB = $this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public function AddBaiHat($bai_hat_id,$album_id){
        $sql="INSERT INTO `baihat_album` (`idBH`, `idAB`) VALUES ('$bai_hat_id', '$album_id')";
        return DatabaseProvider::execQuery($sql);
    }
}


?>