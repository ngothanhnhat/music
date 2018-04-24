
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
    
    
    
    public function LayCSID($id)
    {
        $sql="SELECT * FROM `casi`WHERE id like '$id'";
        //echo $sql;
        return mysqli_query($this->con,$sql);
    }
 
    
   

    public function CountView($id)
    {
        $sql="UPDATE `playlist` SET `LuotXem`= LuotXem + 1 WHERE id= $id";
        
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
