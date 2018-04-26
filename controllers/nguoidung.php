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


	public static function themPlaylistWishlist($userId, $playlistId)
	{
		$sql = "INSERT INTO wishlist(UserId, RefId, `Type`) VALUES($userId, $playlistId," .PLAYLIST_WISHLIST. ")";
		return DatabaseProvider::execQuery($sql);

	}


	public static function xoaPlaylistWishlist($userId, $playlistId)
	{

		$sql = "DELETE FROM wishlist WHERE UserId = $userId and RefId = $playlistId  and `Type`= " . PLAYLIST_WISHLIST;
		return DatabaseProvider::execQuery($sql);
	}

	public static function checkPlaylistInWishlist($userId, $playlstId)
	{
		$sql = "SELECT count(*) as count FROM wishlist WHERE UserId = $userId and RefId = $playlstId and `Type`= " .PLAYLIST_WISHLIST;
		$result = DatabaseProvider::execQuery($sql);
		while ($r = $result->fetch_object()) {
			$re = $r->count;
		}
		return $re;
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
}
?>
