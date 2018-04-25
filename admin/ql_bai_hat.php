<?php include_once('../controllers/baihat.php')?>
<h3>QUẢN LÝ BÀI HÁT</h3>
<!-- <a class="btn btn-small btn-default" href ="?option=insert">Thêm </a> -->
<div class="col-sm-offset-11 col-sm-1">
	<a class="btn btn-small btn-default" href ="?option=insert_bh">Thêm </a>
</div>
 
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Bài Hát</th>
            <th>Ca Sĩ</th>
            <th>Nhạc Sĩ</th>
            <th>Thể Loại</th>
            <th>Audio</th>         
            <th>Lyric</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
        $ds = BaiHat::DanhSach();
        while($r = $ds->fetch_object())
        {
    ?>
      <tr>
          <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
          <td id="baihat_<?php echo $r->Id; ?>"><?php echo $r->TenBaiHat; ?></td>
          <td> <?php echo $r->TenCaSi; ?></td>
          <td> <?php echo $r->TenNhacSi; ?> </td>
          <td> <?php echo $r->TheLoai; ?> </td>
          <td> <?php echo $r->Audio; ?> </td>
          <td> <?php echo $r->Lyric; ?> </td>
          <td width="50"><a class="btn btn-small btn-default" href="?option=upd_bai_hat&id=<?php echo $r->Id; ?>">Sửa </a></td>
          <td width="50"><a class="btn btn-small btn-danger delete-baihat" href ="<?php echo BASE_URL; ?>/controllers/xuly.php?task=xoa_bai_hat&id=<?php echo $r->Id; ?>" > Xóa</a></td>
      </tr>

    <?php $i++;}?>
    </tbody>  
</table> 

