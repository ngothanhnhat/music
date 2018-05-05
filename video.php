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
		<h3>VIDEO</h3>
</div>

	<div class="row">

		<?php include_once("controllers/video.php");?>

		<?php

		$i=1;

		$vd = Video::DanhSach();
		while($s = $vd->fetch_object())
		{
			if($i ==1)
				echo "<div class='col-md-9'>";

			?>

			<div class="col-md-3">

				<a href="index.php?option=playvideo&id=<?php echo $s->Id?>"> <img style=" width: 100%;height:140px;" src="img/img_vd/<?php echo $s->Hinh;?>.jpg" > </a>
				<p class="TenBH"> <a href="index.php?option=playvideo&id=<?php echo $s->Id?>" >  <?php echo $s->TenVideo;?> </a> </p>

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
