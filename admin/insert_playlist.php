
<?php include_once('../controllers/casi.php');?>
<?php include_once('../controllers/theloai.php');?>
<?php include_once('../controllers/baihat.php');?>
<?php include_once('../controllers/playlist.php');?>
<?php 
  $suaab = false;
  $action= BASE_URL.'/controllers/xuly.php?task=them_playlist';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $playlist= new Playlist($id);
    
    $suaab = !is_null($playlist->getId());

    if($suaab){
      $action= BASE_URL.'/controllers/xuly.php?task=sua_playlist&id='.$playlist->getId();
      $back_url= '/admin/?option=upd_playlist&id='.$playlist->getId();
    }
  }
?>
<?php if($suaab) { ?>
  <h3>SỬA PLAYLIST: <?php echo $playlist->TenPlaylist;?></h3>
<?php } else { ?>
  <h3>THÊM PLAYLIST</h3>
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
    <label for="ten_playlist" class="col-sm-3 control-label" >Tên Playlist</label>
    <div class="col-sm-5">
      <input value="<?php if($suaab) echo $playlist->TenPlaylist;?>" type="text" class="form-control" id="ten_playlist" name="ten_playlist" placeholder="" required>

    </div>
    <div class="col-sm-4"></div>
  </div>
    <div class="form-group">
    <label for="the_loai" class="col-sm-3 control-label">Tên Thể Loại</label>
    <div class="col-sm-5">
        <select class="form-control" id="the_loai" name="the_loai">
          <option value="0">[Vui lòng chọn Thể Loại] </option>
              <?php
                  $tl = new TheLoai();
            
                  $dstl = $tl->DanhSach();
                  while($r = $dstl->fetch_object())
                  {
                    
                ?>
            <option value = "<?php echo $r->Id ?>"<?php  if($suaab && ($playlist->TheLoai==$r->Id)) echo"selected='selected'";?> ><?php echo $r->TenTheLoai ?></option>
            <?php }?>
        </select>
    </div>
  </div>
  <div class="form-group">
    <img src="<?php echo BASE_URL; ?><?php echo ($suaab && !empty($playlist->Hinh))?'/img/playlist/'.$playlist->Hinh:'/img/No_Image_Available.png'; ?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
    <label for="hinh" class="col-md-3 control-label" >Hình</label>
    <input class="col-md-offset-3" type ="file" id="hinh" name ="hinh"/>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
    <?php if($suaab) { ?>
        <button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="btn_luu_them">Lưu và thêm</button>
          <button type="submit" class="btn btn-default" name="btn_luu">Lưu</button>
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
          $baihats = $playlist->DSBaiHat();
        
          $i=1;
          while($r = $baihats->fetch_object())
          {
      ?>
      <tr>
        <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
        <td id="baihat_<?php echo $r->Id; ?>"><a href="<?php echo BASE_URL.'/admin/?option=upd_bai_hat&id='.$r->Id.'&back_url='.urlencode($back_url); ?>"><?php echo $r->TenBaiHat?></a></td>
        <td> <?php echo $r->TenCaSi; ?></td>
        <td> <?php echo $r->TenNhacSi; ?> </td>
        <td > <?php echo $r->TheLoai; ?> </td>
        <td width="50"><a class="btn btn-small btn-danger delete-baihat-playlist" href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_bai_hat_playlist&bai_hat=<?php echo $r->Id;?>&playlist=<?php echo $playlist->getId(); ?>" > Xóa</a></td>
      </tr>

      <?php $i++;}?>
    </tbody>  
  </table> 
</div>

<!-- Modal -->
<div id="DSBaiHat" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 70%;">
    <!-- Modal content-->
    <form method="POST" action="<?php echo BASE_URL.'/controllers/xuly.php/?task=add_bai_hat_to_playlist&id='.$playlist->getId(); ?>" role="form">
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
                  $baihats = $playlist->DSBaiHatChuaCo();
                  $i=1;
                  while($r = $baihats->fetch_object())
                  {
              ?>
              <tr>
                  <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
                  <td id="baihat_<?php echo $r->Id; ?>"><?php echo $r->TenBaiHat?></td>
                  <td> <?php echo $r->TenCaSi; ?></td>
                  <td> <?php echo $r->TenNhacSi; ?> </td>
                  <td> <?php echo $r->TheLoai; ?> </td>
                  <td style="text-align: center;" width="50"><label><input type="checkbox" name="baihats[]" value="<?php echo $r->Id;?>" /><label></td>
              </tr>
              <?php $i++;}?>
            </tbody>  
          </table> 
        </div>
        <div class="modal-footer" style="margin-top: 0;">
          <button type="submit" class="btn btn-primary" name="add_more_bh">Thêm</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php } ?>

</div>
