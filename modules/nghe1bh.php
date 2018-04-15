
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

<link rel="stylesheet" href="vendors/APlayer/APlayer.min.css">
<div id="aplayer"></div>
<div id="audio_src" hidden url="<?php echo BASE_URL;?>/music/I-Do.mp3"></div>
<script src="vendors/APlayer/APlayer.min.js"></script>
<script>
$(function(){
    var source= $("#audio_src").attr('url');
    const ap = new APlayer({
        container: document.getElementById('aplayer'),
        lrcType: 3,
        audio: [{
            name: 'name',
            artist: 'artist',
            url: source,
            cover: '',
            lrc: 'http://localhost/music/music/test.lrc'
        }]
    });
})
    
</script>