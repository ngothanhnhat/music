<?php
ob_start();
session_start();
include_once('../configs/global.php');
include_once('baihat.php');
include_once('casi.php');
include_once('chude.php');
include_once('nguoidung.php');
include_once('video.php');
include_once('nhacsi.php');
include_once('playlist.php');
include_once('theloai.php');
include_once('album.php');
include_once('../helper.php');


$task = $_GET["task"];
$url = BASE_URL;
$isRedirect = true;


switch ($task){
	case 'them_bai_hat':
		if(isset ($_POST['btnthem'] ))
		{
			$bai_hat = new BaiHat();
			$ten = $_POST['tenbh'];
			$cs=$_POST['casiid'];
			$ns=$_POST['nhacsiid'];
			$tl=$_POST['tlid'];
			$src='';
			$lyric='';
			if(!empty($_FILES["source"]["tmp_name"])){
				$src= strval(time());
			}
			if(!empty($_FILES["lyric"]["tmp_name"])){
				$lyric= strval(time());
			}
			$th = $bai_hat->ThemBH( $ten, $cs, $ns, $tl, $src, $lyric);
			//upload audio
			if(!empty($_FILES["source"]["tmp_name"]))
				move_uploaded_file($_FILES["source"]["tmp_name"],"../music/audio/". $src. ".mp3");
			//upload lyrics
			if(!empty($_FILES["lyric"]["tmp_name"]))
				move_uploaded_file($_FILES["lyric"]["tmp_name"],"../music/lyrics/". $src.".lrc");

			$url .='/admin/?option=qlbh';
			
		}
		break;
	case 'sua_bai_hat':
		if(isset ($_POST['btnsua'] ))
		{
			$bai_hat = new BaiHat();
			$id = $_GET['id'];
			$ten = $_POST['tenbh'];
			$cs=$_POST['casiid'];
			$ns=$_POST['nhacsiid'];
			$tl=$_POST['tlid'];
			$src= $_POST['old_source'];
			$lyric= $_POST['old_lyric'];
			if(!empty($_FILES["source"]["tmp_name"])){
				$src= strval(time());
			}
			if(!empty($_FILES["lyric"]["tmp_name"])){
				$lyric= strval(time());
			}
			$th = $bai_hat->SuaBH( $id, $ten, $cs, $ns, $tl, $src, $lyric);
			//upload audio 
			// var_dump($_FILES); die;
			if(!empty($_FILES["source"]["tmp_name"]))
				move_uploaded_file($_FILES["source"]["tmp_name"],"../music/audio/". $src. ".mp3");
			//upload lyrics 
			if(!empty($_FILES["lyric"]["tmp_name"]))
				move_uploaded_file($_FILES["lyric"]["tmp_name"],"../music/lyrics/". $src.".lrc");

			$url .='/admin/?option=qlbh';
			
		}
		break;
	case 'xoa_bai_hat':
		$id= $_GET['id'];
		$url.='/admin/?option=qlbh';
		$bai_hat = new BaiHat();
		$bai_hat->XoaBH($id);
		
		break;
	case 'them_ca_si':
		if(isset ($_POST['themcs'] ))
		{
		$themcs= new CaSi();
		$tcs = $_POST['tencs'];
		$ns=$_POST['ns'];
		$qq=$_POST['quequan'];
		$ts = $_POST['tieusu'];
		$hih = convert($tcs) . "_" . strval(time());
		$url.='/admin/?option=qlcs';
		$thcs = $themcs->ThemCS( $tcs, $ns, $qq, $hih ,$ts);
		move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/casi/".$hih."'");
		
		}
		break;
	case 'xoa_ca_si':
		$id= $_GET['id'];
		$url.='/admin/?option=qlcs';
		$ca_si = new CaSi();
		$ca_si->XoaCS($id);
		
		break;
	case 'them_chu_de':
		if(isset ($_POST['tenchude'] ))
		{
			$kq = new ChuDe();
			$Us = $kq->ThemCD($_POST['tenchude']);
			$url .='/admin/?option=qlcd';

		}
		break;
	case 'xoa_chu_de':
		$id= $_GET['id'];
		$url.='/admin/?option=qlcd';
		$chu_de = new ChuDe();
		$chu_de->XoaCD($id);
		
		break;
	case 'them_the_loai':
		if(isset($_GET["tentl"]))
		{
			$ten = $_GET["tentl"];
			$kq = new TheLoai();
			$k= $kq->ThemTL($ten);
			$url .='/admin/?option=qltl';	
		}
		break;
	case 'xoa_the_loai':
		$id= $_GET['id'];
		$url.='/admin/?option=qltl';
		$the_loai = new TheLoai();
		$the_loai->XoaTL($id);
		
		break;

	case 'them_playlist':	
		if(isset ($_POST['thempl'] ))
			{
				
				$pl = new PlayList();
				$tenpl = $_POST['tenpl'];

				$img=convert($tenpl)."_".time();
				$nt=$_SESSION['idUser'];
				$tla=$_POST['tenpltl'];
				$thpl = $pl->ThemPL($tenpl,$img, $nt ,$tla);
				move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/playlist/". $img."");
	
				$url .='/admin/?option=qlpl';	

		}
		break;

	case 'xoa_playlist':
		$id= $_GET['id'];
		$url.='/admin/?option=qlpl';
		$playlist = new PlayList();
		$playlist->XoaPL($id);
		
		break;

	case 'them_album':	

			$tenab = $_POST['tenab'];
			$casi=$_POST['casiid'];
			$img=convert($tenab)."_".time();
			$ngtao=$_SESSION['idUser'];
			$tlab=$_POST['tlid'];
			$nam = $_POST['nam'];
			$thab = Album::ThemAlbum($tenab,$casi,$img,$ngtao,$tlab,$nam);
			move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/album/". $img."");			
			if(isset($_POST['luuab'])){
				$url.='/admin/?option=qlab';
			}else if(isset($_POST['luu_them_ab'])){
				$_SESSION['success'] = "Đã thêm album thành công";
				$url.='/admin/?option=insertab';				
			}
		break;
	case 'logout':
		unset($_SESSION['idUser']);
		unset($_SESSION['User']);
		break;
	case 'upd_album_wishlist':
		$isRedirect = false;
		$albumId = $_GET["album"];
		$userId = $_GET["user"];
		$check = $_GET["check"];

		$nguoi_dung = new NguoiDung();
		
		if($check == 'check'){
			//Insert vào wishlist
			$nguoi_dung->themAlbumWishlist($userId, $albumId);

		}else{
			//Del khoi wishlist	
			$nguoi_dung->xoaAlbumWishlist($userId, $albumId);
		}
		break;
	case 'check_album_in_wishlist':
		$isRedirect = false;
		$albumId = $_GET["album"];
		$userId = $_GET["user"];
		$nguoi_dung = new NguoiDung();
		echo $nguoi_dung->checkAlbumInWishlist($userId, $albumId);
		break;
	default:
		break;
}
if($isRedirect){
	header('Location: '.$url);
}

?>