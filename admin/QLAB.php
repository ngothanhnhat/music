<?php include_once("../controllers/album.php");?>
<h3>QUẢN LÝ ALBUM</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertab">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Album</th>
            <th>Thể Loại</th>
            <th>Năm Phát Hành</th>
            <th>Người Tạo</th>
            <th>imgalbum</th>         
            <th>Ca Sĩ</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
       
        $i=1;
        $dspl = Album::DanhSachAlbum(200);
        while($r = $dspl->fetch_object())
        {
           
        
    ?>
        <tr>
       

            <td style="text-align: center;"><?php echo $i."."; ?> </td>
            <td id="album_<?php echo $r->id; ?>"><?php echo $r->TenAlbum?></td>
            <td> <?php echo $r->TheLoai ?> </td>
            <td> <?php echo $r->NamPhatHanh ?> </td>
            <td> <?php echo $r->NguoiTao ?> </td>
            <td> <?php echo $r->imgalbum ?> </td>
            <td> <?php echo $r->TenCaSi ?></td>
            
           <td><a class="btn btn-small btn-default" href="?option=updateab&id=<?php echo $r->id; ?>" >Sửa </a></td>
           <td> <a class="btn btn-small btn-danger delete-album"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_album&id=<?php echo $r->id; ?>" > Xóa</a></td>
           

        </tr>

    <?php $i++;}?>
   
    </tbody>
  
</table> 

