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

	<img src="<?php echo BASE_URL.'/img/chude/'.$chu_de->Hinh.'.jpg';?>" alt=""style="width: 100%; height:auto;">
	<div class="" style="height: auto; background: #fff; border: 1px solid #1D88D3; padding: 5px; font-size: 16px; font-family: 'Open Sans', sans-serif; color: #2b542c; font-style: italic;">
		<h3><?php echo 'CHỦ ĐỀ: '.$chu_de->TenChuDe;?></h3>
		<p><?php echo '"'.$chu_de->MoTa.'"';?> </p>
	</div>

	<div class="col-md-7 pull-left">


		<h3> <?php echo 'PLAYLIST: '.$playlist->TenPlaylist;?> <i id='wishlist'  class='fas fa-heart uncheck' style='float:right; margin-right: 20px;'></i></h3>
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
				<img src="img/playlist/<?php echo $playlist->Hinh;?>" alt="" style="width: 155px; height:155px;">
				<p><a href="<?php echo BASE_URL.'?option=nghe_chu_de&id='.$id_chu_de.'&plId='.$playlist->Id;?>"><?php echo $playlist->TenPlaylist;  ?></a></p>
			</div>

		<?php }
			} ?>
	</div>
	<div class="col-md-5 pull-right">
		<h3>BẠN CÓ THỂ NGHE</h3>
		<?php include("chu_de.php");?>
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