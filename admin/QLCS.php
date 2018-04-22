<?php include_once("../controllers/casi.php");?>
<h3>QUẢN LÝ CA SĨ</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertcs">Thêm </a>
    </div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>Stt</td>
            <th>Tên Ca Sĩ</th>  
            <th>Ngày Sinh</th>         
            <th>Quê Quán</th>
            <th>img</th>
            <th></th>
            <th></th>


        </tr>
    </thead>
    <tbody>
    <?php
    $t = new CaSi();
    $i=1;
    $ds = $t->DanhSachCS();
    while($r = $ds->fetch_object())
    {
       
    
?>
    <tr>
   

        <td style="text-align: center;"><?php echo $i."."; ?> </td>
        <td id="casi_<?php echo $r->id; ?>"><?php echo $r->TenCaSi?></td>
        <td> <?php echo $r->NgaySinh?> </td>
        <td> <?php echo $r->QueQuan?> </td>
        <td> <?php echo $r->img?> </td>
       <td> <a class="btn btn-small btn-default cs" href="?option=updatecs&id=<?php echo $r->id; ?>">Sửa </a></td>
       <td> <a class="btn btn-small btn-danger delete-casi"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_ca_si&id=<?php echo $r->id; ?>" > Xóa</a></td>
       

    </tr>

<?php $i++;}?>

</tbody>

</table>



  