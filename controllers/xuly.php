<?php
ob_start();
session_start();
include_once('../configs/global.php');
include_once('../helper.php');

include_once("../DatabaseProvider.php");
include_once('controller.php');
include_once('baihat.php');
include_once('casi.php');
include_once('chude.php');
include_once('nguoidung.php');
include_once('video.php');
include_once('nhacsi.php');
include_once('theloai.php');
include_once('playlist.php');

$task = $_GET["task"];
$url = BASE_URL;
$isRedirect = true;

switch ($task){
	case 'them_bai_hat':
	case 'sua_bai_hat':
		if(isset ($_POST['btn_them'] )){
			$bai_hat = new BaiHat();
			$url .='/admin/?option=qlbh';
		}else if(isset($_POST['btn_sua'])) {
			$id = $_GET['id'];
			$bai_hat = new BaiHat($id);
			
			if(isset($_GET['b_url'])){
				$url .=$_GET['b_url'];
			}else{
				$url .='/admin/?option=qlbh';
			}
		}else {
			header('Location: '.$url);
		}
		$bai_hat->TenBaiHat = $_POST['ten_bai_hat'];
		$bai_hat->CaSi = $_POST['ca_si'];
		$bai_hat->NhacSi = $_POST['nhac_si'];
		$bai_hat->TheLoai = $_POST['the_loai'];
		
		if(!empty($_FILES["audio"]["tmp_name"])){
			$bai_hat->Audio = strval(time());
			move_uploaded_file($_FILES["source"]["tmp_name"],"../music/audio/". $bai_hat->Audio . ".mp3");
		}
		if(!empty($_FILES["lyric"]["tmp_name"])){
			$bai_hat->Lyric = strval(time());
			move_uploaded_file($_FILES["lyric"]["tmp_name"],"../music/lyrics/". $bai_hat->Lyric.".lrc");
		}
		$bai_hat->save();
		break;
	case 'xoa_bai_hat':
		$id= $_GET['id'];
		$url.='/admin/?option=qlbh';
		$bai_hat = new BaiHat($id);
		$bai_hat->delete();
		break;
		
	case 'them_ca_si':
	case 'sua_ca_si':
		if(isset ($_POST['btn_sua'] )){
			$id=$_GET['id'];
			$ca_si = new CaSi($id);
		}
		else if(isset ($_POST['btn_them'])){
			$ca_si = new CaSi();
		}else {
			header('Location: '.$url);
		}
		$ca_si->TenCaSi = $_POST['ten_ca_si'];
		$ca_si->NgaySinh = $_POST['ngay_sinh'];
		$ca_si->QueQuan = $_POST['que_quan'];
		$ca_si->TieuSu = $_POST['tieu_su'];
		
		if(!empty($_FILES["hinh"]["tmp_name"])){
			$ca_si->Hinh = convert($ca_si->TenCaSi) . "_" . strval(time());
			move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/casi/".$ca_si->Hinh);
		}
		
		$ca_si->save();
		$url .='/admin/?option=qlcs';
		
		break;
	case 'xoa_ca_si':
		$id= $_GET['id'];
		$url.='/admin/?option=qlcs';
		$ca_si = new CaSi($id);
		$ca_si->delete();
		break;
	case 'them_chu_de':
	case 'sua_chu_de':
		if(isset($_POST['btn_sua'])){
			$id= $_GET['id'];
			$chu_de = new ChuDe($id);
		}else if(isset($_POST['btn_them'])){
			$chu_de = new ChuDe();
		}else{
			header('Location: '.$url);
		}
		
		$chu_de->TenChuDe = $_POST['ten_chu_de'];
		$chu_de->save();
		$url .='/admin/?option=qlcd';
		
		break;
	case 'xoa_chu_de':
		$id= $_GET['id'];
		$chu_de = new ChuDe($id);
		$chu_de->delete();
		$url.='/admin/?option=qlcd';
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

		$ten = $_POST['tenab'];
		$casi=$_POST['casiid'];
		$img=convert($ten)."_".time();
		$ngtao=$_SESSION['idUser'];
		$tlab=$_POST['tlid'];
		$nam = $_POST['nam'];
		$thab = Playlist::ThemPlaylist($ten,$img,$ngtao,$tlab);
		move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/playlist/". $img."");
		

		break;
	case 'sua_playlist':
		if( isset($_POST['btn_sua'])) {
			$id = $_GET['id'];
			$playlist = new Playlist($id);
			$url.='/admin/?option=ql_playlist';
		}else  if(isset($_POST['btn_luu']) || isset($_POST['luu_them_ab'])) {
			$playlist = new Playlist();
			$playlist->NguoiTao = $_SESSION['idUser'];
			
			if(isset($_POST['luu_them_ab'])){
				$_SESSION['success'] = "Đã thêm playlist thành công";
				$url.='/admin/?option=insert_playlist';
			}
		}else if(isset ($_POST['add_more_bh'])){
			$playlist_id=$_GET["id"];
			$baiHatId_arr = $_POST["baihats"];
			if (count($baiHatId_arr)> 0){
				foreach ($baiHatId_arr as $key=>$baiHatId){
					Playlist::AddBaiHat($baiHatId,$playlist_id);
				}
			}
			$url .= '/admin/?option=upd_playlist&id='.$playlist_id;
			header('Location: '.$url);
		}else{
			header('Location: '.$url);
		}
		
		$playlist->TenPlaylist = $_POST['ten_playlist'];
		$playlist->TheLoai=$_POST['the_loai'];
		
		if(!empty($_FILES["hinh"]["tmp_name"])){
			$playlist->Hinh=convert($playlist->TenPlaylist)."_".time();
			move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/playlist/". $playlist->Hinh.".jpg");
		}
		
		$playlist->save();
		
		break;

	case 'xoa_playlist':
		$id= $_GET['id'];

		$playlist = new Playlist($id);
		$playlist->delete();

		$url.='/admin/?option=qlpl';
		
		break;
	case 'xoa_video':
		$id= $_GET['id'];
		$url.='/admin/?option=qlvd';
		$video = new Video();
		$video->XoaVD($id);
		break;
	case 'xoa_nguoi_dung':
		$id= $_GET['id'];
		$url.='/admin/?option=qlus';
		$nguoidung = new NguoiDung();
		$nguoidung->XoaND($id);
		break;
	case 'logout':
		unset($_SESSION['idUser']);
		unset($_SESSION['User']);
		break;
	case 'upd_playlist_wishlist':
		$isRedirect = false;
		$albumId = $_GET["playlist"];
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
		$albumId = $_GET["playlist"];
		$userId = $_GET["user"];
		$nguoi_dung = new NguoiDung();
		echo $nguoi_dung->checkAlbumInWishlist($userId, $albumId);
		break;

	case 'xoa_bai_hat_playlist':
		$playlist_id = $_GET["playlist"];
		
		$baiHatId = $_GET["bai_hat"];

		$playlist = new Playlist($playlist_id);
		$playlist->removeBaiHat($baiHatId);

		$url .= '/admin/?option=upd_playlist&id='.$playlist_id;
		break;

	default:
		break;
}
if($isRedirect){
	header('Location: '.$url);
}

?>