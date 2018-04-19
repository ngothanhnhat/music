<?php

class NguoiDung{
	public function __construct() {
	}
    public function DanhSachND()
    {
        $sql="SELECT * FROM user";
        return DatabaseProvider::execQuery($sql);
    }
    public function Phanquyen()
    {
        $sql="SELECT PhanQuyen* FROM user ";
        return DatabaseProvider::execQuery($sql);
    }
    public function LayND($user,$pass)
    {
        $sql="SELECT * FROM `user`WHERE UserName='".$user."' and PassWord='".$pass."'";
      //  echo $sql;
      return DatabaseProvider::execQuery($sql);
    }
    public function XoaND($id)
    {
        $sql="DELETE FROM user WHERE id=$id";
        return DatabaseProvider::execQuery($sql);
    }

    public function SuaND($user, $pass, $email)
    {
        $sql= "UPDATE `user` SET `UserName` = '$user', `PassWord` = '$pass', `Email` = '$email' WHERE `user`.`id` = $id";
      //  echo $sql;
      return DatabaseProvider::execQuery($sql);     
    }
    public function SuaUS($id, $ten,$pass, $email)
    {
        $sql= "UPDATE `user` SET `UserName` = '$ten', `PassWord`='$pass' ,`Email`='$email' WHERE `user`.`id` = $id";
       //echo $sql;
       return DatabaseProvider::execQuery($sql);
    }
    
    public function ThemND($user, $pass, $email)
    {
        $sql= "INSERT INTO `user` (`UserName`, `PassWord`, `Email`) VALUES ('$user', '$pass', '$email')";
      //  echo $sql;
      return DatabaseProvider::execQuery($sql);
    }
	public function LayThongTin($user)
    {
        $sql="SELECT * FROM `user`WHERE UserName='".$user."' " ;
      //  echo $sql;
      return DatabaseProvider::execQuery($sql); 
    }
    public function LayNDID($id)
    {
        $sql="SELECT * FROM `user`WHERE id like '$id'";
        //echo $sql;
    return DatabaseProvider::execQuery($sql);
        
    }

    ////wishlist
    /// UserId, RefId ,Type
    /// Type: 1-album   ; 2-Playlist; 3-music; 4-video

    public function themAlbumWishlist($userId, $albumId) {
        $sql="INSERT INTO wishlist(UserId, RefId, `Type`) VALUES($userId, $albumId, 1) ";
        return DatabaseProvider::execQuery($sql);
        
    }

    public function xoaAlbumWishlist($userId, $albumId) {

        $sql="DELETE FROM wishlist WHERE UserId = $userId and RefId = $albumId  and `Type`= 1 ";
        return DatabaseProvider::execQuery($sql);
    }

    public function checkAlbumInWishlist($userId, $albumId) {
        $sql="SELECT count(*) as count FROM wishlist WHERE UserId = $userId and RefId = $albumId and `Type`= 1 ";
        $result=DatabaseProvider::execQuery($sql);
        while($r = $result->fetch_object()){
            $re = $r->count;
        }
        return $re;
    }

}
?>