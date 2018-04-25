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
		case 'insert_playlist':
		case 'upd_playlist':
			include("insert_playlist.php");
			break;
    case 'qlvd':
        include("QLVD.php");
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
    case 'inserttl':
    case 'updatetl':
        include("inserttl.php");
        break;
    case 'insertvd':
    case 'updatevd':
        include("insertvd.php");
        break;
    case 'insertus':
    case 'updateus':
        include("insertus.php");
        break;
    case 'qltl':
        include("QLTL.php");
        break;
    case 'qlus':
        include("QLUS.php");
        break;
    default:
        include ("ql_bai_hat.php");
        break;
}
?>