
<?php include_once('../controllers/casi.php');?>
<?php include_once('../controllers/theloai.php');?>
<h3>THÊM ALBUM</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_album" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
<?php
if(isset($_SESSION['success'])){?>
  <div class="alert alert-success alert-dismissible">
    <p><?php echo $_SESSION['success'];?></p>
  </div>
<?php
  unset($_SESSION['success']);
}?>

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Album</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenab" name ="tenab"  placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>
  
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tên Ca Sĩ</label>
    <div class="col-sm-5">
      <select class="form-control" id="casiid" name="casiid">
        <option value="0">[Vui lòng chọn Ca Sĩ] </option>

        <?php
            $t = new CaSi();
            $ds = $t->DSCaSi();
            while($r = $ds->fetch_object())
            {
        ?>
        <option value="<?php echo $r->id; ?>"><?php echo $r->TenCaSi ?> </option>
        <?php }?>
      </select>

    </div>
  </div>

<div class="form-group">
<label for="input" class="col-sm-3 control-label">Tên Thể Loại</label>
<div class="col-sm-5">
    <select class="form-control" id="tlid" name="tlid">
       <option value="0">[Vui lòng chọn Thể Loại] </option>
           <?php
               $tl = new TheLoai();
        
              $dstl = $tl->DanhSachTheLoai();
              while($r = $dstl->fetch_object())
              {
                
            ?>
        <option value = "<?php echo $r->id ?>"><?php echo $r->TenTheLoai ?></option>
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
  <label for="input" class="col-sm-3 control-label">Hình</label>
    <div class="col-sm-5">
      <input type ="file" name ="hinh"/>
    </div>
  </div>
  
  
 
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
      <button type="submit" class="btn btn-primary" name="luu_them_ab">Lưu và thêm</button>
      <button type="submit" class="btn btn-default" name="luuab">Lưu</button>
      
    </div>
  </div>
  


  
</form>
</div>
