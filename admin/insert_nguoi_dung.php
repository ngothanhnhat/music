<?php include_once('../controllers/nguoidung.php');?>
<?php
$suand=false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_nguoi_dung';
if(isset($_GET['id'])){
	$Id = $_GET['id'];
	$nguoi_dung = new NguoiDung($Id);
	$suand = !is_null($nguoi_dung->getId());
	if($suand){
		$ac =BASE_URL.'/controllers/xuly.php?task=sua_nguoi_dung&id='.$nguoi_dung->getId();
	}
}
?>
<?php if($suand){?>
	<h3>SỬA NGƯỜI DÙNG: <?php echo $nguoi_dung->Username;?></h3>
<?php } else {?>
	<h3> THÊM NGƯỜI DÙNG </h3>
<?php }?>
<div class="sss" style="width: 800px; height: auto ; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

	<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form">
		<div class="form-group">
			<label for="ten_nguoi_dung" class="col-sm-3 control-label" >Username</label>
			<div class="col-sm-5">
				<input value="<?php if($suand) echo $nguoi_dung->Username;?>" type="text" class="form-control"  name = "ten_nguoi_dung" id="ten_nguoi_dung" placeholder="" required="required">
			</div>
		</div>

		<div class="form-group">
			<label for="password" class="col-sm-3 control-label" >PassWord</label>
			<div class="col-sm-5">
				<input value="<?php if($suand) echo $nguoi_dung->Password;?>" type="password" class="form-control"  name = "mat_khau" id="mat_khau" placeholder="" required="required">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-3 control-label" >Email</label>
			<div class="col-sm-5">
				<input value="<?php if($suand) echo $nguoi_dung->Email;?>" type="text" class="form-control"  name = "email" id="email" placeholder="" required="required">
			</div>
		</div>

		<div class="form-group">
			<label for="phanquyen" class="col-sm-3 control-label" >PhanQuyen</label>
			<div class="col-sm-5">
				<input value="<?php if($suand) echo $nguoi_dung->PhanQuyen;?>" type="text" class="form-control"  name = "phanquyen" id="phanquyen" placeholder="" required="required">
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-offset-10 col-sm-2">
				<?php if($suand) { ?>
					<button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
				<?php } else { ?>
					<button type="submit" class="btn btn-default" id="btn_them" name="btn_them" >Thêm </button>
				<?php } ?>
			</div>
		</div>

	</form>

</div>
