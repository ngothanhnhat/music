
<h3>THÊM NGƯỜI DÙNG</h3>
<div class="sss" style="width: 800px; height: 350px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="" method="POST"  class="form-horizontal" role="form">
<div class="form-group">
    <div class="col-sm-offset-8 col-sm-2">
      <button type="submit" class="btn btn-default" >Thêm </button>
    </div>
  </div>   
 

  

  <div class="form-group">
    <label for="tennguoidung" class="col-sm-3 control-label" >Tên Người Dùng</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="requied" name = "user" id="user" placeholder="">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-3 control-label" >PassWord</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" required="requied" name="password" id="password" placeholder="">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-3 control-label" >Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control"  name ="email" id="email" placeholder="">
    </div>
    <div class="col-sm-4"></div>
  </div>




  
  </form>
  
  

 



</div>

<?php
if(isset($_POST['user']) && $_POST['password'] && $_POST['email'])
{
  $kq = new MyConnect();
  
    $Us = $kq->ThemND($_POST['user'],md5($_POST['password']),$_POST['email']);

 // echo $_POST['user'].md5($_POST['password']).$_POST['email'];
 header('location:http://localhost/webmusica/admin/?option=qlus');

}

?>
