<?php include_once '../controllers/chude.php'?>
<?php 
$suacd = false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_chu_de';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$chu_de = new ChuDe($id);
  $suacd = !is_null($chu_de->getId());
	if($suacd){
	 $ac= BASE_URL.'/controllers/xuly.php?task=sua_chu_de&id='.$chu_de->getId();
	}
}
?>
<?php if($suacd) { ?>
  <h3>SỬA CHỦ ĐỀ: <?php echo $chu_de->TenChuDe;?></h3>
<?php } else { ?>
  <h3>THÊM CHỦ ĐỀ</h3>
<?php } ?>

<div class="sss" style="width: 500px; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form">
  <div class="form-group">
    <label for="ten_chu_de" class="col-sm-3 control-label" >Tên Chủ Đề</label>
    <div class="col-sm-6">
      <input value="<?php if($suacd) echo $chu_de->TenChuDe;?>" type="text" class="form-control" id="ten_chu_de" name="ten_chu_de" placeholder="" required>
    </div>
  </div>

  <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suacd) { ?>
        <button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="btn_them" name="btn_them" >Thêm </button>
      <?php } ?> 
      </div> 
    </div>
  
  
  </form>
  
</div>

