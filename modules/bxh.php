<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

	 <?php

			 $ds=BaiHat::top_yeu_thich();
			 foreach ($ds as $r)
			 {
	 ?>
				 <div class="col-md-12">
					 <p class ="TenBH">
						 <a href= "index.php?option=nghe1bh&id=<?php echo $r->getId();?>">
							 <?php echo $r->TenBaiHat;?> </a> -<a> <?php echo $r->TenCaSi;?></a>

					 </p>
					 <hr>
				 </div>
				 <?php } ?>

	</div>
</div>
