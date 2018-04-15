<?php
// include_once("connect.php"); 
?>
<h3>THÊM VIDEO </h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Video</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenvd" name ="tenvd"  placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>


 

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label"> Thể Loại</label>
    <div class="col-sm-5">
    <select class="form-control" id="tenvdtl" name="tenvdtl">
    <?php
        $tlx = new MyConnect();
        
        $pltl = $tlx->TenTheLoai();
        while($r = $pltl->fetch_object())
        {
           
        ?>
        <option><?php echo $r->TenTheLoai ?></option>
        <?php }?>
</select>
    </div>
    </div>





  
 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="themvd">Thêm </button>
    </div>
  </div>
  


  
</form>
</div>



<?php
if(isset ($_POST['themvd'] ))
{
  $vd = new MyConnect();
  $tenvd = $_POST['tenvd'];

  $tlvd= $_POST['tenvdtl'];

  $thvds = $vd->ThemVD($tenvd,$tlvd);
  
  header('location:http://localhost/webmusica/admin/?option=qlvd');

}

?>
