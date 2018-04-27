<?php include_once '../controllers/nhacsi.php'?>
<?php
$suans = false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_nhac_si';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$nhac_si = new NhacSi($id);
	$suans = !is_null($nhac_si->getId());
	if($suans){
		$ac= BASE_URL.'/controllers/xuly.php?task=sua_nhac_si&id='.$nhac_si->getId();
	}
}
?>
<?php if($suans) { ?>
	<h3>SỬA NHẠC SĨ: <?php echo $nhac_si->TenNhacSi;?></h3>
<?php } else { ?>
		<h3>THÊM NHẠC SĨ</h3>
<?php } ?>

<div class="sss" style="width: 500px; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

	<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form">
		<div class="form-group">
			<label for="ten_chu_de" class="col-sm-3 control-label" >Tên Nhạc Sĩ</label>
			<div class="col-sm-6">
				<input value="<?php if($suans) echo $nhac_si->TenNhacSi;?>" type="text" class="form-control" id="ten_nhac_si" name="ten_nhac_si" placeholder="" required>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-10 col-sm-2">
				<?php if($suans) { ?>
					<button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
				<?php } else { ?>
					<button type="submit" class="btn btn-default" id="btn_them" name="btn_them" >Thêm </button>
				<?php } ?>
			</div>
		</div>


	</form>

</div>

