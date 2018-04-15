<?php
// include_once("connect.php"); 
?>
<h3>THÊM PLAYLIST</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên PlayList</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenpl" name ="tenpl"  placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>


 

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label"> Thể Loại</label>
    <div class="col-sm-5">
    <select class="form-control" id="tenpltl" name="tenpltl">
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
    <label for="input" class="col-sm-3 control-label" >img</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="imga" name ="imga" placeholder="">
    </div>
    <div class="col-sm-4"></div>
  </div>


  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Người Tạo</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="ngtao" name="ngtao"  placeholder="" required>
    </div>
    <div class="col-sm-4"></div>
  </div>
    
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Đường Dẫn</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="duongdan" name="duongdan" placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="thempl">Thêm </button>
    </div>
  </div>
  


  
</form>
</div>



<?php
if(isset ($_POST['thempl'] ))
{
  $pl = new MyConnect();
  $tenpl = $_POST['tenpl'];

  $img=$_POST['imga'];
  $nt=$_POST['ngtao'];
  $dgdan = $_POST['duongdan'];
  $tla=$_POST['tenpltl'];
  $thpl = $pl->ThemPL($tenpl,$img, $nt , $dgdan,$tla);
  
  header('location:http://localhost/webmusica/admin/?option=qlpl');

}

?>
