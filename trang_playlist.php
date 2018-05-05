<?php
include_once("DatabaseProvider.php");
include_once("controllers/controller.php");
?>



<div class="row" style="margin:5px;">
	<div class="col-md-9">
		<div class="row" >
			<?php include_once("modules/slider.php");?>
		</div>
		<br>
	</div>

	<div class="row">
		<div class="col-md-9">
			<h3>PLAYLIST</h3>
			<?php
			$i=1;
			$ds = Playlist::DanhSach();
			while($r = $ds->fetch_object())
			{
				if($i ==1)
					echo "<div class='row'>";
				?>
				<div class="col-md-3">

					<img style=" width: 100%;height:140px;" src="img/playlist/<?php echo $r->Hinh;?>">
					<p class="TenBH"> <a href="index.php?option=nghe_playlist&plId=<?php echo $r->Id?>">  <?php echo $r->TenPlaylist;?> </a> </p>

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
	</div>