<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

		<?php
		$dsbxh=BaiHat::bxh_LuotNghe( 10);
		while($r = $dsbxh->fetch_object())
		{
			?>
			<div class="col-md-12">
				<p>	<a href= "index.php?option=nghe1bh&id=<?php echo $r->Id;?>" style="color:#000;text-decoration:none;">
						<?php echo $r->TenBaiHat;?> </a>
				</p>



				<hr>
			</div>
		<?php } ?>

	</div>
</div>
