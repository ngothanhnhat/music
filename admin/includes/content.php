<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";

switch ($tmp){
    case 'qlbh':
        include("ql_bai_hat.php");
        break;
    case 'qlcd':
        include("ql_chu_de.php");
        break;
    case 'qlcs':
        include("ql_ca_si.php");
        break;
    case 'ql_playlist':
        include("ql_playlist.php");
        break;
		case 'qltl':
			include("ql_the_loai.php");
			break;
		case 'qlnd':
			include("ql_nguoi_dung.php");
			break;

    case 'qlvd':
        include("ql_video.php");
        break;
    case 'insert_bh':
    case 'upd_bai_hat':
        include("insert_bh.php");
        break;
    case 'insert_ca_si':
    case 'upd_ca_si':
        include("insert_ca_si.php");
        break;
    case 'insert_cd':
    case 'upd_chu_de':
        include("insert_chu_de.php");
        break;
    case 'insert_tl':
    case 'upd_the_loai':
        include("insert_the_loai.php");
        break;
		case 'insert_playlist':
		case 'upd_playlist':
				include("insert_playlist.php");
				break;
    case 'insert_vd':
    case 'upd_video':
        include("insert_video.php");
        break;
    case 'insert_nd':
    case 'upd_nguoi_dung':
        include("insert_nguoi_dung.php");
        break;

    default:
        include ("ql_bai_hat.php");
        break;
}
?>