<?php
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $a = new MyConnect();

    $us = $a->LayPLID($id);
    if(mysqli_num_rows($us)==1)
    {
        while($r = $us->fetch_object())
        {
            # code...


?>

  <h3>SỬA PLAYLIST</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên PlayList</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" required="requied" name = "tenpl" id="tenpl" placeholder="" value="<?php echo $r->TenPlayList;?> ">

    </div>
    <div class="col-sm-4"></div>
  </div>




  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >img</label>
    <div class="col-sm-5">
    <input type="text" class="form-control"  id="imgpl" name = "imgpl" placeholder="" value="<?php echo $r->img;?>" required>
     
    </div>
    <div class="col-sm-4"></div>
  </div>



  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Người Tạo</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" required="requied" name = "ntao" id="ntao" value="<?php echo $r->NguoiTao;?>"required>
      
    </div>
    <div class="col-sm-4"></div>
  </div>
    
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Đường Dẫn</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" required="requied" name = "ddan" id="ddan" value="<?php echo $r->DuongDan;?>"required>
      
    </div>
    <div class="col-sm-4"></div>
  </div>
 
 

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tên Thể Loại</label>
    <div class="col-sm-5">
    <select class="form-control" id="tentloai" name="tentloai" >
    <?php
        $tloai = new MyConnect();
        
        $dstloai = $tloai->TenTheLoai();
        while($rtheloaip = $dstloai->fetch_object())
        {
           
        ?>
        <option value="<?php echo $rtheloaip->TenTheLoai;?>"> <?php echo $r->TheLoai; ?></option>
        <?php }?>
</select>
    </div>
    </div>

  
 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="suapl" id="suapl" >Sửa </button>
    </div>
  </div>
  


  
</form>
</div>
<?php
}
}
}
?>



<?php
if(isset ($_POST['suapl'] ))
{
  $aa = new MyConnect();
  $tenpl = $_POST['tenpl'];
  $img=$_POST['imgpl'];
  $ngtao=$_POST['ntao'];
  $ddan=$_POST['ddan'];
  $tlpl = $_POST['tentloai'];
  $th = $aa->SuaBH($id, $tenpl, $img,  $ngtao,  $ddan , $tlpl);
  
  header('location:http://localhost/webmusica/admin/?option=qlpl');

}

?>






















