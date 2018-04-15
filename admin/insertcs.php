
<h3>THÊM CA SĨ</h3>
<div class="sss" style="width:800px; height: 500px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_ca_si"  method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Ca Sĩ</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tencs" name="tencs" placeholder=""required="required">
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Ngày Sinh</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="ns" name="ns" placeholder=""required="required">
    </div>
    <div class="col-sm-4"></div>
  </div>


  <div class="form-group">
  <label for="input" class="col-sm-3 control-label" >Quê Quán</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" id="quequan" name="quequan" placeholder=""required="required">
  </div>
  <div class="col-sm-4"></div>
</div>



<div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tiểu Sử</label>
    <div class="col-sm-7">
        <textarea name="tieusu" id="tieusu" cols="70" rows="10"></textarea>
    </div>
    <div class="col-sm-4"></div>
    </div>



    <!-- <div class="form-group">
    <label for="text" class="col-sm-3 control-label" >img</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="img" name="img" placeholder="">
    </div>
    <div class="col-sm-6"></div>
  </div> -->
  <img src="" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">

  <label for="input" class="col-sm-3 control-label" >img</label>
  
  <input type ="file" id="hinh" name ="hinh"/>




    





  <div class="form-group">
    <div class="col-sm-offset-8 col-sm-2">
      <button type="submit" class="btn btn-default" name="themcs">Thêm </button>
    </div>
  </div>
  

  
</form>
</div>
<script>

function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#image_preview').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#hinh").change(function() {
readURL(this);
});
</script>