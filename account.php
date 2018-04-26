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
include_once("controllers/playlist.php");
include_once("controllers/video.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $nguoidung= new NguoiDung($id);
 }?>
<div class ="container">
	<div class ="row">
		<div class ="col-md-3">
			<div id='menuleft2' style="margin:50px;">
			<ul>
			 <li>
				 <a href='#qltk'><span>QL Tài Khoản</span></a>
			 </li>
			 <li class='active has-sub'>
				 <a href='#playlist'><span>Playlist</span></a>
			 </li>
			 <li><a href='#video'><span>Video</span></a></li>
			 <li class='last'>
				 <a href='#logout'><span>Đăng Xuất</span></a>
			 </li>


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
					<p>Tên: <?php echo $nguoidung->Username;?></p>
					<p>Email: <?php echo $nguoidung->Email; ?> </p>
					<p>Đổi mật khẩu:</p>
				</div>
			</div>

			<div class ="row">
				<div class ="col-md-12" style="border:1px solid #b1a9a9;margin-top: 20px;">
					<div class="col-sm-offset-8 col-sm-4">
					</div>
					<h4 > Playlist</h4>
					<?php
						$playlists = $nguoidung->getPlaylistWishlist();
						foreach ($playlists as $playlist){
					?>
					 <div class="col-md-2 tenpl">
						 <a href="<?php echo BASE_URL.'/index.php?option=nghe_playlist&id='.$playlist->Id; ?>"><?php echo $playlist->TenPlaylist; ?></a>
					 </div>
						<?php } ?>
				</div>
				<div class ="col-md-12" style="border:1px solid #b1a9a9;margin-top: 20px;">
	<div class="col-sm-offset-8 col-sm-4">
	</div>
	<h4 > Video</h4>
	</div>
				</div>
		</div>
	</div>
</div>
<script>
    $(function () {
        $('#menuleft2 li').click(s{
            console.log(this);
        }
    });

</script>
