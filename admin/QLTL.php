<?php include_once("../controllers/theloai.php")?>
<h3>QUẢN LÝ THỂ LOẠI</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=inserttl">Thêm </a>
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
    $t = new TheLoai();
    $i=1;
    $dstl = $t->DanhSachTheLoai();
    while($r = $dstl->fetch_object())
    {
       
    
?>
    <tr>
    <td style="text-align:center;"><?php echo $i."."; ?> </td>
        <td id="theloai_<?php echo $r->id; ?>"><?php echo $r->TenTheLoai?></td>
        
       <td> <a class="btn btn-small btn-default tl" href="?option=updatetl&id=<?php echo $r->id; ?>">Sửa </a></td>
       <td> <a class="btn btn-small btn-danger delete-theloai"  href ="<?php echo BASE_URL;?>/xuly.php?task=xoa_the_loai&id=<?php echo $r->id; ?>" > Xóa</a></td>
       

    </tr>

<?php $i++;}?>

    </tbody>
</table>
