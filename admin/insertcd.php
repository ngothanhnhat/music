<?php include_once '../controllers/chude.php'?>
<h3>THÊM CHỦ ĐỀ</h3>
<div class="sss" style="width: 500px; height: 200px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">

<form action="<?php echo BASE_URL?>/controllers/xuly.php?task=them_chu_de" method="POST"  class="form-horizontal" role="form">
  <div class="form-group">
    <label for="tenchude" class="col-sm-3 control-label" >Tên Chủ Đề</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name = "tenchude" id="tenchude" placeholder=""required="required">
    </div>
    <div class="col-sm-3"></div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-5">
      <button type="submit" class="btn btn-default" >Thêm </button>
    </div>
  </div>   
  
  </form>
  
</div>

