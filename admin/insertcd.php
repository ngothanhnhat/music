<?php include_once '../controllers/chude.php'?>
<?php 
$suacd = false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_chu_de';
if(isset($_GET['id'])){
  $id=$_GET['id'];
 $cd=ChuDe::LayCD($id);
 $suacd = isset($cd) && isset($cd->id);
 if($suacd){
   $ac= BASE_URL.'/controllers/xuly.php?task=sua_chu_de&id='.$cd->id;
 } 
}
?>
<?php if($suacd) { ?>
  <h3>SỬA CHỦ ĐỀ: <?php echo $cd->TenChuDe;?></h3> 
<?php } else { ?>
  <h3>THÊM CHỦ ĐỀ</h3>
<?php } ?>

<div class="sss" style="width: 500px; height: 200px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form">
  <div class="form-group">
    <label for="tenchude" class="col-sm-3 control-label" >Tên Chủ Đề</label>
    <div class="col-sm-6">
      <input value="<?php if($suacd) echo $cd->TenChuDe;?>" type="text" class="form-control" id="tenchude" name="tenchude" placeholder=""required>

    </div>
    <div class="col-sm-3"></div>
  </div>

  <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suacd) { ?>
        <button type="submit" class="btn btn-default" id="suacd" name="suacd" >Sửa</button> 
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="themcd" name="themcd" >Thêm </button>
      <?php } ?> 
      </div> 
    </div>
  
  
  </form>
  
</div>

