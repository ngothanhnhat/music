<?php
class Playlist{
    public $id;
    public $TenPlaylist;
    public $TheLoai;
    public $Hinh;

    public function __construct($id) {
        $sql="SELECT * FROM `playlist` WHERE playlist.id = $id limit 1";
        $result=DatabaseProvider::execQuery($sql);
        $r = $result->fetch_object();

        $this->id = $r->id;
        $this->TenPlaylist = $r->TenPlaylist;
        $this->TheLoai = $r->TheLoaiId;
        $this->Hinh = $r->Hinh;

	}
    
    public static function DanhSach($limit)
    {
        $sql = "SELECT pl.*, tl.TenTheLoai as TheLoai, cs.TenCaSi,u.UserName FROM `playlist` pl
        LEFT JOIN `theloai` tl ON tl.id = pl.TheLoai
        LEFT JOIN `user` u ON u.id=pl.NguoiTao order by pl.id DESC";
        if(isset($limit)){
            $sql .= " limit $limit";
        }
        // var_dump($sql); die;
        return DatabaseProvider::execQuery($sql);
    }
    public static function ThemPlaylist($ten,$img,$ngtao,$the_loai)
    {
        $sql= "INSERT INTO `playlist` (`TenPlaylist`,`Hinh`,`NguoiTao`,TheLoai) VALUES ('$ten','$img',$ngtao,$the_loai)";
        return DatabaseProvider::execQuery($sql);
    }
    public function update(){
        $sql= "UPDATE `playlist` SET `TenPlayList` = '$this->TenPlaylist', TheLoai='$this->TheLoai',`Hinh`='$this->Hinh'  WHERE id = $this->id";
		return DatabaseProvider::execQuery($sql);
    }
    public function delete()
    {
        $sql="DELETE FROM playlist WHERE id=$this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public function DSBaiHatChuaCo(){
        $sql="SELECT b.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` b 
        left join casi on casi.id = b.CaSiId
        left join nhacsi on nhacsi.id = b.NhacSiId
        left join theloai on theloai.id = b.TheLoaiId
        WHERE b.id not in (Select IdBaiHat from baihat_playlist tmp where IdPlaylist = $this->id)";
        return DatabaseProvider::execQuery($sql);
    }
    public function DSBaiHat(){
        $sql="SELECT bh.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` bh 
        right join `baihat_playlist` bp on bp.IdBaiHat=bh.id 
        left join casi on casi.id = bh.CaSiId
        left join nhacsi on nhacsi.id = bh.NhacSiId
        left join theloai on theloai.id = bh.TheLoaiId
        WHERE bp.IdPlaylist = $this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public function removeBaiHat($bai_hat_id){
        $sql="DELETE FROM baihat_playlist WHERE IdBaiHat=$bai_hat_id and IdPlaylist = $this->id";
        return DatabaseProvider::execQuery($sql);
    }
    public static function AddBaiHat($bai_hat_id,$playlist_id){
        $sql="INSERT INTO `baihat_playlist` (`IdBaiHat`, `IdPlaylist`) VALUES ('$bai_hat_id', '$playlist_id')";
        return DatabaseProvider::execQuery($sql);
    }
}


?>