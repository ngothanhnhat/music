<?php include_once('../controllers/casi.php');?>
<?php include_once('../controllers/nhacsi.php');?>
<?php include_once('../controllers/theloai.php');?>
<?php include_once('../controllers/baihat.php');?>
<?php 

  $suabh = false;
  $action= BASE_URL.'/controllers/xuly.php?task=them_bai_hat';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $bh=BaiHat::LayBH($id);
    $suabh = isset($bh) && isset($bh->id);
    if($suabh){
      $action= BASE_URL.'/controllers/xuly.php?task=sua_bai_hat&id='.$bh->id;
      if (isset($_GET["back_url"])){
          $back_url = $_GET["back_url"];
          $action.='&b_url='.urlencode($back_url);

      }

    }
  }
?>
<?php if($suabh) { ?>
  <h3>SỬA BÀI HÁT: <?php echo $bh->BaiHat;?></h3> 
<?php } else { ?>
  <h3>THÊM BÀI HÁT</h3>
<?php } ?> 


<div class="sss" style="width: 800px; height: 600px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
  <form action="<?php echo $action;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="input" class="col-sm-3 control-label" >Tên Bài Hát</label>
      <div class="col-sm-5">
        <input value="<?php if($suabh) echo $bh->BaiHat;?>" type="text" class="form-control" id="tenbh" name="tenbh" placeholder=""required>
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
          <option value="<?php echo $r->id; ?>"  <?php if($suabh && ($bh->CaSi==$r->id)) echo "selected='selected'"; ?>><?php echo $r->TenCaSi ?> </option>
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
              $c = new NhacSi();
              
              $dsns = $c->DanhSachNhacSi();
              while($r = $dsns->fetch_object())
              {
                
              
          ?>
          <option value="<?php echo $r->id; ?>" <?php if($suabh && ($bh->NhacSi==$r->id)) echo "selected='selected'"; ?>><?php echo $r->TenNhacSi ?></option>
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
              <option value = "<?php echo $r->id ?>" <?php if($suabh && ($bh->TheLoai==$r->id)) echo "selected='selected'"; ?>><?php echo $r->TenTheLoai ?></option>
              <?php }?>
          </select>
      </div>
    </div>

    <div class="form-group">
      <label for="input" class="col-sm-3 control-label">Upload Audio</label>
        <div class="col-sm-9">      
        <?php if($suabh) {
          echo '<input hidden type ="text" value="'.$bh->Audio.'" name ="old_source"/>';
          echo "<p style='float:left;margin-right:5px;'>".$bh->Audio.".mp3</p>";
        }?>
          <input type ="file" name ="source"/>
        </div>
    </div>
    <div class="form-group">
      <label for="input" class="col-sm-3 control-label">Upload Lyrics</label>
        <div class="col-sm-9">      
        <?php if($suabh){
          echo '<input hidden type ="text" value="'.$bh->Lyric.'" name ="old_lyric"/>';          
          echo "<p style='float:left;margin-right:5px;'>".$bh->Lyric.".lrc</p>";
        }
        ?>
          
          <input type ="file" name ="lyric"/>
        </div>
    </div>

  
  
    <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suabh) { ?>
        <button type="submit" class="btn btn-default" id="btnsua" name="btnsua" >Sửa</button> 
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="btnthem" name="btnthem" >Thêm </button>
      <?php } ?> 
      </div> 
    </div>
        

  </form>
</div>

