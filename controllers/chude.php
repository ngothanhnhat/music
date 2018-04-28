<?php
class ChuDe extends Controller {
	public static $table = 'chude';
	
	protected $Id;
	public $TenChuDe;
	public $Hinh;
	public $MoTa;
	public $Playlist;

	protected function __withId( $id ) {
		$sql="SELECT * FROM chude WHERE Id = $id limit 1";
		$result=DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		$this->Id=$r->Id;
		$this->TenChuDe=$r->TenChuDe;
		$this->Hinh=$r->Hinh;
		$this->MoTa=$r->MoTa;
	 	$this->Playlist= array();
		$sql= "select pl.Id,pl.TenPlaylist, pl.Hinh, user.Username as NguoiTao from playlist pl left join playlist_chude pc on pc.IdPL=pl.Id left join user on user.Id = pl.NguoiTao where pc.IdCD=$this->Id";
		$rlt = DatabaseProvider::execQuery($sql);
		while ($r1=$rlt->fetch_object()){
			$pl = new stdClass();
			$pl->Id = $r1->Id;
			$pl->TenPlaylist=$r1->TenPlaylist;
			$pl->Hinh=$r1->Hinh;
			$pl->NguoiTao=$r1->NguoiTao;

			array_push($this->Playlist,$pl);
		}

	}

	public static function DanhSach($limit = -1)
	{
		$rlt= array();
		$sql ="select Id from chude order by Id desc ";
		if($limit!= -1){
			$sql.= " limit $limit";
		}
		$result = DatabaseProvider::execQuery($sql);
		while ($r= $result->fetch_object()){
			$chude = new ChuDe($r->Id);
			array_push($rlt,$chude);

		}
		return $rlt;
	}

	public function DSPlaylistChuaCo(){
		$kq=array();
		$sql="select pl.Id as playlistId, pl.TenPlaylist, theloai.TenTheLoai from playlist pl left join theloai on theloai.Id=pl.TheLoai where pl.Id not in (select IdPL from playlist_chude pc where IdCD=$this->Id)";

		$res= DatabaseProvider::execQuery($sql);
		while ($r=$res->fetch_object()){
			//object rong;
			$playlist= new stdClass();
			$playlist->Id = $r->playlistId;
			$playlist->TenPlaylist = $r->TenPlaylist;
			$playlist->TheLoai= $r->TenTheLoai;
			array_push($kq,$playlist);
		}
		return $kq;
	}
	public static function addPlaylist($IdPL, $IdCD){
		$sql="INSERT INTO playlist_chude (IdPL, IdCD) VALUES ('$IdPL','$IdCD')";
		var_dump($sql);die;
		DatabaseProvider::execQuery($sql);
	}

	public function save() {
		if(is_null($this->Id)){
			$sql= "INSERT INTO chude (TenChuDe,Hinh,MoTa) VALUES ('$this->TenChuDe','$this->Hinh','$this->MoTa' )";
		}else{
			$sql= "UPDATE chude SET TenChuDe = '$this->TenChuDe', Hinh='$this->Hinh', MoTa='$this->MoTa' WHERE Id = $this->Id";
		}
		DatabaseProvider::execQuery($sql);
	}
	
}


?>