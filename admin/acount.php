

<?php
 include_once("../DatabaseProvider.php");
 include_once("../configs/global.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php");?>
<body>
<?php include_once("includes/header.php");?>
<?php include_once("includes/menungang.php");?>

  

<div class ="container">
    <div class ="row">
        <div class ="col-md-2">
<?php include_once("includes/menuleft2.php");?>
        </div>
        <div class ="col-md-10">
           <?php include_once("includes/content.php");?>
       
            
           
        </div>
    </div>
</div>
   
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    
</body>
</html>







