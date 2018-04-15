<?php
  // include("../configs/db.php");
   include_once("../connect.php");
?>
<?php
// ob_start();
// session_start();
// if(!isset($_SESSION['idUser']))
// {
//     header("location: http://localhost/webmusic/");
// }
// ?> <?php
// if(isset($_POST["btnLogout"]))
// {
//     unset($_SESSION['idUser']);
//     unset($_SESSION['User']);
//     header("location:index.php");
// }
// ?>
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
} );
</script>
    

    
</body>
</html>







