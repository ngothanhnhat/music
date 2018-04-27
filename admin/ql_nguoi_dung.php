
<?php include_once("../controllers/nguoidung.php");?>
<h3>QUẢN LÝ NGƯỜI DÙNG</h3>
<div class="col-sm-offset-11 col-sm-1">
<a class="btn btn-small btn-default" href ="?option=insert_us">Thêm </a>
    </div>
<table class="table table-hover table-bordered" id="myTable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phân Quyền</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
        $dsnd = NguoiDung::DanhSach();
        while($r = $dsnd->fetch_object())
        {
    ?>
        <tr>
            <td style="text-align: center;" width="30"><?php echo $i."."; ?> </td>
            <td id="user_<?php echo $r->Id; ?>"><?php echo $r->Username?></td>
            <td> <?php echo $r->Email ?> </td>
            <td> <?php echo $r->PhanQuyen ?> </td>
           
           <td width="50"> <a class="btn btn-small btn-default" href="?option=upd_nguoi_dung&id=<?php echo $r->Id; ?>">Sửa </a></td>
           <td width="50"> <a class="btn btn-small btn-danger delete-user"  href ="<?php echo BASE_URL;?>/controllers/xuly.php?task=xoa_nguoi_dung&id=<?php echo $r->Id; ?>" > Xóa</a></td>
        </tr>

    <?php $i++;}?>
   
    </tbody>
  
</table> 

