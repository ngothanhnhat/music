


<?php
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $a = new MyConnect();

    $us = $a->LayCSID($id);
    if(mysqli_num_rows($us)==1)
    {
        while($r = $us->fetch_object())
        {
            # code...


?>


<h3>SỬA CA SĨ</h3>
<div class="sss" style="width: 450px; height: 300px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="" method="POST"  class="form-horizontal" role="form">

  
<div class="form-group">
    <div class="col-sm-7">
      <img src="../img/casi/<?php echo $r->img;?>" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
      <input type ="file" name ="hinh"/>
    </div>
    <div class="col-sm-6"></div>
  </div>

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Ca Sĩ</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tencs" name = "tencs" placeholder=""required="required" value="<?php echo $r->TenCaSi;?>">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Ngày Sinh</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="ngaysinh" name ="ngaysinh" placeholder=""required="required" value="<?php echo $r->NgaySinh;?>">
    </div>
    <div class="col-sm-4"></div>
  </div>



  <div class="form-group">
  <label for="input" class="col-sm-3 control-label" >Quê Quán</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" id="quequan" name="quequan" placeholder=""required="required"value="<?php echo $r->QueQuan;?>">
  </div>
  <div class="col-sm-4"></div>
</div>
 

  
 
  <div class="form-group">
    <div class="col-sm-offset-8 col-sm-2">
      <button type="submit" class="btn btn-default" name="suacs" >Sửa </button>
    </div>
  </div>
  


  
</form>
</div>

<?php
}
}
}
?>



<?php
if(isset ($_POST['suacs'] ))
{
  $kq = new MyConnect();
  $ten = $_POST['tencs'];
  $ns = $_POST['ngaysinh'];

  $img = $_POST['img'];
  $quequan = $_POST['quequan'];

  $Us = $kq->SuaCS($id, $ten, $img, $ns, $quequan);
  
  header('location:http://localhost/webmusica/admin/?option=qlcs');

}

?>

