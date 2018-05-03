
           
<?php
$link = (isset($_SERVER['HTTPS'])?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once("controllers/casi.php");
include_once("controllers/nhacsi.php");
include_once("controllers/baihat.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $baihat= new BaiHat($id);
		$luotnghe = $baihat->Update_LuotNghe();

}else{
	header('location:'.BASE_URL.'/?option=bai_hat');
}
?>
<div class="row">
<div class="col-md-4 pull-right" >
	<h3>NGHE TIẾP</h3>
	<?php include("modules/baihat.php");?>
</div>
</div>
<link rel="stylesheet" href="vendors/APlayer/APlayer.min.css">


<h3> <?php echo $baihat->TenBaiHat;?> </h3>

<div id="_src" hidden
audio-url="<?php echo BASE_URL;?>/music/audio/<?php echo $baihat->Audio;?>.mp3"
lyric-url="<?php echo BASE_URL;?>/music/lyrics/<?php echo $baihat->Lyric;?>.lrc"
casi="<?php echo $baihat->TenCaSi;?>">

</div>



<div class="col-md-7" style="padding:0;">
    <div id="aplayer"></div>
</div>

<div class="col-md-7  more-action">
	<div class="action-item">
		<span ><i class="fa fa-heart uncheck" id="wishlist" style="font-size: 18px;"></i> Yêu thích</span>
	</div>
	<div class="action-item">
		<span id="download-baihai"><i class="fa fa-cloud-download" style="font-size: 18px;"></i>Tải nhạc</span>
	</div>
	<div class="fb-share-button action-item" style="margin-bottom: 5px;"
			 data-href="<?php echo $link; ?>"
			 data-layout="button_count">
	</div>
	<div class="fb-like action-item" style="margin-bottom: 5px;"
			 data-href="<?php echo $link; ?>"
			 data-layout="button"
			 data-action="like"
			 data-show-faces="true">
	</div>


</div>

<div class="col-md-7" id="lyric">
	<p>Lời Bài hát: <span style="color: #5bc0de; font-size: 20px;"><?php echo $baihat->TenBaiHat;?></span></p>
	<p>Nhạc sĩ: 	<span style="font-style: italic;"><?php echo $baihat->TenNhacSi;?></span></p>
	<div id="div-lyric">
		<?php echo $baihat->LyricString?>
	</div>
	<div class="more_add" id="divMoreAddLyric">
		<a href="javascript:;" id="seeMoreLyric" title="Xem toàn bộ" class="btn_view_more">Xem toàn bộ <i class="fa fa-angle-double-down"></i></a>
		<a href="javascript:;" hidden id="hideMoreLyric" title="Thu gọn" class="btn_view_hide">Thu gọn <i class="fa fa-angle-double-up"></i></a>
	</div>
</div>


<div class="row">

    <div class="col-md-6">
   
        <h3> BÀI HÁT </h3>
      
        <?php 
            $bhgiongten= $baihat->getBaiHatGiongTen();
            while($row = $bhgiongten->fetch_object()){?>
            <h5>
							<a href= "index.php?option=nghe1bh&id=<?php echo $row->Id ;?>"  style="color:#000;text-decoration:none;"><?php echo $row->TenBaiHat; ?> </a>
							<hr>
						</h5>
        <?php } ?>

    </div>

</div>


<script src="vendors/APlayer/APlayer.min.js"></script>
<script>
$(function(){
    var audio= $("#_src").attr('audio-url');
    var lyric= $("#_src").attr('lyric-url');
    var tencasi= $("#_src").attr('casi');
    const ap = new APlayer({
        container: document.getElementById('aplayer'),
        lrcType: 3,
        theme: '#04612d',
        loop: 'one',
        audio: [{
            name: 'Ca sĩ',
            artist: '<?php echo $baihat->TenCaSi;?>',
            url: audio,
            cover: '',
            lrc: lyric
        },
        ]
    });

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

})
    
</script>
