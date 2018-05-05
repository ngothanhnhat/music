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
		<h3>BÀI HÁT</h3>
		<?php
		include_once("controllers/baihat.php");
		$i=1;
		$dsbh = BaiHat::DanhSach();
		while($r = $dsbh->fetch_object())
		{
			if($i ==1)
				echo "<div class='row'>";
			?>
			<div class="col-md-6" >
				<p class ="TenBH">
					<a href= "index.php?option=nghe1bh&id=<?php echo $r->Id;?>">
						<?php echo $r->TenBaiHat;?> </a> - <a><?php echo $r->TenCaSi;?></a>
					<span id="" class="fas fa-headphones" style ="float:right;color:#999999;font-size:12px;" wgct="1"> <?php echo $r->LuotNghe?>
				</p>
				<hr>
			</div>
			<?php
			if($i ==2){
				echo "</div>";
				$i=0;
			}
			$i++;
		}?>
	</div>
	</div>