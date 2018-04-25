<?php include_once("../controllers/theloai.php");?>
<h3>QUẢN LÝ THỂ LOẠI</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insert_tl">Thêm </a>
    </div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>Stt</th>  
            <th>Tên Thể Loại</th>             
            <th></th>             
            <th></th>
        </tr>
    </thead>
    <tbody>
			<?php
			$i=1;
			$dstl = TheLoai::DanhSach();
			while($r = $dstl->fetch_object())
			{
			?>
				<tr>
				<td style="text-align:center;" width="30"><?php echo $i."."; ?> </td>
					 <td id="theloai_<?php echo $r->Id;?>"><?php echo $r->TenTheLoai?></td>
					 <td width="50"> <a class="btn btn-small btn-default tl" href="?option=upd_the_loai&id=<?php echo $r->Id; ?>">Sửa </a></td>
					 <td width="50"> <a class="btn btn-small btn-danger delete-theloai"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_the_loai&id=<?php echo $r->Id; ?>" > Xóa</a></td>
				</tr>
			<?php $i++;}?>
    </tbody>
</table>
