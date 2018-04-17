
<!-- <div class="row" style="margin:5px;">
                    
                    <div class="col-md-9">
                        <div class="row" >
                        <h3> Buồn của anh </h3>
                        <div style="height:250px;background:#e6b677;;"> 
                            
                            <img src="img/hinh11.jpg" width="300px" height ="200px" style= "float: left "alt="" srcset=""> 
                            
                            <h4 style="float: right; margin-right: 200px;">
                            K-ICM, Đạt G, Masew
                            </h4>
                            <img src="img/hinh11.jpg" width="150px" height ="150px" style= "float: left; margin-left: 200px; border-radius: 50%;margin-top:10px; "alt="" srcset="">
                           
                            <audio src="music/I-Do.mp3" controls autoplay style="width:100%;"></audio>
                        </div>
                        
                        
                        
                        <h4> Lời bài hát: Buồn của anh</h4>   
                        <p> Bài hát: Buồn Của Anh - K-ICM, Đạt G, Masew </p>
            <p>Hai tay anh ôm xương rồng rất đau .. 
            Đôi vai anh mang nỗi buồn rất lâu .. 
            Chân anh lang thang kiếm em ở khắp chốn 
            Nước mắt trào, biết em giờ ở nơi đâu. 
            Đôi khi cô đơn xiết anh từng cơn em hỡi .. 
            
            Bao nhiêu nước mắt để đổi bình yên bên em </p>
                       
                    </div>
            </div>
                    
                    <div class="col-md-3"> 
                        <h3>NGHE TIẾP</h3>
                        <?php include("modules/baihat.php");?>     
                </div>
            </div>
            
             -->
<?php 
include_once("controllers/baihat.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $baihat= new BaiHat();
    $bh = $baihat->LayBH($id);
    $tenbaihat ="";
}
?>
<link rel="stylesheet" href="vendors/APlayer/APlayer.min.css">

<?php
while($r = $bh->fetch_object()){
    $tenbaihat=$r->TenBaiHat; 
   
?>
<h3> <?php echo $r->TenBaiHat;?> </h3>
    <div id="_src" hidden 
    audio-url="<?php echo BASE_URL;?>/music/audio/<?php echo $r->audio;?>.mp3" 
    lyric-url="<?php echo BASE_URL;?>/music/lyrics/<?php echo $r->lyrics;?>.lrc"
    casi="<?php echo $r->TenCaSi;?>">
    </div>
<?php } ?>

<div class="col-md-7" style="padding-left:0px;">
    <div id="aplayer"></div>
</div>


<div class="row">

    <div class="col-md-6">
        <h3> BÀI HÁT </h3>
        <?php 
            $bhgiongten= $baihat->LayBHGiongTen($tenbaihat);
            while($row = $bhgiongten->fetch_object()){?>
            <h5> <a href= "index.php?option=nghe1bh&id=<?php echo $row->id ;?>" style="color:#000;text-decoration:none;"><?php echo $row->TenBaiHat; ?> </a>  <hr> </h5>
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
        loop: 'one',
        audio: [{
            name: 'Ca Si ',
            artist: tencasi,
            url: audio,
            cover: '',
            lrc: lyric
        },
        ]
    });
})
    
</script>