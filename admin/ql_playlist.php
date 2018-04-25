<?php include_once("../controllers/playlist.php");?>
<h3>QUẢN LÝ PLAYLIST</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insert_playlist">Thêm </a>
    </div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Playlist</th>
            <th>Thể Loại</th>
            <th>Người Tạo</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
      $i=1;
      $dspl = Playlist::DanhSach();
      while($r = $dspl->fetch_object()){
    ?>
      <tr>
        <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
        <td id="playlist_<?php echo $r->Id; ?>"><?php echo $r->TenPlaylist?></td>
        <td> <?php echo $r->TheLoai; ?> </td>
        <td> <?php echo $r->UserName; ?> </td>
	      <td width="50"><a class="btn btn-small btn-default" href="?option=upd_playlist&id=<?php echo $r->Id; ?>" >Sửa </a></td>
	      <td width="50"><a class="btn btn-small btn-danger delete-playlist"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_playlist&id=<?php echo $r->Id; ?>" > Xóa</a></td>
      </tr>

    <?php $i++;}?>
   
    </tbody>
  
</table> 

