<?php
include_once("DatabaseProvider.php");
include_once("controllers/controller.php");
include_once("controllers/playlist.php");
include_once("controllers/chude.php");
include_once("controllers/baihat.php");
include_once("controllers/video.php");

?>
<?php
	$keyword= $_POST['key'];
	$baihat_list = BaiHat::search($keyword);
	$video_list = Video::search($keyword);
	$playlist_list = Playlist::search($keyword);
?>
<div class="row">
	<h3>TÌM KIẾM</h3>
	<h4><?php echo "Bạn muốn tìm bài hát, video hay playlist cho "."'".$keyword. "'"; ?></h4>
</div>
<div> <h3>BÀI HÁT</h3></div>
<div class="col-md-9">
	<?php

foreach ($baihat_list as $row){?>
			<a href= "index.php?option=nghe1bh&id=<?php echo $row->getId();?>"  style="color:#000;text-decoration:none;"><?php echo $row->TenBaiHat; ?> </a>
			<hr>
	<?php } ?>

	<div> <h3>VIDEO</h3></div>
	<?php
	$i =1;
	foreach ($video_list as $row){?>
	<?php
	if($i ==1)
	echo "<div class='row'>";
		?>
		<div class="col-md-3">

			<a href="index.php?option=playvideo&id=<?php echo $row->getId();?>" style="color:#000;text-decoration:none;"> <img style=" width: 100%;height:140px;" src="img/img_vd/<?php echo $row->Hinh;?>.jpg" > </a>
			<p class="TenBH"> <a href="index.php?option=playvideo&id=<?php echo $row->getId();?>" style="color:#000;text-decoration:none;">  <?php echo $row->TenVideo;?> </a> </p>

		</div>

		<?php
		if($i ==4)
		{
			echo "</div>";
			$i =0;
		}
		$i++; ?>
	<?php } ?>

	<hr>
		<div> <h3>PLAYLIST</h3></div>
	<?php
	$i = 1;
	foreach ($playlist_list as $row){?>
			<?php
			if($i ==1)
			echo "<div class='row'>";
				?>
			<div class="col-md-3">

				<img style=" width: 100%;height:140px;" src="img/playlist/<?php echo $row->Hinh;?>">
				<p class="TenBH"> <a href="index.php?option=nghe_playlist&plId=<?php echo $row->getId();?>" style="color:#000;text-decoration:none;">  <?php echo $row->TenPlaylist;?> </a> </p>

			</div>
				<?php
if($i ==4)
{
	echo "</div>";
	$i =0;
}
$i++; ?>

	<?php } ?>
				<hr>

</div>

