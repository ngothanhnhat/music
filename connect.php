
<?php
class MyConnect
{		
    protected  $con;
    

    public function __construct(){
		$this->con = mysqli_connect("localhost","root","","webmusic");        
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        mysqli_query($this->con, "set names 'utf8'");
	}

    public function connect(){
        
    }

    public function DanhSachCS()
    {
        $sql="SELECT * FROM casi ORDER BY id ASC limit 8";
        return mysqli_query($this->con,$sql);
    }
    public function DanhSachCD()
    {
        $sql="SELECT * FROM chude WHERE 1";
        return mysqli_query($this->con,$sql);
    }
    
    public function DanhSachTL()
    {
        $sql="SELECT * FROM theloai WHERE 1";
        return mysqli_query($this->con,$sql);
    }
    
    function DanhSachAlbum()
    {
        $sql="SELECT * FROM `album`, casi WHERE album.idCS = casi.id  limit 8";
        
        return mysqli_query($this->con,$sql);
    }
    function DanhSachVideo()
    {
        $sql="SELECT * FROM `video`, casi WHERE video.idCS = casi.id ";
        
        return mysqli_query($this->con,$sql);
    }


    public function DanhSachPL()
    {
        $sql="SELECT * FROM `playlist`, `theloai` WHERE playlist.id = theloai.id";
        return mysqli_query($this->con,$sql);
    }
  

