<?php
include_once '../configs/global.php';
include_once 'baihat.php';

$task = $_GET["task"];
$url = BASE_URL;


switch ($task){
	case 'them_bai_hat':
		if(isset ($_POST['btnthem'] ))
		{
			$bai_hat = new BaiHat();
			$ten = $_POST['tenbh'];
			$cs=$_POST['casiid'];
			$ns=$_POST['nhacsiid'];
			$tl=$_POST['tlid'];
			$loi = $_POST['loi'];
			$th = $bai_hat->ThemBH( $ten, $cs, $ns, $tl ,$loi);
			$url .='/admin/?option=qlbh';
			
		}
		
		break;
	case 'xoa_bai_hat':
		$id= $_GET['id'];
		$url.='/admin/?option=qlbh';
		$bai_hat = new BaiHat();
		$bai_hat->XoaBH($id);
		
		break;
	default:
		break;
		
}

header('Location: '.$url);

?>