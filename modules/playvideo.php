

<?php

include_once("controllers/casi.php");
include_once("controllers/video.php");
if(isset($_GET['id'])){
	$id= $_GET['id'];
	$video= new Video($id);

}
?>
	<div class="row" style="margin:5px;">
		<div class="row">
		<div class="col-md-9">
			<h3> <?php echo $video->TenVideo;?> </h3>
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









<!---->
<!---->
<!---->
<!---->
<!--<div class="row" style="margin:5px;">-->
<!--                    -->
<!--                    <div class="col-md-9">-->
<!--                        <div class="row" >-->
<!--                        <h3> Đếm Ngày Xa Em </h3>-->
<!--                                          -->
<!--                        -->
<!--                                <video width="800" height="500" controls autoplay>-->
<!--                                <source src="video/DemNgayXaEm.mp4" type="video/mp4">-->
<!--                             -->
<!--                                </video>-->
<!--                                                        -->
<!--                        -->
<!--                        <h4> Lời bài hát: Đếm Ngày Xa Em</h4>  -->
<!--                        <div class="col-md-5" style="border:1px solid  #b1a9a9;"> -->
<!--                        <p> Bài hát: Đếm Ngày Xa Em  - OnlyC, Lou Hoàng </p>-->
<!--            <p>Ngọt lắm những lúc em nắm đôi tay -->
<!--            Và hứa sẽ mãi yêu chỉ anh đây -->
<!--            Từ khi em qua nơi này -->
<!--            Lòng anh thấy vui biết mấy -->
<!--            -->
<!--            Rồi nắng sớm mới ấm vẫn chưa vơi -->
<!--            Con tim vang tiếng ca vui cười -->
<!--            Vì em mang niềm vui tới nơi anh -->
<!--            Như người may mắn nhất trên đời -->
<!--            -->
<!--            Nào đâu chẳng được mấy lâu -->
<!--            Lại phải xa cách nhau -->
<!--            Cố nén nỗi đau khi cơn mưa ngâu vụn vỡ -->
<!--            Đêm về lại mơ -->
<!--            Sớm dậy lại bơ vơ còn xa em là nhớ -->
<!--            -->
<!--            [ĐK] -->
<!--            Chỉ là đôi môi -->
<!--            Chỉ là vài câu yêu thương thôi mà -->
<!--            Em đã khiến anh yêu em không thể phai phôi -->
<!--            Anh mong em đừng thay đổi -->
<!--            Vì anh đã quá yêu em mất rồi -->
<!--            Vì yêu em, xa em quanh anh chỉ còn bóng tối -->
<!--            -->
<!--            Chờ đợi ngày mai, chờ -->
<!--            Chờ một ngày tương lai, chờ -->
<!--            Ngày ta được sánh đôi vai cùng bên nhau mãi mãi -->
<!--            Dẫu anh có làm gì sai -->
<!--            Cũng sẽ không một ai có thể chia 2 ta chung bước mãi -->
<!--            Trên một con đường dài -->
<!--            Con đường dài lắm, con đường dài lắm -->
<!--            -->
<!--            [RAP] -->
<!--            Đếm, đếm, đếm, đếm -->
<!--            1,2,3,4,5,6,7 ...ngày trôi, -->
<!--            Biết em giờ có nhớ về anh hay nhớ về ai -->
<!--            Bao ngày thật là dài khi anh không có em bên cạnh anh cảm thấy rất giá lạnh -->
<!--            Mà làm sao cho em hiểu thấu khi mình không ở bên nhau -->
<!--            Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday -->
<!--            Ok, oh week -->
<!--            Anh chẳng thể nghĩ về em hay nghĩ về ai -->
<!--            Nỗi buồn thì anh không thể đếm -->
<!--            Nỗi nhớ em thì nó lại càng tăng lên -->
<!--            Ngọt ngào đôi môi không thể nếm -->
<!--            Phải làm sao khi không e mỗi đêm. </p>-->
<!--</div>-->
<!---->
<!--                    </div>-->
<!--            </div>-->
<!--                    -->
<!--                    <div class="col-md-3"> -->
<!--                        <h3>NGHE TIẾP</h3>-->
<!--                        --><?php //include("modules/baihat.php");?><!--     -->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!---->
<!---->
<!---->
<!---->




