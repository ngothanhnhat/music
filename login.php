<?php
ob_start();
session_start();
include_once("configs/global.php");
?>

<!doctype html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="css/login.css">
	<meta charset="utf-8">

	<title>Login</title>


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Đăng Nhập</h2>

		<form action="" method="POST" >

			<fieldset>

				<div class="form-group">
					<label for="ten nguoi dung">Tên người dùng</label>
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
						<input  type="text" class="form-control" name ="user" id="user"  placeholder="Nhập tên người dùng...">
					</div>
				</div>
				<div class="form-group">
					<label for="mat khau">Mật khẩu</label>
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
						<input  type="password" name ="password" id="password"  class="form-control" placeholder="Nhập mật khẩu...">
					</div>
				</div>
				<input type="submit" name= "dangnhap" id ="btndangnhap" value="Đăng Nhập" class="btn btn-info" style ="float:right" >
		
			</fieldset>

		</form>

	</div> 

</body>	
</html>
<script>
// $('#btndangnhap').click(function (e) { 
// 	//alert('aaaaaaaaaaa');
// 	var ten = $('#user').val();
// 	var pass = $('#password').val();
// 	$.get("proccessDN.php", {t:ten, p:pass},
// 		  function (data, textStatus, jqXHR) {
// 			 alert(data);
// 		  },
// 		  "text"
// 	  );
// //	alert(ten+ pass);
//   });
</script>
<?php
include_once("DatabaseProvider.php");
include_once("controllers/nguoidung.php");
if(isset($_POST['user']) && $_POST['password'])
{
	$kq = new NguoiDung();
	$Us = $kq->layND($_POST['user'],md5($_POST['password']));
	if(mysqli_num_rows($Us)==1)
    {
        $r = mysqli_fetch_array($Us);
        $_SESSION['idUser'] = $r['Id'];
		$_SESSION['User'] = $r['UserName'];
		$_SESSION['Level'] = $r['PhanQuyen'];
		if($_SESSION['Level'] == 1)
		{
			$url=BASE_URL."/admin/";
			header('location:'.$url);
		}
		else{
			$url=BASE_URL;
			header('location:'.$url);
		}
		
      
    }// else //$message = "Đăng nhập ko thành công!";
    
}

?>
