
<?php include_once("controllers/chude.php");?>
<?php include_once("controllers/playlist.php");?>
<?php
$chu_de = ChuDe::DanhSach();
?>

<body>
	<?php include_once("modules/slider.php");?>
	<h3> CHỦ ĐỀ NỔI BẬT</h3>
	<?php
	foreach ($chu_de as $cd){

	?>
	<div class="col-md-4">
		<div class="chu-de">


			<div><img src="<?php echo BASE_URL.'/img/chude/'.$cd->Hinh.'.jpg';?>" alt=""style="width: 100%; height:auto;"> </div>
			<div><h2 style="font-size: 18px; padding-left: 5px;"> <a href ="<?php echo BASE_URL;?>/?option=nghe_chu_de&id=<?php echo $cd->getId(); ?>" > <?php echo $cd->TenChuDe; ?> </a></h2> </div>
			<ul class="playlists">
				<?php foreach ($cd->Playlist as $pl){?>
					<li><a href="<?php echo BASE_URL.'/index.php?option=nghe_playlist&plId='.$pl->Id; ?>"> <i class="fas fa-angle-right"></i><span> <?php echo $pl->TenPlaylist; ?></span></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
<?php  }?>

