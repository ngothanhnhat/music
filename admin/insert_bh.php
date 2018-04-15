<?php include_once '../controllers/casi.php'?>
<h3>THÊM BÀI HÁT</h3>
<div class="sss" style="width: 800px; height: 600px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_bai_hat" method="POST"  class="form-horizontal" role="form" >
  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Bài Hát</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tenbh" name="tenbh" placeholder=""required>
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
    <label for="input" class="col-sm-3 control-label">Tên Nhạc Sĩ</label>
    <div class="col-sm-5">
    <select class="form-control" id="nhacsiid" name="nhacsiid" >
    <option value="0">[Vui lòng chọn Nhạc Sĩ] </option>
    
    <?php
        $c = new MyConnect();
        
        $dsns = $c->DSNhacSi();
        while($r = $dsns->fetch_object())
        {
           
        
    ?>
  <option value="<?php echo $r->id; ?>"><?php echo $r->TenNhacSi ?></option>
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
        $tl = new MyConnect();
        
        $dstl = $tl->DSTheLoai();
        while($r = $dstl->fetch_object())
        {
           
        ?>
        <option value = "<?php echo $r->id ?>"><?php echo $r->TenTheLoai ?></option>
        <?php }?>
</select>
    </div>
    </div>

    <div class="form-group">
    <label for="input" class="col-sm-3 control-label">Lời</label>
    <div class="col-sm-5">
        <textarea name="loi" id="loi" cols="70" rows="10"></textarea>
    </div>
    </div>

 
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default" id="btnthem" name="btnthem" >Thêm </button>
    </div> 
  </div>

 
  </div>
      

</form>

</div>




<?php


?>
