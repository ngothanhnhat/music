

<?php

include_once("controllers/casi.php");
include_once("controllers/video.php");
if(isset($_GET['id'])){
	$id= $_GET['id'];
	$video= new Video($id);
}else{
	header('location:'.BASE_URL.'/?option=video');
}
?>
	<div class="row" style="margin:5px;">
		<div class="row">
		<div class="col-md-9">
			<h3> <?php echo $video->TenVideo;?><i id='wishlist'  class='fas fa-heart uncheck' style='float:right; margin-right: 40px;'></i> </h3>
			<video width="800" height="500" controls autoplay>
				<source src="<?php echo BASE_URL;?>/video/<?php echo $video->Video;?>.mp4" type="video/mp4">

			</video>

			<div class="col-md-11" id="lyric">
				<p>Bài hát: <span style="color: #5bc0de; font-size: 20px;"><?php echo $video->TenVideo	;?></span></p>
				<p>Ca sĩ: 	<span style="font-style: italic;"><?php echo $video->getCaSi()->TenCaSi;?></span></p>
				<div id="div-lyric">
					<?php echo $video->LyricString?>
				</div>
				<div class="more_add" id="divMoreAddLyric">
					<a href="javascript:;" id="seeMoreLyric" title="Xem toàn bộ" class="btn_view_more">Xem toàn bộ <i class="fa fa-angle-double-down"></i></a>
					<a href="javascript:;" hidden id="hideMoreLyric" title="Thu gọn" class="btn_view_hide">Thu gọn <i class="fa fa-angle-double-up"></i></a>
				</div>
			</div>
	<div class="row">

		<div class="col-md-9">

			<h3> VIDEO </h3>
			<div class="row">
				<?php
				$Vdgiongten= $video->getVideoGiongTen();
				while($s = $Vdgiongten->fetch_object()){?>
					<div class="col-md-3">
						<a href="index.php?option=playvideo&id=<?php echo $s->Id?>" style="color:#000;text-decoration:none;"> <img style=" width: 100%;height:140px;" src="img/img_vd/<?php echo $s->Hinh;?>.jpg" > </a>
						<p class="TenBH"> <a href="index.php?option=playvideo&id=<?php echo $s->Id?>" style="color:#000;text-decoration:none;">  <?php echo $s->TenVideo;?> </a> </p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
			<script>
			// View lyric process
			$('#seeMoreLyric').click(function () {
			$(this).hide();
			$('#hideMoreLyric').show();

			$('#div-lyric').attr("style", "height:auto;max-height:none;");
			});
			$('#hideMoreLyric').click(function () {
			$(this).hide();
			$('#seeMoreLyric').show();
			$("#div-lyric").attr("style", "height:auto;max-height:255px;overflow:hidden;");
			});
			</script>
		</div>
			<div class="col-md-3">
					<h3>NGHE TIẾP</h3>
					<?php include("modules/baihat.php");?>
				</div>
		</div>
		</div>


