<?php include_once('../controllers/video.php');?>
<?php
$suavd=false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_video';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$video = new Video($id);
	$suavd = !is_null($video->getId());
	if($suavd){
		$ac =BASE_URL.'/controllers/xuly.php?task=sua_video&id='.$video->getId();
	}
}
?>
<?php if($suavd){?>
	<h3>SỬA VIDEO: <?php echo $video->TenVideo;?></h3>
<?php } else {?>
	<h3> THÊM VIDEO</h3>
<?php }?>

<div class="sss" style="width: 800px; height: height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
	<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">

		<div class="form-group">
			<label for="ten_video" class="col-sm-3 control-label" >Tên Video</label>
			<div class="col-sm-5">
				<input value="<?php if($suavd) echo $video->TenVideo;?>" type="text" class="form-control"  name = "ten_video" id="ten_video" placeholder="" required="required">
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
						<option value="<?php echo $r->Id; ?>"  <?php if($suavd && ($video->CaSi==$r->Id)) echo "selected='selected'"; ?>><?php echo $r->TenCaSi ?> </option>
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

					$dstl = TheLoai::DanhSach();
					while($r = $dstl->fetch_object())
					{

						?>
						<option value = "<?php echo $r->Id ?>" <?php if($suavd && ($video->TheLoai==$r->Id)) echo "selected='selected'"; ?>><?php echo $r->TenTheLoai ?></option>
					<?php }?>
				</select>
			</div>
		</div>


		<div class="form-group">
			<label for="mv" class="col-sm-3 control-label">Upload Video</label>
			<div class="col-sm-9">
				<?php if($suavd) {
					echo "<p style='float:left;margin-right:5px;'>".$video->Video.".mp4</p>";
				}?>
				<input type ="file" name ="mv" id="mv"/>
			</div>
		</div>

		<div class="form-group">
			<label for="lyric" class="col-sm-3 control-label">Upload Lyric</label>
			<div class="col-sm-9">
				<?php if($suavd){
					echo "<p style='float:left;margin-right:5px;'>".$video->Lyric.".lrc</p>";
				}
				?>
				<input type ="file" name ="lyric" id="lyric" accept=".lrc"/>
			</div>
		</div>

		<div class="form-group">
			<img src="<?php echo BASE_URL;?> <?php echo ($suavd && !empty($video->Hinh))?'/img/img_vd/'.$video->Hinh:'/img/No_Image_Available.png'; ?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
			<label for="hinh" class="col-md-3 control-label" >Hình</label>
			<input class="col-md-offset-3" type ="file" id="hinh" name ="hinh"/>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-10 col-sm-2">
				<?php if($suavd) { ?>
					<button type="submit" class="btn btn-default" id="btnsua" name="btn_sua" >Lưu</button>
				<?php } else { ?>
					<button type="submit" class="btn btn-default" id="btnthem" name="btn_them" >Thêm</button>
				<?php } ?>
			</div>
		</div>


	</form>
</div>

