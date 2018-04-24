<style>
.tenpl{
    /* background:#ddd; */
    margin: 10px;
    background-image: url('img/hhnen.jpg');
    height:100px;
    text-align:center;
    font-weight: bold;
}
</style>

<?php 
include_once("controllers/nguoidung.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $nguoidung= new NguoiDung();
    $nd = $nguoidung->LayNDID($id);


 }?>






<div class ="container">
    <div class ="row">
<div class ="col-md-3">
<div id='menuleft2' style="margin:50px;">
<ul>
   <li><a href='#'><span>QL Tài Khoản</span></a></li>
   <li class='active has-sub'><a href='#'><span>Playlist</span></a>
      
   </li>
   <li><a href='#'><span>Video</span></a></li>
   <li class='last'><a href='#'><span>Đăng Xuất</span></a></li>


</ul>
</div>
</div>
<div class ="col-md-9">
<h3> QUẢN LÍ TÀI KHOẢN</h3>
<div class ="row">
<div class ="col-md-5" style="border:1px solid #b1a9a9;">
<div class="col-sm-offset-8 col-sm-4">
<button type="button" class="btn btn-default" style="margin-top:10px;">Chỉnh Sửa</button>
</div>
<h4> Giới Thiệu</h4>

<?php
while($row = $nd->fetch_object()){
    echo "<p>Ten: ".$row->UserName."</p>";
    echo "<p>Email: ".$row->Email."</p>";
    echo "<p>Đổi mật khẩu:</p>";
}
?>
</div>

</div>

<div class ="row">
<div class ="col-md-12" style="border:1px solid #b1a9a9;margin-top: 20px;">
<div class="col-sm-offset-8 col-sm-4">
<button type="button" class="btn btn-default" style="margin-top:10px;">Chỉnh Sửa</button>
</div>
<h4 > Playlist</h4>
<?php
while($r = $plus->fetch_object()){
    ?>
       <div class="col-md-2 tenpl">
           <?= $r->TenPlayList;?>
       </div>
       
   <?php }?>
    
</div>
<div class ="col-md-12" style="border:1px solid #b1a9a9;margin-top: 20px;">
<div class="col-sm-offset-8 col-sm-4">
<button type="button" class="btn btn-default" style="margin-top:10px;">Chỉnh Sửa</button>
</div>
<h4 > Video</h4>
<?php
while($r = $plus->fetch_object()){
    ?>
       <div class="col-md-2 tenpl">
           <?= $r->TenPlayList;?>
       </div>
       
   <?php }?>
</div>

</div>
