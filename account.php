<?php
include_once("controllers/nguoidung.php");
include_once("controllers/baihat.php");
include_once("controllers/playlist.php");
include_once("controllers/video.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $nguoidung= new NguoiDung($id);
 }?>

<div class ="row">
	<div class="col-md-3 pull-right">
		<h4>BXH BÀI HÁT YÊU THÍCH</h4>
		<?php include_once("modules/bxh.php");?>
		<h4>BÀI HÁT NGHE NHIỀU NHẤT </h4>
		<?php include_once("modules/bxh_luotnghe.php");?>
	</div>

	<div class ="col-md-9">

			<div class ="row">
				<h3> QUẢN LÍ TÀI KHOẢN</h3>
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
			<br>
			<h3> DANH SÁCH ĐÃ YÊU THÍCH</h3>
			<div id="cssmenu1">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation " class="active"><a href="#Baihat" aria-controls="Baihat" role="tab" data-toggle="tab">Bài Hát </a></li>
					<li role="presentation"><a href="#Playlist" aria-controls="Playlist" role="tab" data-toggle="tab">Playlist </a></li>
					<li role="presentation"><a href="#Video" aria-controls="Video" role="tab" data-toggle="tab">Video </a></li>
				</ul>


			</div>

			<br>

<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="Baihat">
					<?php
					$dsbaihat= $nguoidung->getBaihatlistWishlist();
					foreach ($dsbaihat as $baihat){
						?>
						<a href= "index.php?option=nghe1bh&id=<?php echo $baihat->Id;?>"  style="color:#000;text-decoration:none;"><?php echo $baihat->TenBaiHat; ?> </a>
						<hr>
					<?php } ?>

</div>



<div role="tabpanel" class="tab-pane" id="Playlist">
	<?php
	$i=1;
	$playlists = $nguoidung->getPlaylistWishlist();
	foreach ($playlists as $playlist){?>
		<?php
			if($i ==1)
				echo "<div class='row'>";
				?>
				<div class="col-md-3">

					<img style=" width: 100%;height:140px;" src="img/playlist/<?php echo $playlist->Hinh;?>">
					<p class="TenBH"> <a href="index.php?option=nghe_playlist&plId=<?php echo 					$playlist->Id;?>" style="color:#000;text-decoration:none;">  <?php echo $playlist->TenPlaylist;?> </a> </p>

				</div>
				<?php
					if($i ==4)
					{
					echo "</div>";
					$i =0;
					}
					$i++; ?>
					<?php } ?>

				</div>
</div>


<div role="tabpanel" class="tab-pane" id="Video">
	<?php
	$i =1;
	$videos = $nguoidung->getVideoWishlist();
	foreach ($videos as $video){?>
		<?php
		if($i ==1)
			echo "<div class='row'>";
			?>

		<div class="col-md-3">

				<a href="index.php?option=playvideo&id=<?php echo $video->Id;?>" style="color:#000;text-decoration:none;"> 							<img style=" width: 100%;height:140px;" src="img/img_vd/<?php echo $video->Hinh;?>.jpg" > </a>
				<p class="TenBH"> <a href="index.php?option=playvideo&id=<?php echo $video->Id;								?>" style="color:#000;text-decoration:none;">  <?php echo $video->TenVideo;?> </a> </p>

		</div>

			<?php
				if($i ==4)
				{
					echo "</div>";
					$i =0;
				}
				$i++; ?>
				<?php } ?>

</div>



	</div>

</div>





</div>