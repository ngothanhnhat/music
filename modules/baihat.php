<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

		<?php
		include_once("controllers/baihat.php");
		$i=1;
		$dsbh = BaiHat::DanhSach(16);
		while($r = $dsbh->fetch_object())
		{
			if($i ==1)
				echo "<div class='row'>";
			?>
			<div>
				<p class ="TenBH">
					<a href= "index.php?option=nghe1bh&id=<?php echo $r->Id;?>" style="color:#000;text-decoration:none;">
						<?php echo $r->TenBaiHat;?> </a> - <?php echo $r->TenCaSi;?>
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