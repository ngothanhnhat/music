<?php include_once '../controllers/baihat.php'?>

<h3>QUẢN LÝ BÀI HÁT</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insert">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Bài Hát</th>
            <th>Tên Ca Sĩ</th>
            <th>Tên Nhạc Sĩ</th>
            <th>Tên Thể Loại</th>
       
            <th>Đường Dẫn</th>  
            <th>Lời Bài Hát</th>         
               
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $t = new BaiHat();
        $i=1;
        $ds = $t->DanhSachBH();
        while($r = $ds->fetch_object())
        {
           
        
    ?>
        <tr>
       

            <td style="text-align: center;"><?php echo $i."."; ?> </td>
            <td id="baihat_<?php echo $r->id; ?>"><?php echo $r->TenBaiHat?></td>
            <td> <?php echo $r->TenCaSi ?></td>
            <td> <?php echo $r->TenNhacSi ?> </td>
            <td > <?php echo $r->TheLoai ?> </td>
         
            <td> <?php echo $r->DuongDan ?> </td>
            <td> <?php echo $r->Loi ?> </td>
           <td> <a class="btn btn-small btn-default"href="?option=updatebh&id=<?php echo $r->id; ?>">Sửa </a></td>
           <td> <a class="btn btn-small btn-danger delete-baihat" href ="<?php echo BASE_URL;?>/xuly.php?task=xoa_bai_hat&id=<?php echo $r->id; ?>" > Xóa</a></td>
           

        </tr>

    <?php $i++;}?>
   
    </tbody>
    

</td>
            
            
            
        </tr>
  
</table> 

