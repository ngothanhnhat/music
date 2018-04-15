
<?php
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $a = new MyConnect();

    $us = $a->LayBHID($id);
    if(mysqli_num_rows($us)==1)
    {
        while($r = $us->fetch_object())
        {
            # code...


?>


<h3>SỬA BÀI HÁT</h3>
<div class="sss" style="width: 800px; height: 550px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Bài Hát</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenbh" value="<?php echo $r->TenBaiHat;?>" name="tenbh" placeholder=""required >
    </div>
    <div class="col-sm-4"></div>
  </div>


  


  <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tên Ca Sĩ</label>
    <div class="col-sm-5">
      <select class="form-control" id="csid" name="csid" >
      <option value="0">[Chọn Ca Sĩ]</option>
          
      <?php
          $t = new MyConnect();
          $ds = $t->DSCaSi();
          while($cs = $ds->fetch_object())
          {?>
        <option   value="<?php echo $cs->id; ?>" <?php if( $cs->id==$r->CaSiId) echo "selected='selected'";?>>  <?php echo $cs->TenCaSi; ?></option>
        <?php }?>
      </select>

    </div>
  </div>

  <div class="form-group">
  <label for="input" class="col-sm-3 control-label">Tên Nhạc Sĩ</label>
  <div class="col-sm-5">
  <select class="form-control" id="nsid" name="nsid" >
  <option value="0">[Chọn Nhạc Sĩ]</option>
  
  <?php
      $c = new MyConnect();
      
      $dsns = $c->DSNhacSi();
      while($ns = $dsns->fetch_object())
      {
          
      
  ?>
      <option value="<?php echo $ns->id ;?>" <?php if ($ns->id== $r->NhacSiId) echo "selected='selected'";?>> <?php echo $ns->TenNhacSi; ?></option>
      <?php }?>
  </select>
  </div>
  </div>

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tên Thể Loại</label>
    <div class="col-sm-5">
    <select class="form-control" id="tlid" name="tlid" >
      <option value="0">[Chọn Thể Loại]</option>
      <?php
        $tl_cn = new MyConnect();
        
        $dstl = $tl_cn->DSTheLoai();
        while($tl = $dstl->fetch_object()) {
           
        ?>
        <option value = "<?php echo $tl->id ?>" <?php if($tl->id == $r->TheLoaiId) echo "selected='selected'"; ?> ><?php echo $tl->TenTheLoai ?></option>
        <?php }?>

    </select>

    </div>
    </div>

    
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Lời</label>
    <div class="col-sm-5">
        <textarea name="loi" id="loi"  cols="70" rows="10" value="<?php echo @$r->Loi;?>"> <?php echo @$r->Loi;?></textarea>
    </div>
    </div>
    
 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="suabh" id="suabh" >Sửa </button>
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
if(isset ($_POST['suabh'] ))
{
  $aa = new MyConnect();
  $ten = $_POST['tenbh'];
    $cs=$_POST['csid'];
  $ns=$_POST['nsid'];
  $tl=$_POST['tlid'];
  $loi = $_POST['loi'];
  $th = $aa->SuaBH($id, $ten, $cs, $ns, $tl ,$loi);
  
  header('location:http://localhost/webmusica/admin/?option=qlbh');

}

?>