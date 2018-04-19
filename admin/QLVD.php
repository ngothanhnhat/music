<?php include_once("../controllers/video.php");?>


<h3>QUẢN LÝ VIDEO</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertvd">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Video</th>
           
            <th>Thể Loại</th>
            <th> Đường Dẫn</th>         
            <th>Ca Sĩ</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $t = new Video();
        $i=1;
        $dspl = $t->DanhSachVideo();
        while($r = $dspl->fetch_object())
        {
           
        
    ?>
        <tr>
       

            <td style="text-align: center;"><?php echo $i."."; ?> </td>
            <td id="video_<?php echo $r->id; ?>"><?php echo $r->TenVideo?></td>
            <td> <?php echo $r->TheLoai ?> </td>
            <td> <?php echo $r->DuongDan ?> </td>
            <td> <?php echo $r->TenCaSi ?></td>
            
           <td> <a class="btn btn-small btn-default"href="?option=updatepl&id=<?php echo $r->id; ?>" >Sửa </a></td>
           <td> <a class="btn btn-small btn-danger delete-video"  href ="processVD.php?id=<?php echo $r->id; ?>" > Xóa</a></td>
           

        </tr>

    <?php $i++;}?>
   
    </tbody>
    

</td>
            
            
            
        </tr>
  
</table> 

