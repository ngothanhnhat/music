<?php
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $a = new MyConnect();

    $us = $a->LayNDID($id);
    if(mysqli_num_rows($us)==1)
    {
        while($r = $us->fetch_object())
        {
            # code...


?>






<h3>SỬA NGƯỜI DÙNG</h3>
<div class="sss" style="width: 600px; height: 250px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="" method="POST"  class="form-horizontal" role="form">
<div class="form-group">
    <div class="col-sm-offset-8 col-sm-2">
      
    </div>
  </div>   
 

  

  <div class="form-group">
    <label for="tennguoidung" class="col-sm-3 control-label" >Tên Người Dùng</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="requied" name = "user" id="user" value="<?php echo $r->UserName;?>">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-3 control-label" >PassWord</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" required="requied" name="password" id="password" placeholder=""value="<?php echo $r->PassWord;?>">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-3 control-label" >Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control"  name ="email" id="email" placeholder=""value="<?php echo $r->Email;?>">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-default" id="" name ="suaus">Sửa </button>
    </div>

  </form>
</div>

<?php
}
}
}
?>


<?php
if(isset ($_POST['suaus'] ))
{
  $kq = new MyConnect();
  $ten = $_POST['user'];
  $pass = md5($_POST['password']);
  $email = $_POST['email'];
  $Us = $kq->SuaUS($id, $ten,$pass, $email);
  header('location:http://localhost/webmusica/admin/?option=qlus');

}

?>
