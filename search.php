<?php
include_once("DatabaseProvider.php");
include_once("controllers/controller.php");
include_once("controllers/playlist.php");
include_once("controllers/chude.php");
include_once("controllers/baihat.php");
include_once("controllers/video.php");

?>
<?php
	$keyword= $_POST['key'];
	$baihat_list = BaiHat::search($keyword);

?>
<div class="row">
	<h3>TÌM KIẾM</h3>
	<ul style="width: 840px;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    position: relative; float: left;
    padding: 5px 0 5px 0; display: inline;">

<!--		<li>--><?php //?><!--</li>-->
<!--		<hr style="width:20px; transform: rotate(90deg)" color="red" >-->
<!--	</ul>-->
<!---->
<!--	<ul style="width: 840px;-->
<!--    background-color: #498df5;-->
<!--    border-radius: 4px;-->
<!--    -webkit-border-radius: 4px;-->
<!--    position: relative; float: left;-->
<!--    padding: 5px 0 5px 0; display: inline;">-->
<!--		<hr style="width:20px; transform: rotate(90deg)" color="red" >-->
<!--		<h5 style="color:#fff; font-weight: bold;">Bạn muốn tìm Bài Hát, Album hay Video cho Cho Anh Quay Về - Trịnh Đình Quang?</h5>-->
<!--	</ul>-->
<!---->
<!--	<ul style="width: 840px;height: 200px;-->
<!--    background-color: #cbf5eb;-->
<!---->
<!--    border-radius: 4px;-->
<!--    -webkit-border-radius: 4px;-->
<!--    position: relative; float: left;-->
<!--    padding: 5px 0 5px 0; display: inline;">-->
<!--		<h4>Kết quả được đề xuất</h4>-->
<!--		<hr>-->
<!--	</ul>-->

</div>
<div> <h3>BÀI HÁT</h3></div>
<div class="col-md-9">
	<?php

foreach ($baihat_list as $row){?>
		<h5>
			<a href= "index.php?option=nghe1bh&id=<?php echo $row->getId();?>"  style="color:#000;text-decoration:none;"><?php echo $row->TenBaiHat; ?> </a>
			<hr>
		</h5>
	<?php } ?>
	<div> <h3>VIDEO</h3></div>
	<?php

	foreach ($baihat_list as $row){?>
		<h5>
			<a href= "index.php?option=nghe1bh&id=<?php echo $row->getId();?>"  style="color:#000;text-decoration:none;"><?php echo $row->TenBaiHat; ?> </a>
			<hr>
		</h5>
	<?php } ?>
</div>

