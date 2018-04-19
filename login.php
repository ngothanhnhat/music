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

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Đăng Nhập</h2>

		<form action="" method="POST">

			<fieldset>

				<p><label for="text">Tên Người Dùng</label></p>
				<p><input type="text"  name ="user" id="user" >

				<p><label for="password">PassWord</label></p>
				<p><input type="password" name ="password" id="password">

				<p><input type="submit" name= "dangnhap" id ="btndangnhap" value="Đăng Nhập"></p>
		
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
        $_SESSION['idUser'] = $r['id'];
		$_SESSION['User'] = $r['UserName'];
		$url=BASE_URL;
	
		header('location:'.$url);
      
    }// else //$message = "Đăng nhập ko thành công!";
    
}

?>
