<?php include_once('../controllers/casi.php');?>
<?php 
$suacs = false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_ca_si';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$cs=new CaSi($id);
	$suacs = !is_null($cs->getId());
	
	if($suacs){
	 $ac= BASE_URL.'/controllers/xuly.php?task=sua_ca_si&id='.$cs->getId();
	}
}
?>
<?php if($suacs) { ?>
  <h3>SỬA CA SĨ: <?php echo $cs->TenCaSi;?></h3>
<?php } else { ?>
  <h3>THÊM CA SĨ</h3>
<?php } ?>
<div class="sss" style="width:800px; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label for="ten_ca_si" class="col-sm-3 control-label" >Tên Ca Sĩ</label>
    <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->TenCaSi;?>" type="text" class="form-control" id="ten_ca_si" name="ten_ca_si" placeholder="" required>
    </div>
  </div>

  <div class="form-group">
    <label for="ngay_sinh" class="col-sm-3 control-label" >Ngày Sinh</label>
    <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->NgaySinh;?>" type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" placeholder="" required>
    </div>
  </div>


	<div class="form-group">
	  <label for="que_quan" class="col-sm-3 control-label" >Quê Quán</label>
	  <div class="col-sm-7">
	    <input value="<?php if($suacs) echo $cs->QueQuan;?>" type="text" class="form-control" id="que_quan" name="que_quan" placeholder=""required>
	  </div>
	</div>

	<div class="form-group">
	    <label for="tieu_su" class="col-sm-3 control-label">Tiểu Sử</label>
	    <div class="col-sm-7">
	    <input value="<?php if($suacs) echo $cs->TieuSu;?>" type="text" class="form-control" id="tieu_su" name="tieu_su" placeholder="" required>
	    
	    </div>
	</div>
	<div class="form-group">
	  <img src="<?php echo  BASE_URL;?> <?php echo ($suacs && !empty($cs->Hinh))?'/img/casi/'.$cs->Hinh:'/img/No_Image_Available.png'; ?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
	  <label for="hinh" class="col-md-3 control-label" >Hình</label>
	  <input class="col-md-offset-3" type ="file" id="hinh" name ="hinh"/>
	</div>
  <div class="form-group">
    <div class="col-sm-offset-10 col-sm-2">
      <?php if($suacs) { ?>
      <button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
      <?php } else { ?>
      <button type="submit" class="btn btn-default" id="btn_them" name="btn_them" >Thêm </button>
    <?php } ?>
    </div>
  </div>
  
</form>
</div>