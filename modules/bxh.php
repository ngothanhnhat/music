<div class="row">

	<div class="col-md-12" style="margin-right:0px;">

	 <?php
			 $i=1;
			 $ds=BaiHat::DanhSach(10);
			 while($r = $ds->fetch_object())
			 {

	 ?>
				 <div class="col-md-12">
						 <p><?php echo $r->TenBaiHat;?> - <?php echo $r->TenCaSi;?> </p>
					   <hr>
				 </div>
				 <?php
						 $i++;
				 }?>

	</div>
</div>
