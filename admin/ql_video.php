<?php include_once("../controllers/video.php");?>


<h3>QUẢN LÝ VIDEO</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
	<a class="btn btn-small btn-default" href ="?option=insert_vd">Thêm </a>
</div>

<table class="table table-hover table-bordered" id="myTable">
	<thead>
	<tr>
		<th>STT</th>
		<th>Tên Video</th>
		<th>Thể Loại</th>
		<th>Ca Sĩ</th>
		<th>Video</th>
		<th></th>
		<th></th>

	</tr>
	</thead>
	<tbody>
	<?php
	$i=1;
	$dsvd= Video::DanhSach();
	while($r = $dsvd->fetch_object())
	{

		?>
		<tr>


			<td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
			<td id="video_<?php echo $r->Id; ?>"><?php echo $r->TenVideo;?></td>
			<td> <?php echo $r->TheLoai ?> </td>
			<td> <?php echo $r->CaSi ?></td>
			<td> <?php echo $r->Video?></td>

			<td width="50"> <a class="btn btn-small btn-default"href="?option=upd_video&id=<?php echo $r->Id; ?>" >Sửa </a></td>
			<td width="50"> <a class="btn btn-small btn-danger delete-video"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_video&id=<?php echo $r->Id; ?>" > Xóa</a></td>


		</tr>

		<?php $i++;}?>

	</tbody>

</table>
