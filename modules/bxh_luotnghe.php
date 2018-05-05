<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

		<?php
		$dsbxh=BaiHat::bxh_LuotNghe( 7);
		while($r = $dsbxh->fetch_object())
		{
			?>
			<div class="col-md-12">
				<p>	<a href= "index.php?option=nghe1bh&id=<?php echo $r->Id;?>" >
						<?php echo $r->TenBaiHat;?> </a><span id="" class="fas fa-headphones" style ="float:right;color:#999999;font-size:12px;" wgct="1"> <?php echo $r->LuotNghe?>
				</p>



				<hr>
			</div>
		<?php } ?>

	</div>
</div>
