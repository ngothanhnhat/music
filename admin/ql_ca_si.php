<?php include_once("../controllers/casi.php");?>
<h3>QUẢN LÝ CA SĨ</h3>
<div class="col-sm-offset-11 col-sm-1">
	<a class="btn btn-small btn-default" href ="?option=insert_ca_si">Thêm </a>
</div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
      <tr>
        <th>STT </th>
        <th>Tên Ca Sĩ</th>
        <th>Ngày Sinh</th>
        <th>Quê Quán</th>
        <th>Tiểu Sử</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
	  <tbody>
      <?php
		    $i=1;
		    $ds = CaSi::DanhSach();
		    while($r = $ds->fetch_object()){
			?>
	    <tr>
	      <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
	      <td id="casi_<?php echo $r->Id; ?>"><?php echo $r->TenCaSi?></td>
	      <td width="100"> <?php echo $r->NgaySinh;?> </td>
	      <td> <?php echo $r->QueQuan;?> </td>
	      <td> <?php echo shortenLongString($r->TieuSu);?> </td>
				<td width="50"><a class="btn btn-small btn-default cs" href="?option=upd_ca_si&id=<?php echo $r->Id; ?>">Sửa </a></td>
				<td width="50"><a class="btn btn-small btn-danger delete-casi"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_ca_si&id=<?php echo $r->Id; ?>" > Xóa</a></td>
	    </tr>
			<?php $i++;}?>
		</tbody>

</table>



  