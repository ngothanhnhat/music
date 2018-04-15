
<h3>QUẢN LÝ CHỦ ĐỀ</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertcd">Thêm </a>
    </div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>Stt</th>  
            <th>Tên Chủ Đề</th>             
            <th></th>             
            <th></th>             
                      

        </tr>
    </thead>
    <tbody>
    <?php
    $t = new MyConnect();
    $i=1;
    $dscd = $t->DanhSachCD();
    while($r = $dscd->fetch_object())
    {
       
    
?>
    <tr>
    <td style="text-align:center;"><?php echo $i."."; ?> </td>
        <td id="chude_<?php echo $r->id; ?>"><?php echo $r->TenChuDe?></td>
        
       <td> <a class="btn btn-small btn-default cd" href="?option=updatecd&id=<?php echo $r->id; ?>">Sửa </a></td>
       <td> <a class="btn btn-small btn-danger delete-chude"  href ="proccessQLCD.php?id=<?php echo $r->id; ?>" > Xóa</a></td>
       

    </tr>

<?php $i++;}?>

    </tbody>
</table>
