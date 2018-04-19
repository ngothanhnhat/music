
<?php include_once("../controllers/playlist.php");?>

<h3>QUẢN LÝ PLAYLIST</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insertpl">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên PlayList</th>
            <th>img</th>
            <th>Người Tạo</th>  
            <th>Thể Loại</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $t = new PlayList();
        $i=1;
        $dspl = $t->DanhSachPL();
        while($r = $dspl->fetch_object())
        {  
    ?>
        <tr>
       

            <td style="text-align: center;"><?php echo $i."."; ?> </td>
            <td id="playlist_<?php echo $r->id; ?>"><?php echo $r->TenPlayList?></td>
            <td> <?php echo $r->img ?> </td>
            <td> <?php echo $r->TenNguoiTao ?> </td>
           
            <td> <?php echo $r->TenTheLoai ?></td>
            
           <td> <a class="btn btn-small btn-default"href="?option=updatepl&id=<?php echo $r->id; ?>" >Sửa </a></td>
           <td> <a class="btn btn-small btn-danger delete-playlist"  href ="<?php echo BASE_URL;?>/xuly.php?task=xoa_playlist&id=<?php echo $r->id; ?>" > Xóa</a></td>
           

        </tr>

    <?php $i++;}?>
   
    </tbody>
    

</td>
            
            
            
        </tr>
  
</table> 

