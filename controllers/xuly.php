<?php
include_once '../configs/global.php';
include_once 'baihat.php';
include_once 'casi.php';
include_once 'chude.php';
include_once 'playlist.php';
include_once '../helper.php';


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
	case 'xoa_ca_si':
		$id= $_GET['id'];
		$url.='/admin/?option=qlcs';
		$ca_si = new CaSi();
		$ca_si->XoaCS($id);
		
		break;
	case 'xoa_chu_de':
		$id= $_GET['id'];
		$url.='/admin/?option=qlcd';
		$ca_si = new ChuDe();
		$ca_si->XoaCD($id);
		
		break;
	case 'xoa_the_loai':
		$id= $_GET['id'];
		$url.='/admin/?option=qltl';
		$the_loai = new TheLoai();
		$the_loai->XoaTL($id);
		
		break;
	case 'xoa_playlist':
		$id= $_GET['id'];
		$url.='/admin/?option=qlpl';
		$playlist = new PlayList();
		$playlist->XoaPL($id);
		
		break;
	case 'them_ca_si':
		if(isset ($_POST['themcs'] ))
		{
		$themcs= new CaSi();
		$tcs = $_POST['tencs'];
		$ns=$_POST['ns'];
		$qq=$_POST['quequan'];
		$ts = $_POST['tieusu'];
		$hih = convert($tcs);
		$url.='/admin/?option=qlcs';
		$thcs = $themcs->ThemCS( $tcs, $ns, $qq, $hih ,$ts);
		$x= $_FILES["hinh"]["size"];
		move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/casi/".$tcs."'");
		
}
		
		break;
	default:
		break;
	


	
}

header('Location: '.$url);

?>