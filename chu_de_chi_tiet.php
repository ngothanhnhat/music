<?php
include_once("DatabaseProvider.php");
include_once("controllers/controller.php");
include_once("controllers/playlist.php");
include_once("controllers/chude.php");
if(isset($_GET['id'])){
	$id_chu_de =$_GET['id'];
	$chu_de = new ChuDe($id_chu_de);

	if(count($chu_de->Playlist) == 0)
		header('location:'.BASE_URL);

	$id_playlist= $chu_de->Playlist[0]->Id;
	if(isset($_GET['plId'])){
		$id_playlist = $_GET['plId'];
	}

	$playlist= new Playlist($id_playlist);
}else{
	header('location:'.BASE_URL);
}
?>

<link rel="stylesheet" href="vendors/APlayer/APlayer.min.css">

<div class="row">
	<div class="col-md-4 pull-right">
		<h3>NGHE TIẾP</h3>
		<?php //include("modules/baihat.php");?>
	</div>
	<div class="col-md-8 pull-left">
		<h3> <?php echo $playlist->TenPlaylist;?> <i id='wishlist'  class='fas fa-heart uncheck' style='float:right; margin-right: 20px;'></i></h3>
		<div style="padding-left:0px;">
			<div id="aplayer"></div>
		</div>
		<?php
		$baihats = $playlist->DSBaiHat();
		while($r=$baihats->fetch_object()){
			?>
			<div class="_src" hidden
					 audio-url="<?php echo BASE_URL;?>/music/audio/<?php echo $r->Audio;?>.mp3"
					 lyric-url="<?php echo BASE_URL;?>/music/lyrics/<?php echo $r->Lyric;?>.lrc"
					 ten-bh="<?php echo $r->TenBaiHat;?>"
			>
			</div>

		<?php }
		?>
		<h3>PLAYLIST CÙNG CHỦ ĐỀ</h3>
		<?php
			foreach ($chu_de->Playlist as $playlist){
				if($playlist->Id != $id_playlist){
		?>
			<div class="col-md-3">
				<img src="img/hinh1.jpg" alt="" style="width: 155px; height:155px;">
				<p><a href="<?php echo BASE_URL.'?option=nghe_chu_de&id='.$id_chu_de.'&plId='.$playlist->Id;?>"><?php echo $playlist->TenPlaylist;  ?></a></p>
			</div>
		<?php }
			} ?>
	</div>
</div>


<script src="vendors/APlayer/APlayer.min.js"></script>
<script>
    $(function(){
        var aud = []
        $( "._src" ).each(function( index ) {
            var item = {};

            item.artist = ' ';
            item.cover ='';
            var ten_bh = $( this ).attr('ten-bh');
            var audio = $( this ).attr('audio-url');
            var lyric = $( this ).attr('lyric-url');
            item.url = audio;
            item.lrc = lyric;
            item.name = ten_bh;

            aud.push(item);

        });



        const ap = new APlayer({
            container: document.getElementById('aplayer'),
            lrcType: 3,
            loop: 'all',
            theme: '#04612d',
            preload: 'auto',
            mutex: true,
            listFolded: false,
            listMaxHeight: '90px',
            audio: aud
        });
    })

</script>