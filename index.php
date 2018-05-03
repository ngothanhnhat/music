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

			<!-- NÚT ĐĂNG NHẬP -->
			<div id="facebook">
				<input id="btb" type="button" value="ĐĂNG NHẬP" onclick="RequestLoginFB()" style="display:none" />
				<p id="lbl" style="display:none">BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG!</p>
				<br />
				<!-- COMMENT -->
				<div class="fb-comments" data-href="http://localhost/webmusica/test.html" data-numposts="10"></div>
			</div>
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

    <?php include("modules/footer.php");?>  
</body>
</html>





