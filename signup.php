<?php require_once ('configs/global.php');?>
<?php require_once ('configs/db.php');?>
<?php require_once ('DatabaseProvider.php');?>
<?php require_once ('controllers/controller.php');?>
<?php require_once ('controllers/nguoidung.php');?>
<?php
if(isset($_POST['dang_ky'])){
	$errors= array();
	$username = $_POST['user'];
	$email = $_POST['email'];
	$pass = trim($_POST['password']);
	$re_pass = trim($_POST['re_password']);
	$data = array();
	$data['username']= $username;
	$data['email']= $email;
	$data['password']= $pass;
	$data['repassword']= $re_pass;
	if($pass != $re_pass){
		array_push($errors,"Password không khớp");
		$data['password']='';
		$data['repassword']='';
	}

	if(strlen($username)<5 || ctype_space($username)){
		array_push($errors,"Tên người dùng ít nhất 5 kí tự, không khoảng trắng");

	}


	if(count($errors)== 0){
		if(NguoiDung::isExistUserWithUsername($username)){
			array_push($errors,"Tên người dùng đã tồn tại");
		}else{
			$ngdung = new NguoiDung();
			$ngdung->Username= $username;
			$ngdung->Email= $email;
			$ngdung->PhanQuyen= 2;
			$ngdung->Password=crypt($pass, DB_SALT);
			$ngdung->save();
			header('location:'.BASE_URL.'/login.php');
		}
	}
}
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
	<link rel="stylesheet" href="css/login.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>
<div id="login">
	<?php if(isset($errors) && count($errors)>0){ ?>
		<div class="alert alert-danger">
			<p><strong>Lỗi:</strong></p>
			<ol>
				<?php foreach ($errors as $error){
					echo "<li>{$error}</li>";
				}?>
			</ol>
		</div>
		<?php } ?>

	<h2><span class="fontawesome-lock"></span>Đăng Ký</h2>

	<form action="<?php echo BASE_URL; ?>/signup.php" method="POST" >

		<fieldset>

			<div class="form-group">
				<label for="user">Tên người dùng</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
					<input type="text" class="form-control" value="<?php if(isset($data)) echo $data['username']; ?>" name ="user" id="user"  placeholder="Nhập tên người dùng..." required>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
					<input  type="email" class="form-control" value="<?php if(isset($data)) echo $data['email']; ?>" name ="email" id="email"  placeholder="Nhập Email..." required>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Mật khẩu</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					<input  type="password" value="<?php if(isset($data)) echo $data['password']; ?>" name ="password" id="password"  class="form-control" placeholder="Nhập mật khẩu..." required>
				</div>
			</div><div class="form-group">
				<label for="re_password">Nhập Lại Mật khẩu</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					<input  type="password" value="<?php if(isset($data)) echo $data['repassword']; ?>" name ="re_password" id="re_password"  class="form-control" placeholder="Nhập mật khẩu..." required>
				</div>
			</div>
			<input type="submit" name= "dang_ky" id ="btn_dang_ky" value="Đăng Ký" class="btn btn-info" style ="float:right" >

		</fieldset>

	</form>

</div>

</body>
</html>

