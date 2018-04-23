
<?php include_once('../controllers/casi.php');?>
<?php include_once('../controllers/theloai.php');?>
<?php include_once('../controllers/baihat.php');?>
<?php include_once('../controllers/album.php');?>
<?php 
  $suaab = false;
  $action= BASE_URL.'/controllers/xuly.php?task=them_album';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $ab= new Album($id);
    
    $suaab = isset($ab) && isset($ab->id);

    if($suaab){
      $action= BASE_URL.'/controllers/xuly.php?task=sua_album&id='.$ab->id;
    }
  }
?>
<?php if($suaab) { ?>
  <h3>SỬA ALBUM: <?php echo $ab->TenAlbum;?></h3> 
<?php } else { ?>
  <h3>THÊM ALBUM</h3>
<?php } ?> 

<div class="sss" style="width: 800px; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo $action;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
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
      <input value="<?php if($suaab) echo $ab->TenAlbum;?>" type="text" class="form-control" id="tenab" name="tenab" placeholder=""required>

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
        <option value="<?php echo $r->id; ?>"  <?php if($suaab && ($ab->CaSiId == $r->id)) echo "selected='selected'"; ?> ><?php echo $r->TenCaSi ?> </option>
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
            <option value = "<?php echo $r->id ?>"<?php  if($suaab && ($ab->TheLoaiId==$r->id)) echo"selected='selected'";?> ><?php echo $r->TenTheLoai ?></option>
            <?php }?>
        </select>
    </div>
  </div>      

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Năm Phát Hành</label>
    <div class="col-sm-5">
      <input value="<?php if($suaab) echo $ab->NamPhatHanh;?>" type="text" class="form-control" id="nam" name="nam" placeholder=""required>

    </div>
  </div>  
  <div class="form-group">
    <img src="<?php if($suaab && !empty($ab->Hinh)) echo BASE_URL.'/img/album/'.$ab->Hinh;?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
    <label for="input" class="col-sm-3 control-label" >Hình</label>
    <?php if($suaab){
      echo '<input hidden type ="text" value="'.$ab->Hinh.'" name ="old_pic"/>';
    }?>
  </div>
  <div class="form-group">
    <input class="col-md-5 col-md-offset-3" type ="file" id="hinh" name ="hinh"/>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
    <?php if($suaab) { ?>
        <button type="submit" class="btn btn-default" id="btnsua" name="btnsua" >Sửa</button> 
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="luu_them_ab">Lưu và thêm</button>
          <button type="submit" class="btn btn-default" name="luuab">Lưu</button>
      <?php } ?>       
    </div>
  </div>
</form>
<?php if($suaab) { ?>
<div>
  <hr>
  <div style="display: flex;justify-content: space-between;">
    <h4 style="">Danh sách bài hát: </h4>
    <a data-toggle="modal" data-target="#DSBaiHat" class="btn btn-primary">Thêm bài hát</a>
  </div>
   
  <table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Bài Hát</th>
            <th>Tên Ca Sĩ</th>
            <th>Tên Nhạc Sĩ</th>
            <th>Tên Thể Loại</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
      <?php
          $baihats = $ab->DSBaiHat();
        
          $i=1;
          while($r = $baihats->fetch_object())
          {
      ?>
      <tr>
          <td style="text-align: center;"><?php echo $i."."; ?> </td>
          <td id="baihat_<?php echo $r->id; ?>"><?php echo $r->TenBaiHat?></td>
          <td> <?php echo $r->TenCaSi ?></td>
          <td> <?php echo $r->TenNhacSi ?> </td>
          <td > <?php echo $r->TheLoai ?> </td>
          <td> <a class="btn btn-small btn-danger delete-baihat-album" href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_bai_hat_album&bai_hat=<?php echo $r->id;?>&album=<?php echo $ab->id; ?>" > Xóa</a></td>
      </tr>

      <?php $i++;}?>
    </tbody>  
  </table> 
</div>

<!-- Modal -->
<div id="DSBaiHat" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 70%;">
    <!-- Modal content-->
    <form method="POST" action="<?php echo $action; ?>" role="form">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <table class="table table-hover table-bordered dataTable" id="DSBaiHatTable">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Bài Hát</th>
                    <th>Tên Ca Sĩ</th>
                    <th>Tên Nhạc Sĩ</th>
                    <th>Tên Thể Loại</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <?php
                  $baihats = $ab->DSBaiHatChuaCo();
                  $i=1;
                  while($r = $baihats->fetch_object())
                  {
              ?>
              <tr>
                  <td style="text-align: center;"><?php echo $i."."; ?> </td>
                  <td id="baihat_<?php echo $r->id; ?>"><?php echo $r->TenBaiHat?></td>
                  <td> <?php echo $r->TenCaSi ?></td>
                  <td> <?php echo $r->TenNhacSi ?> </td>
                  <td > <?php echo $r->TheLoai ?> </td>
                  <td><label><input type="checkbox" name="baihats[]" value="<?php echo $r->id;?>" /><label></td>
              </tr>
              <?php $i++;}?>
            </tbody>  
          </table> 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="add_more_bh">Thêm</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php } ?>

</div>
