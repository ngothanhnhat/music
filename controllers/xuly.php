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
			move_uploaded_file($_FILES["audio"]["tmp_name"],"../music/audio/". $bai_hat->Audio . ".mp3");
		}
		if(!empty($_FILES["lyric"]["tmp_name"])){
			$bai_hat->Lyric = strval(time());
			$bai_hat->LyricString = getLyricString($_FILES["lyric"]["tmp_name"]);
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
	case 'sua_the_loai':
		if(isset($_POST["btn_sua"])) {
			$id = $_GET['id'];
			$the_loai = new TheLoai($id);
		}else if(isset($_POST['btn_them'])) {
			$the_loai = new TheLoai();
		}else {
			header('Location: ' . $url);
		}
		$the_loai->TenTheLoai = $_POST['ten_the_loai'];
		$the_loai->save();
		$url .='/admin/?option=qltl';
		break;
	case 'xoa_the_loai':
		$id= $_GET['id'];
		$the_loai = new TheLoai($id);
		$the_loai->delete();
		$url.='/admin/?option=qltl';
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
		$url.='/admin/?option=ql_playlist';
		
		break;

		case 'them_video':
		case 'sua_video':
			if(isset ($_POST['btn_them'] )){
				$video = new Video();
				$url .='/admin/?option=qlvd';
			}else if(isset($_POST['btn_sua'])) {
				$id = $_GET['id'];
				$video = new Video($id);

				if(isset($_GET['b_url'])){
					$url .=$_GET['b_url'];
				}else{
					$url .='/admin/?option=qlvd';
				}
			}else {
				header('Location: '.$url);
			}
			$video->TenVideo= $_POST['ten_video'];
			$video->CaSi = $_POST['ca_si'];
			$video->TheLoai = $_POST['the_loai'];
			$video->Video=$_POST['mv'];
			if(!empty($_FILES["mv"]["tmp_name"])){
				$video->Video = strval(time());
				move_uploaded_file($_FILES["mv"]["tmp_name"],"../music/video/". $video->Video . ".mp4");
			}

			$video->save();
			break;
	case 'xoa_video':
		$id= $_GET['id'];
		$url.='/admin/?option=qlvd';
		$video = new Video();
		$video->XoaVD($id);
		break;
	case 'them_nguoi_dung':
	case 'sua_nguoi_dung':
		if(isset($_POST["btn_sua"])) {
			$ID = $_GET['id'];
			$nguoi_dung = new NguoiDung($ID);
		}else if(isset($_POST['btn_them'])) {
			$nguoi_dung = new NguoiDung();
		}else {
			header('Location: ' . $url);
		}
		$nguoi_dung->UserName = $_POST['ten_nguoi_dung'];
		$nguoi_dung->PassWord = $_POST['mat_khau'];
		$nguoi_dung->Email = $_POST['email'];
		$nguoi_dung->PhanQuyen = $_POST['phanquyen'];
		$nguoi_dung->save();
		$url .='/admin/?option=qlnd';
		break;
	case 'xoa_nguoi_dung':
		$ID= $_GET['id'];
		$nguoi_dung	 = new NguoiDung($ID);
		$nguoi_dung->delete();
		$url.='/admin/?option=qlnd';
		break;
	case 'logout':
		unset($_SESSION['idUser']);
		unset($_SESSION['User']);
		break;
	case 'upd_playlist_wishlist':
		$isRedirect = false;
		$playlistId = $_GET["playlist"];
		$userId = $_GET["user"];
		$check = $_GET["check"];
		
		if($check == 'check'){
			//Insert vào wishlist
			NguoiDung::themPlaylistWishlist($userId, $playlistId);

		}else{
			//Del khoi wishlist	
			NguoiDung::xoaPlaylistWishlist($userId, $playlistId);
		}
		break;
	case 'check_playlist_in_wishlist':
		$isRedirect = false;
		$playlistId = $_GET["playlist"];
		$userId = $_GET["user"];
		echo NguoiDung::checkPlaylistInWishlist($userId, $playlistId);
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