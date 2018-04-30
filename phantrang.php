<?php include_once("configs/global.php"); ?>
<?php include_once('DatabaseProvider.php'); ?>
<?php include_once("configs/global.php");?>
<?php include_once("controllers/controller.php");?>
<?php include_once("controllers/playlist.php");?>
<?php include_once("modules/head.php");?>


	<?php
	$sotin1trang = 4;
	$trang = $_GET['trang'];
	$from = ($trang + 1)*$sotin1trang;
						$i=1;
						$ds = Playlist::DanhSach($from,$sotin1trang);
						while($r = $ds->fetch_object())
						{
							if($i ==1)
								echo "<div class='row'>";
							?>
							<div class="col-md-3">
								<img style=" width: 100%;height:140px;" src="img/playlist/<?php echo $r->Hinh;?>">
								<p class="TenBH"> <a href="index.php?option=nghe_playlist&plId=<?php echo $r->Id?>" style="color:#000;text-decoration:none;">
								<?php echo $r->TenPlaylist;?> </a> </p>

							</div>
							<?php
								if($i ==4)
								{
									echo "</div>";
									$i =0;
								}
								$i++;
							}?>

		</div>
