<pre>

<?php include("../connect.php");

$kodau = convert();
echo $kodau;


if(isset ($_POST['themcs'] ))
{
  $themcs= new MyConnect();
  $tcs = $_POST['tencs'];
  $ns=$_POST['ns'];
  $qq=$_POST['quequan'];
  $ts = $_POST['tieusu'];
  $hih = convert($tcs);

  $thcs = $themcs->ThemCS( $tcs, $ns, $qq, $hih ,$ts);
  $x= $_FILES["hinh"]["size"];
  move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/casi/".$tcs.".mp4");
//  move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/casi/".$tcs."'");
  
  header('location:http://localhost/webmusica/admin/?option=qlcs');

}



?>

