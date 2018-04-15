<?php
// include_once("connect.php"); 
?>
<h3>THÊM ALBUM</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Album</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenab" name ="tenab"  placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>


 

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label"> Thể Loại</label>
    <div class="col-sm-5">
    <select class="form-control" id="tenabtl" name="tenabtl">
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
    <label for="input" class="col-sm-3 control-label" >Năm Phát Hành</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nam" name ="nam" placeholder="">
    </div>
    <div class="col-sm-4"></div>
  </div>


  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >imgalbum</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="ngtao" name="ngtao"  placeholder="" required>
    </div>
    <div class="col-sm-4"></div>
  </div>
    
  
 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="themab">Thêm </button>
    </div>
  </div>
  


  
</form>
</div>



<?php
if(isset ($_POST['themab'] ))
{
  $pl = new MyConnect();
  $tenab = $_POST['tenab'];

  $img=$_POST['imga'];
  $tlab=$_POST['tenabtl'];
  $nam = $_POST['nam'];
  $hinh=$_POST['ngtao'];
  $thab = $pl->ThemAB($tenab,$img, $tlab , $nam,$hinh);
  
  header('location:http://localhost/webmusica/admin/?option=qlab');

}

?>
