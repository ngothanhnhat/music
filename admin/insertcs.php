<?php include_once('../controllers/casi.php');?>
<?php 
$suacs = false;
$ac= BASE_URL.'/controllers/xuly.php?task=them_ca_si';
if(isset($_GET['id'])){
  $id=$_GET['id'];
 $cs=CaSi::LayCS($id);
 $suacs = isset($cs) && isset($cs->id);
 if($suacs){
   $ac= BASE_URL.'/controllers/xuly.php?task=sua_ca_si&id='.$cs->id;
 } 
}
?>
<?php if($suacs) { ?>
  <h3>SỬA CA SĨ: <?php echo $cs->CaSi;?></h3> 
<?php } else { ?>
  <h3>THÊM CA SĨ</h3>
<?php } ?>
<div class="sss" style="width:800px; height: 500px; border:1px solid #3883e6; border-radius: 10px;padding:20px;margin:20px;">
<form action="<?php echo $ac;?>" method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Tên Ca Sĩ</label>
    <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->CaSi;?>" type="text" class="form-control" id="tencs" name="tencs" placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>

  <div class="form-group">
    <label for="input" class="col-sm-3 control-label" >Ngày Sinh</label>
    <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->NgaySinh;?>" type="date" class="form-control" id="ns" name="ns" placeholder=""required>
    </div>
    <div class="col-sm-4"></div>
  </div>


  <div class="form-group">
  <label for="input" class="col-sm-3 control-label" >Quê Quán</label>
  <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->QueQuan;?>" type="text" class="form-control" id="quequan" name="quequan" placeholder=""required>
  
  </div>
  <div class="col-sm-4"></div>
</div>



<div class="form-group">
    <label for="input" class="col-sm-3 control-label">Tiểu Sử</label>
    <div class="col-sm-7">
    <input value="<?php if($suacs) echo $cs->TieuSu;?>" type="text" class="form-control" id="tieusu" name="tieusu" placeholder=""required>
        
    </div>
    <div class="col-sm-4"></div>
    </div>

  <img src="<?php if($suacs && !empty($cs->img)) echo BASE_URL.'/img/casi/'.$cs->img;?>" id= "image_preview" alt="" style="max-width: 150px; max-height:150px;margin:10px;">
  <label for="input" class="col-sm-3 control-label" >img</label>
  <?php if($suacs){
    echo '<input hidden type ="text" value="'.$cs->img.'" name ="old_hinh"/>';
  }?>
  <input type ="file" id="hinh" name ="hinh"/>

  <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <?php if($suacs) { ?>
        <button type="submit" class="btn btn-default" id="suacs" name="suacs" >Sửa</button> 
        <?php } else { ?>
        <button type="submit" class="btn btn-default" id="themcs" name="themcs" >Thêm </button>
      <?php } ?> 
      </div> 
    </div>
  
</form>
</div>