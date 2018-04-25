<?php
class Playlist extends Controller {
	public static $table = 'playlist';

  protected $Id;
  public $TenPlaylist;
  public $TheLoai;
  public $NguoiTao;
  public $Hinh;
	
	protected function __withId( $id ) {
		
		$sql="SELECT * FROM `playlist` WHERE playlist.id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		
		$this->Id = $r->Id;
		$this->TenPlaylist = $r->TenPlaylist;
		$this->TheLoai = $r->TheLoai;
		$this->Hinh = $r->Hinh;
		$this->NguoiTao = $r->NguoiTao;
	}
  public static function DanhSach($limit=-1){
      $sql = "SELECT pl.*, tl.TenTheLoai as TheLoai, u.UserName FROM `playlist` pl
      LEFT JOIN `theloai` tl ON tl.id = pl.TheLoai
      LEFT JOIN `user` u ON u.id=pl.NguoiTao order by pl.id DESC";
      if($limit != -1){
          $sql .= " limit $limit";
      }
      return DatabaseProvider::execQuery($sql);
  }
  public function DSBaiHatChuaCo(){
      $sql="SELECT b.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` b
      left join casi on casi.id = b.CaSi
      left join nhacsi on nhacsi.id = b.NhacSi
      left join theloai on theloai.id = b.TheLoai
      WHERE b.id not in (Select BaiHat from baihat_playlist tmp where Playlist = $this->Id)";
      return DatabaseProvider::execQuery($sql);
  }
  public function DSBaiHat(){
      $sql="SELECT bh.*, casi.TenCaSi, nhacsi.TenNhacSi, theloai.TenTheLoai as TheLoai FROM `baihat` bh
      right join `baihat_playlist` bp on bp.BaiHat=bh.id
      left join casi on casi.id = bh.CaSi
      left join nhacsi on nhacsi.id = bh.NhacSi
      left join theloai on theloai.id = bh.TheLoai
      WHERE bp.Playlist = $this->Id";
      return DatabaseProvider::execQuery($sql);
  }
  public function removeBaiHat($bai_hat_id){
      $sql="DELETE FROM baihat_playlist WHERE BaiHat=$bai_hat_id and Playlist = $this->Id";
      return DatabaseProvider::execQuery($sql);
  }
  public static function addBaiHat($bai_hat_id,$playlist_id){
        $sql="INSERT INTO `baihat_playlist` (BaiHat, Playlist) VALUES ('$bai_hat_id', '$playlist_id')";
        return DatabaseProvider::execQuery($sql);
    }
    
	public function save() {
		if(is_null($this->Id)){
			$sql= "INSERT INTO `playlist` (`TenPlaylist`,`Hinh`,`NguoiTao`,TheLoai) VALUES ('$this->TenPlaylist','$this->Hinh',$this->NguoiTao,$this->TheLoai)";
		}else{
			$sql= "UPDATE `playlist` SET `TenPlayList` = '$this->TenPlaylist', TheLoai='$this->TheLoai',`Hinh`='$this->Hinh', NguoiTao=$this->NguoiTao  WHERE id = $this->Id";
		}
		return DatabaseProvider::execQuery($sql);
	}
}


?>