    public function DanhSachND()
    {
        $sql="SELECT * FROM user WHERE 1";
        return mysqli_query($this->con,$sql);
    }
    public function Phanquyen()
    {
        $sql="SELECT PhanQuyen* FROM user ";
        return mysqli_query($this->con,$sql);
    }
    public function LayND($user,$pass)
    {
        $sql="SELECT * FROM `user`WHERE UserName='".$user."' and PassWord='".$pass."'";
      //  echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayNDID($id)
    {
        $sql="SELECT * FROM `user`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayPLID($id)
    {
        $sql="SELECT * FROM `playlist`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayTLID($id)
    {
        $sql="SELECT * FROM `theloai`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayCDID($id)
    {
        $sql="SELECT * FROM `chude`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayCSID($id)
    {
        $sql="SELECT * FROM `casi`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
    public function LayBHID($id)
    {
        $sql="SELECT * FROM `baihat`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }

    public function LayThongTin($user)
    {
        $sql="SELECT * FROM `user`WHERE UserName='".$user."' " ;
      //  echo $sql;
        return mysqli_query($this->con,$sql);
    }

    public function ThemND($user, $pass, $email)
    {
        $sql= "INSERT INTO `user` (`UserName`, `PassWord`, `Email`) VALUES ('$user', '$pass', '$email')";
      //  echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    public function ThemTL($tentheloai)
    {
        $sql= "INSERT INTO `theloai`(`TenTheLoai`) VALUES ('$tentheloai')";
      // echo $sql;
        return mysqli_query($this->con,$sql);
      
    }
    public function ThemCD($tenchude)
    {
        $sql= "INSERT INTO `chude`(`TenChuDe`) VALUES ('$tenchude')";
      //  echo $sql;
        mysqli_query($this->con,$sql);
       
    }
    
    public function ThemCS($TenCS, $ns, $quequan,$img, $tieusu)
    {
        $sql= "INSERT INTO `casi` (`TenCaSi`, `NgaySinh`, `QueQuan`, `img`, `TieuSu`) VALUES ('$TenCS', '$ns', '$quequan', '$img','$tieusu')";
        //echo $sql;
        mysqli_query($this->con,$sql);
      
    }

    public function ThemPL($TenPL, $img,$ngtao,$duongdan,$tl)
    {
        $sql= "INSERT INTO `playlist` (`TenPlayList`, `img`, `NguoiTao`,`DuongDan` , `TheLoai`) VALUES ('$TenPL', '$img', '$ngtao', '$duongdan', '$tl')";
        //echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    public function ThemAB($TenAB, $tloai,$nam,$hinh)
    {
        $sql= "INSERT INTO `playlist` (`TenAlbum`, `TheLoai`, `NamPhatHanh`,`imgalbum` ) VALUES ('$TenAB', '$tloai', '$nam', '$hinh')";
        //echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    public function ThemVD($TenVD, $tlvd)
    {
        $sql= "INSERT INTO `video` (`TenVideo`, `TheLoai`) VALUES ('$TenVD', '$tlvd')";
        //echo $sql;
        mysqli_query($this->con,$sql);
      
    }

    public function KiemTraTL($tentheloai)
    {
        $sql="SELECT * FROM `theloai` WHERE TenTheLoai='$tentheloai'";
        return mysqli_query($this->con,$sql);
    }
 

    
    public function XoaCS($id)
    {
        $sql="DELETE FROM casi WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaCD($id)
    {
        $sql="DELETE FROM chude WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaTL($id)
    {
        $sql="DELETE FROM theloai WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaPL($id)
    {
        $sql="DELETE FROM playlist WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaND($id)
    {
        $sql="DELETE FROM user WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaAB($id)
    {
        $sql="DELETE FROM album WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }
    public function XoaVD($id)
    {
        $sql="DELETE FROM video WHERE id=$id";
        return mysqli_query($this->con,$sql);
    }

 
    public function SuaND($user, $pass, $email)
    {
        $sql= "UPDATE `user` SET `UserName` = '$user', `PassWord` = '$pass', `Email` = '$email' WHERE `user`.`id` = $id";
      //  echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    
    public function SuaCD($id, $tencd)
    {
        $sql= "UPDATE `chude` SET `TenChuDe` = '$tencd' WHERE `chude`.`id` = $id";
       // echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    public function SuaTL($id, $tentl)
    {
        $sql= "UPDATE `theloai` SET `TenTheLoai` = '$tentl' WHERE `theloai`.`id` = $id";
       // echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    
    public function SuaBH($id,$TenBH, $CSId,$NSId, $TLId, $loibh)
    {
        $sql= "UPDATE `baihat` SET `TenBaiHat` = '$TenBH', `CaSiId`='$CSId', `NhacSiId`='$NSId', `TheLoaiId`='$TLId' ,`Loi`='$loibh'  WHERE `baihat`.`id` = $id";
       //echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    
    public function SuaCS($id, $tencs, $img, $ns, $quequan)
    {
        $sql= "UPDATE `casi` SET `TenCaSi` = '$tencs',`NgaySinh`='$ns', `img`='$img' ,`quequan`='$quequan'  WHERE `casi`.`id` = $id";
       echo $sql;
        mysqli_query($this->con,$sql);
      
    }

      
    public function SuaPL($id, $tenpl,$img,$ngtao ,$duongdan,$theloai)
    {
        $sql= "UPDATE `playlist` SET `TenPlayList` = '$tenpl', `img`='$img' ,`NguoiTao`='$ngtao', `DuongDan`='$duongdan' ,  `TheLoai`='$theloai'  WHERE `playlist`.`id` = $id";
      // echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    
    public function SuaUS($id, $ten,$pass, $email)
    {
        $sql= "UPDATE `user` SET `UserName` = '$ten', `PassWord`='$pass' ,`Email`='$email' WHERE `user`.`id` = $id";
       echo $sql;
        mysqli_query($this->con,$sql);
      
    }
    

    public function CountView($id)
    {
        $sql="UPDATE `album` SET `LuotXem`= LuotXem + 1 WHERE id= $id";
        
        mysqli_query($this->con,$sql);
    }


    public function QueQuan($id)
    {
        $sql="SELECT QueQuan FROM casi";
        return mysqli_query($this->con,$sql);
    }
    public function DSCaSi()
    {
        $sql="SELECT id,TenCaSi FROM casi";
        return mysqli_query($this->con,$sql);
    }

    public function DSNhacSi()
    {
        $sql="SELECT id,TenNhacSi FROM nhacsi";
        return mysqli_query($this->con,$sql);
    }
    public function TenChuDe()
    {
        $sql="SELECT TenChuDe FROM chude";
        return mysqli_query($this->con,$sql);
    }
    
    public function DSTheLoai()
    {
        $sql="SELECT TenTheLoai,id FROM theloai";
        return mysqli_query($this->con,$sql);
    }

    public function Ten()
    {
        $sql="SELECT * FROM theloai, baihat WHERE theloai.TenTheLoai= baihat.TheLoai";
        return mysqli_query($this->con,$sql);
    }


}
?>

<?php

    // $t = new MyConnect();
    // $ds = $t->DanhSachBH();
    // while($r = $ds->fetch_object())
    // {
    //     echo $r->TenBaiHat."    ".$r->TenCaSi;
    //     echo "<br/>";
    // }

    // $t=new Myconnect();
    // $dstl=$t->DanhSachCD();
    // while($r = $dstl->fetch_object())
    // {
    //     echo $r->id."    ".$r->TenChuDe;
    //     echo "<br/>";
    // }

    // $t=new MyConnect();
    // $thembh=$t->ThemBH('', 'uuuuuhgghhhh', 'gggggggg', 'ffffffff', 'gggg', 'gggg', 'ggggggggggggggggggggggggvvvvvvvvvvvvv', '12');
    // $thembh=$t->ThemBH('', 'q', 'ggggq', 'ffqqqqffffff', 'qqqgggg', 'gggqqqg', 'gqqqqgggggggggggggggggggggggvvvvvvvvvvvvv', '122');
    // $thembh=$t->ThemBH('aaaaaa', 'aaaaaaaaq', 'ggggq', 'ffqqqqffffff', 'qqqgggg', 'gggqqqg', 'gqqqqgggggggggggggggggggggggvvvvvvvvvvvvv', '122');
    // $thembh=$t->ThemBH('Có', 'aaaaaaaaq', 'ggggq', 'ffqqqqffffff', 'qqqgggg', 'gggqqqg', 'gqqqqgggggggggggggggggggggggvvvvvvvvvvvvv', '122');
   
?>

<?php 

function convert($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
  
    $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
    return $str;
  }
  ?>
  
  