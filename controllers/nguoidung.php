<?php

class NguoiDung extends Controller{
	public static $table = 'user';
	protected $Id;
	public $Username;
	public $Email;
	public $Password;
	public $PhanQuyen;

	protected function __withId($Id)
	{
		$sql = "SELECT * FROM user WHERE Id = $Id limit 1";
		$result = DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();

		$this->Id = $r->Id;
		$this->Username = $r->Username;
		$this->Email = $r->Email;
		$this->PhanQuyen = $r->PhanQuyen;
	}

	public function save()
	{
		if (is_null($this->Id)) {
			$sql = "INSERT INTO `user` (`Username`, `Password`, `Email`,`PhanQuyen`) VALUES ('$this->Username', '$this->Password', '$this->Email',$this->PhanQuyen)";
		} else {
			$sql = "UPDATE `user` SET `Username` = '$this->Username', `Email` = '$this->Email',`PhanQuyen` = '$this->PhanQuyen' WHERE `user`.`Id` = $this->Id";
		}

		DatabaseProvider::execQuery($sql);
	}

	public static function LayND($user, $pass)
	{
		$sql = "SELECT * FROM `user`WHERE Username='" . $user . "' and Password='" . $pass . "'";
		//  echo $sql;
		return DatabaseProvider::execQuery($sql);
	}
	public static function isExistUserWithUsername($username){
		$sql="select count(Id) as result from user where Username ='$username'";
		$row = DatabaseProvider::execQuery($sql)->fetch_object();
		if($row->result ==0){
			return false;
		}
		return true;
	}


	//wishlist
	/// UserId, RefId ,Type


	public static function addWishlist($userId, $refId, $type)
	{
		$sql = "INSERT INTO wishlist(UserId, RefId, `Type`) VALUES($userId, $refId," .$type. ")";
		return DatabaseProvider::execQuery($sql);

	}


	public static function delWishlist($userId, $refId, $type)
	{

		$sql = "DELETE FROM wishlist WHERE UserId = $userId and RefId = $refId  and `Type`= " . $type;
		return DatabaseProvider::execQuery($sql);
	}

	public static function checkInWishlist($userId, $ref_id, $type)
	{
		$sql = "SELECT count(*) as count FROM wishlist WHERE UserId = $userId and RefId = $ref_id and `Type`= " .$type;
		$result = DatabaseProvider::execQuery($sql);
		$r = $result->fetch_object();
		return $r->count;
	}
	public function getPlaylistWishlist(){
		$result = array();

		$sql="select pl.Id, pl.TenPlaylist from wishlist wl join playlist pl on pl.Id = wl.RefId where wl.Type = ". PLAYLIST_WISHLIST." and wl.UserId=$this->Id";
		$result_sql = DatabaseProvider::execQuery($sql);
		while ($r= $result_sql->fetch_object()){
			$playlist = new stdClass();
			$playlist->Id = $r->Id;
			$playlist->TenPlaylist = $r->TenPlaylist;
			array_push($result, $playlist);
		}
		return $result;
	}
	public function getVideoWishlist(){
		$result = array();

		$sql="select vd.Id, vd.TenVideo from wishlist wl join video vd on vd.Id = wl.RefId where wl.Type = ".VIDEO_WISHLIST." and wl.UserId=$this->Id";
		$result_sql = DatabaseProvider::execQuery($sql);
		while ($r= $result_sql->fetch_object()){
			$video = new stdClass();
			$video->Id = $r->Id;
			$video->TenVideo = $r->TenVideo;
			array_push($result, $video);
		}
		return $result;
	}
}
?>
