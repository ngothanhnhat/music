<?php include_once("../controllers/chude.php");?>
<h3>QUẢN LÝ CHỦ ĐỀ</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insert_cd">Thêm </a>
    </div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Chủ Đề</th>             
            <th></th>             
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
    $dscd = ChuDe::DanhSach();
    while($r = $dscd->fetch_object())
    {
?>
    <tr>
    <td style="text-align:center;" width="30"><?php echo $i."."; ?> </td>
        <td id="chude_<?php echo $r->Id; ?>"><?php echo $r->TenChuDe?></td>
        
       <td width="50"> <a class="btn btn-small btn-default cd" href="?option=upd_chu_de&id=<?php echo $r->Id; ?>">Sửa </a></td>
       <td width="50"> <a class="btn btn-small btn-danger delete-chude"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_chu_de&id=<?php echo $r->Id; ?>" >Xóa</a></td>
    </tr>

<?php $i++;}?>

    </tbody>
</table>
