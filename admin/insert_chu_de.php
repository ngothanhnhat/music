<?php include_once '../controllers/chude.php'?>
<?php 
$suacd = false;
$action= BASE_URL.'/controllers/xuly.php?task=them_chu_de';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$chu_de = new ChuDe($id);
  $suacd = !is_null($chu_de->getId());
	if($suacd){
	 $action= BASE_URL.'/controllers/xuly.php?task=sua_chu_de&id='.$chu_de->getId();
	}
}
?>
<?php if($suacd) { ?>
  <h3>SỬA CHỦ ĐỀ: <?php echo $chu_de->TenChuDe;?></h3>
<?php } else { ?>
  <h3>THÊM CHỦ ĐỀ</h3>
<?php } ?>

<div class="sss" style="width: 100%; height: auto; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo $action;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label for="ten_chu_de" class="col-sm-3 control-label" >Tên Chủ Đề</label>
    <div class="col-sm-6">
      <input value="<?php if($suacd) echo $chu_de->TenChuDe;?>" type="text" class="form-control" id="ten_chu_de" name="ten_chu_de" placeholder="" required>
    </div>
  </div>
<div class="form-group">
    <label for="mo_ta" class="col-sm-3 control-label" >Mô Tả</label>
    <div class="col-sm-6">
      <input value="<?php if($suacd) echo $chu_de->MoTa;?>" type="text" class="form-control" id="mo_ta" name="mo_ta" placeholder="" required>
    </div>
  </div>
	<div class="form-group">
		<img src="<?php echo  BASE_URL;?> <?php echo ($suacd && !empty($chu_de->Hinh))?'/img/chude/'.$chu_de->Hinh:'/img/No_Image_Available.png'; ?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
		<label for="hinh" class="col-md-3 control-label" >Hình</label>
		<input class="col-md-offset-3" type ="file" id="hinh" name ="hinh"/>
	</div>

  <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suacd) { ?>
        <button type="submit" class="btn btn-default" id="btn_sua" name="btn_sua" >Sửa</button>
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="btn_them" name="btn_them" >Lưu  </button>
      <?php } ?>
      </div> 
    </div>

  
  </form>
	<?php if($suacd) { ?>
	<hr>
	<div style="display: flex;justify-content: space-between;">
		<h4 style="">Danh sách playlist: </h4>
		<a data-toggle="modal" data-target="#DSPlaylist" class="btn btn-primary">Thêm Playlist</a>
	</div>

	<table class="table table-hover table-bordered" id="myTable">
		<thead>
		<tr>
			<th>STT</th>
			<th>Tên Playlist</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php

		$dsplaylist = $chu_de->Playlist;
		$i=1;
		foreach ($dsplaylist as $r)
		{
			?>
			<tr>
				<td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
				<td id="playlist_<?php echo $r->Id; ?>"><a href="<?php echo BASE_URL.'/admin/?option=upd_playlist&id='.$r->Id; ?>"><?php echo $r->TenPlaylist?></a></td>

				<td width="50"><a class="btn btn-small btn-danger delete-chude-playlist" href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_chu_de_playlist&chu_de=<?php echo $r->Id;?>&chude=<?php echo $chu_de->getId(); ?>" > Xóa</a></td>
			</tr>

			<?php $i++;}?>
		</tbody>
	</table>
</div>

<!-- Modal -->
<div id="DSPlaylist" class="modal fade" role="dialog">
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
							<th>Tên Playlist</th>
							<th>Tên Thể Loại</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						<?php
						$playlist = $chu_de->DSPlaylistChuaCo();
						$i=1;
						foreach ($playlist as $pl)
						{
							?>
							<tr>
								<td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
								<td id="playlist_<?php echo $pl->Id; ?>"><?php echo $pl->TenPlaylist?></td>
								<td> <?php echo $pl->TheLoai; ?> </td>
								<td style="text-align: center;" width="50"><label><input type="checkbox" name="playlist[]" value="<?php echo $pl->Id;?>" /><label></td>
							</tr>
							<?php $i++;}?>
						</tbody>
					</table>

				</div>
				<div class="modal-footer" style="margin-top: 0;">
					<button type="submit" class="btn btn-primary" name="add_more_pl">Thêm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php } ?>

</div>
