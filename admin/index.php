<?php
	include_once("../configs/global.php");
  include_once("../DatabaseProvider.php");
  include_once("../helper.php");
  include_once("../controllers/controller.php");
  include_once("../controllers/baihat.php");
  include_once('../controllers/casi.php');
  include_once('../controllers/nhacsi.php');
	include_once('../controllers/theloai.php');
	include_once('../controllers/baihat.php');
?>

<?php
	ob_start();
	session_start();
	    if(isset($_SESSION['idUser']) && ($_SESSION['Level'] == 1 ))
	{
	  
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php");?>

<body>
<?php include_once("includes/header.php");?>  

<div class ="container">
    <div class ="row">
        <div class ="col-md-2">
            <?php include_once("includes/menuleft.php");?>
        </div>
        <div class ="col-md-10">
           <?php include_once("includes/content.php");?>
        </div>
    </div>
</div>
   
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    $('.dataTable').DataTable();
} );
</script>
    

    
</body>
</html>

<?php 
	}else   header("location: ".BASE_URL);

?>






