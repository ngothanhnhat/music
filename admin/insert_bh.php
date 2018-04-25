<?php
  $suabh = false;
  $action= BASE_URL.'/controllers/xuly.php?task=them_bai_hat';
  
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $bai_hat = new BaiHat($id);
    $suabh = !is_null($bai_hat->getId());
    if($suabh){
      $action= BASE_URL.'/controllers/xuly.php?task=sua_bai_hat&id='.$bai_hat->getId();
      if (isset($_GET["back_url"])){
          $back_url = $_GET["back_url"];
          $action.='&b_url='.urlencode($back_url);
      }
    }
  }
?>
<?php if($suabh) { ?>
  <h3>SỬA BÀI HÁT: <?php echo $bai_hat->TenBaiHat;?></h3>
<?php } else { ?>
  <h3>THÊM BÀI HÁT</h3>
<?php } ?> 


<div class="sss" style="width: 800px; height: 600px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
  <form action="<?php echo $action;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="ten_bai_hat" class="col-sm-3 control-label" >Tên Bài Hát</label>
      <div class="col-sm-5">
        <input value="<?php if($suabh) echo $bai_hat->TenBaiHat;?>" type="text" class="form-control" id="ten_bai_hat" name="ten_bai_hat" placeholder="" required>
      </div>
    </div>
	  
    <div class="form-group">
      <label for="ca_si" class="col-sm-3 control-label">Tên Ca Sĩ</label>
      <div class="col-sm-5">
        <select class="form-control" id="ca_si" name="ca_si">
          <option value="0">[Vui lòng chọn Ca Sĩ] </option>
          <?php
              $ds = CaSi::DanhSachForSelection();
              while($r = $ds->fetch_object())
              {
          ?>
          <option value="<?php echo $r->Id; ?>"  <?php if($suabh && ($bai_hat->CaSi==$r->Id)) echo "selected='selected'"; ?>><?php echo $r->TenCaSi ?> </option>
          <?php }?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="nhac_si" class="col-sm-3 control-label">Tên Nhạc Sĩ</label>
      <div class="col-sm-5">
        <select class="form-control" id="nhac_si" name="nhac_si" >
          <option value="0">[Vui lòng chọn Nhạc Sĩ] </option>
          
          <?php
              $c = new NhacSi();
              
              $dsns = $c->DanhSachNhacSi();
              while($r = $dsns->fetch_object())
              {
                
              
          ?>
          <option value="<?php echo $r->id; ?>" <?php if($suabh && ($bai_hat->NhacSi==$r->id)) echo "selected='selected'"; ?>><?php echo $r->TenNhacSi ?></option>
          <?php }?>
        </select>
      </div>
    </div>
	  
    <div class="form-group">
      <label for="the_loai" class="col-sm-3 control-label">Tên Thể Loại</label>
      <div class="col-sm-5">
        <select class="form-control" id="the_loai" name="the_loai">
          <option value="0">[Vui lòng chọn Thể Loại] </option>
              <?php
                  $tl = new TheLoai();
            
                  $dstl = $tl->DanhSachTheLoai();
                  while($r = $dstl->fetch_object())
                  {
                  
                ?>
            <option value = "<?php echo $r->Id ?>" <?php if($suabh && ($bai_hat->TheLoai==$r->Id)) echo "selected='selected'"; ?>><?php echo $r->TenTheLoai ?></option>
            <?php }?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="audio" class="col-sm-3 control-label">Upload Audio</label>
        <div class="col-sm-9">      
        <?php if($suabh) {
          echo "<p style='float:left;margin-right:5px;'>".$bai_hat->Audio.".mp3</p>";
        }?>
          <input type ="file" name ="audio" id="audio"/>
        </div>
    </div>
    <div class="form-group">
      <label for="lyric" class="col-sm-3 control-label">Upload Lyric</label>
        <div class="col-sm-9">      
        <?php if($suabh){
          echo "<p style='float:left;margin-right:5px;'>".$bai_hat->Lyric.".lrc</p>";
        }
        ?>
          <input type ="file" name ="lyric" id="lyric"/>
        </div>
    </div>

  
  
    <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suabh) { ?>
        <button type="submit" class="btn btn-default" id="btnsua" name="btn_sua" >Lưu</button>
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="btnthem" name="btn_them" >Thêm</button>
      <?php } ?> 
      </div> 
    </div>
  </form>
</div>

