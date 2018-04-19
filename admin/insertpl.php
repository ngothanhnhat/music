
<?php include_once('../controllers/casi.php');?>
<?php include_once('../controllers/nhacsi.php');?>
<?php include_once('../controllers/theloai.php');?>
<?php include_once('../controllers/playlist.php');?>

<h3>THÊM PLAYLIST</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_playlist" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên PlayList</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenpl" name ="tenpl"  placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>


    <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tên Thể Loại</label>
    <div class="col-sm-5">
        <select class="form-control" id="tenpltl" name="tenpltl">
           <option value="0">[Vui lòng chọn Thể Loại] </option>
               <?php
                 $tlx = new TheLoai();
        
                 $pltl = $tlx->DanhSachTheLoai();
                 while($r = $pltl->fetch_object())
                 {
                    
                 ?>
  
            <option value = "<?php echo $r->id ?>"><?php echo $r->TenTheLoai ?></option>
            <?php }?>
        </select>
    </div>
</div>



<div class="form-group">
<label for="input" class="col-sm-3 control-label">Hình</label>
  <div class="col-sm-5">
    <input type ="file" name ="hinh"/>
  </div>
</div>



  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" name="thempl">Thêm </button>
    </div>
  </div>
  


  
</form>
</div>




