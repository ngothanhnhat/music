
<?php
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $a = new MyConnect();

    $us = $a->LayTLID($id);
    if(mysqli_num_rows($us)==1)
    {
        while($r = $us->fetch_object())
        {
            # code...


?>



<h3>SỬA THỂ LOẠI</h3>
<div class="sss" style="width: 500px; height: 200px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="" method="POST"  class="form-horizontal" role="form">


  <div class="form-group">
    <label for="tentheloai" class="col-sm-3 control-label" >Tên Thể Loại</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name = "tentheloai" id="tentheloai" placeholder="" required="required" value="<?php echo $r->TenTheLoai;?>">
    </div>
    <div class="col-sm-3"></div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-default" id="suatheloai" name= "suatheloai">Sửa </button>
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
if(isset ($_POST['suatheloai'] ))
{
  $kq = new MyConnect();
  $ten = $_POST['tentheloai'];
  $Us = $kq->SuaTL($id, $ten);
  header('location:http://localhost/webmusica/admin/?option=qltl');

}

?>