
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

   
   
   
    function DanhSachVideo()
    {
        $sql="SELECT * FROM `video`, casi WHERE video.idCS = casi.id ";
        
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
    

    public function LayCSID($id)
    {
        $sql="SELECT * FROM `casi`WHERE id like '$id'";
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
 

 
  
    public function XoaND($id)
    {
        $sql="DELETE FROM user WHERE id=$id";
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

