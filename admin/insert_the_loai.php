
<?php include_once('../controllers/theloai.php');?>
<?php
$suatl=false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_the_loai';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$the_loai = new TheLoai($id);
	$suatl = !is_null($the_loai->getId());
	if($suatl){
		$ac =BASE_URL.'/controllers/xuly.php?task=sua_the_loai&id='.$the_loai->getId();
	}
}
?>
<?php if($suatl){?>
<h3>SỬA THỂ LOẠI: <?php echo $the_loai->TenTheLoai;?></h3>
<?php } else {?>
<h3> THÊM THỂ LOẠI</h3>
<?php }?>

<div class="sss" style="width: 500px; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo $ac;?>" method="POST" class="form-horizontal"  role="form">
  <div class="form-group">
    <label for="ten_the_loai" class="col-sm-3 control-label" >Tên Thể Loại</label>
    <div class="col-sm-6">
      <input value="<?php if($suatl) echo $the_loai->TenTheLoai;?>" type="text" class="form-control"  name = "ten_the_loai" id="ten_the_loai" placeholder="" required="required">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
			<?php if($suatl){?>
      <button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua">Sửa </button>
			<?php }else {?>
			<button type="submit" class="btn btn-default" id="btn_them" name="btn_them">Thêm </button>
			<?php }?>
		</div>
  </div>   
  
  </form>
  
</div>
