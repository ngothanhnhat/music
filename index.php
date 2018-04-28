<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
?>
<?php include_once('DatabaseProvider.php');
?>
<?php include_once("configs/global.php");?>
<?php include_once("controllers/controller.php");?>
<?php include_once("controllers/playlist.php");?>
<?php include_once("modules/head.php");?>
<body>
    <?php include_once("modules/header.php");?>
		<div class="container">
    	<?php include_once("modules/content.php");?>
		</div>

    <script>

// [1] Load lên các thành phần cần thiết
window.fbAsyncInit = function () {
    FB.init({
        appId: '1744384838933652',
        cookie: true,
        xfbml: true,
        version: ''
    });
    // Kiểm tra trạng thái hiện tại
    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });

};

// [2] Xử lý trạng thái đăng nhập
function statusChangeCallback(response) {
    // Người dùng đã đăng nhập FB và đã đăng nhập vào ứng dụng
    if (response.status === 'connected') {
        ShowWelcome();
    }
    // Người dùng đã đăng nhập FB nhưng chưa đăng nhập ứng dụng
    else if (response.status === 'not_authorized') {
        ShowLoginButton();
    }
    // Người dùng chưa đăng nhập FB
    else {
        ShowLoginButton();
    }
}

// [3] Yêu cầu đăng nhập FB
function RequestLoginFB() {
    window.location = 'http://graph.facebook.com/oauth/authorize?client_id=1744384838933652&scope=public_profile,email,user_likes&redirect_uri=http://localhost/webmusica/';
}

// [4] Hiển thị nút đăng nhập
function ShowLoginButton() {
    document.getElementById('btb').setAttribute('style', 'display:block');
    document.getElementById('lbl').setAttribute('style', 'display:none');
}

// [5] Chào mừng người dùng đã đăng nhập
function ShowWelcome() {
    document.getElementById('btb').setAttribute('style', 'display:none');            
    FB.api('/me', function (response) {
        var name = response.name;
        var username = response.username;
        var id = response.id;
        document.getElementById('lbl').innerHTML = 'Tên=' + name + ' | username=' + username + ' | id=' + id;
        document.getElementById('lbl').setAttribute('style', 'display:block');
    });
}

</script>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
        appId: '1744384838933652',
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1744384838933652";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- NÚT ĐĂNG NHẬP -->
<input id="btb" type="button" value="ĐĂNG NHẬP" onclick="RequestLoginFB()" style="display:none" />
<p id="lbl" style="display:none">BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG!</p>
<br />

<!-- COMMENT -->
<div class="fb-comments" data-href="http://localhost/webmusica/test.html" data-numposts="10"></div>









<!--
<div class="row" style="margin:5px;">
                    
        <div class="col-md-9">
            <div class="row" >
            <h3> Buồn của anh </h3>
            <div style="height:250px;background:#e6b677;;"> 
                
                <img src="img/hinh11.jpg" width="300px" height ="200px" style= "float: left "alt="" srcset=""> 
                
                <h4 style="float: right; margin-right: 200px;">
                K-ICM, Đạt G, Masew
                </h4>
                <img src="img/hinh11.jpg" width="150px" height ="150px" style= "float: left; margin-left: 200px; border-radius: 50%;margin-top:10px; "alt="" srcset="">
               
                <audio src="music/horse.ogg" controls autoplay style="width:100%;"></audio>
            </div>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<style>
div.target {
    height:150px;
    overflow:scroll;
}
span {
    color:red;
    display:none;
}
</style>
<script>
$(function(){
    $('.target').scroll(function(){
        $("span").css("display", "inline").fadeOut("slow");
    });
	
    $('button').click(function(){
        $('.target').scroll()
    })
});
</script>
</head>

<body>
<div class="target"></span><br />
<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>1. Tất cả đều thua em- Hằng BingBong</th>
                    </tr>
                    <tr>
                        <th>2. Cùng anh- Hằng BingBong</th>
                    </tr>
                    <tr>
                        <th>3. Người lạ ơi- Hằng BingBong</th>
                    </tr>
                    <tr>
                        <th>4. Tâm sự cùng người lạ- Hằng BingBong</th>
                    </tr>
                    <tr>
                        <th>5. Thành phố buồn- Hằng BingBong</th>
                    </tr>
                    <tr>
                        <th>6. Hỏi thăm nhau-Hằng BingBong</th>
                    </tr>
                </thead>
            
            </table>
</div>
<br />

            
            
            
            
            
            
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







    </div>
    <?php include("modules/footer.php");?>  
</body>
</html>





