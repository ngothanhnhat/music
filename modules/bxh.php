<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

	 <?php

			 $ds=BaiHat::top_yeu_thich();
			 foreach ($ds as $r)
			 {
	 ?>
				 <div class="col-md-12">
						 <p><?php echo $r->TenBaiHat;?> - <?php echo $r->TenCaSi;?> </p>
					   <hr>
				 </div>
				 <?php } ?>

	</div>
</div>
