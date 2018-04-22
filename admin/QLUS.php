
<?php include_once("../controllers/nguoidung.php");?>

<h3>QUẢN LÝ NGƯỜI DÙNG</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertus">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Người Dùng</th>
            <th>PassWord</th>
            <th>Email</th>
            <th>Phân Quyền</th>
                 
               
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $t = new NguoiDung();
        $i=1;
        $dsnd = $t->DanhSachND();
        while($r = $dsnd->fetch_object())
        {
           
        
    ?>
        <tr>
       

            <td style="text-align: center;"><?php echo $i."."; ?> </td>
            <td id="user_<?php echo $r->id; ?>"><?php echo $r->UserName?></td>
            <td> <?php echo $r->PassWord ?></td>
            <td> <?php echo $r->Email ?> </td>
            <td> <?php echo $r->PhanQuyen ?> </td>
           
           <td> <a class="btn btn-small btn-default" href="?option=updateus&id=<?php echo $r->id; ?>">Sửa </a></td>
           <td> <a class="btn btn-small btn-danger delete-user"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_nguoi_dung&id=<?php echo $r->id; ?>" > Xóa</a></td>
           

        </tr>

    <?php $i++;}?>
   
    </tbody>
    

</td>
            
            
            
        </tr>
  
</table> 

