<?php include_once("../controllers/nhacsi.php");?>
<h3>QUẢN LÝ NHẠC SĨ</h3>
<div class="col-sm-offset-11 col-sm-1">
	<a class="btn btn-small btn-default" href ="?option=insert_ns">Thêm </a>
</div>
<table class="table table-hover table-bordered" id="myTable">
	<thead>
	<tr>
		<th>STT</th>
		<th>Tên Nhạc Sĩ</th>
		<th></th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i=1;
	$dsns = NhacSi::DanhSach();
	while($r = $dsns->fetch_object())
	{
		?>
		<tr>
			<td style="text-align:center;" width="30"><?php echo $i."."; ?> </td>
			<td id="chude_<?php echo $r->Id; ?>"><?php echo $r->TenNhacSi?></td>

			<td width="50"> <a class="btn btn-small btn-default cd" href="?option=upd_nhac_si&id=<?php echo $r->Id; ?>">Sửa </a></td>
			<td width="50"> <a class="btn btn-small btn-danger delete-nhacsi"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_nhac_si&id=<?php echo $r->Id; ?>" >Xóa</a></td>
		</tr>

		<?php $i++;}?>

	</tbody>
</table>
