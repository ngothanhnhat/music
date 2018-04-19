
<?php include_once('../controllers/casi.php');?>

<h3>THÊM THỂ LOẠI</h3>
<div class="sss" style="width: 500px; height: 200px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_the_loai" method="POST"   role="form">
 
  <div class="form-group">
    <label for="tentheloai" class="col-sm-3 control-label" >Tên Thể Loại</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name = "tentheloai" id="tentheloai" placeholder="" required="required">
    </div>
    <div class="col-sm-3"></div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-default" id="themtheloai">Thêm </button>
    </div>
  </div>   
  
  </form>
  
</div>

<?php
/*
if(isset ($_POST['tentheloai'] ))
{
  $kq = new MyConnect();
  $kt= $kq->KiemTraTL($_POST['tentheloai'] );
  if(!mysqli_num_rows($kt)==1)
  {
    $Us = $kq->ThemTL($_POST['tentheloai']);
  
  }
  else echo"Dữ liệu đã tồn tại";
 // echo $_POST['user'].md5($_POST['password']).$_POST['email'];
 //header('location:http://localhost/webmusica/admin/?option=qltl');

}

*/



?>


<script>
  $(document).ready(function () {
    $("#themtheloai").click(function (e) { 
        var ten = $("#tentheloai").val();
        $.ajax({
          type: "get",
          url: "prsInsertTL.php",
          data: {tentl:ten},
          dataType: "html",
          success: function (data) {
            alert(data);
          }
        });    
    });
  });
</script>
