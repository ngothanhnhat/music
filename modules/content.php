<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";

switch ($tmp){
	case 'nghe_playlist':
   	include("nghe_playlist.php");
		break;
	case 'nghe1bh':
		include("nghe1bh.php");
		break;
	case 'playvideo':
		include("playvideo.php");
		break;
	case 'account':
			include("account.php");
		break;
	case 'nghe_chu_de':
		include ("chu_de_chi_tiet.php");
		break;
	case 'thongtincs':
		include("ThongTinCS.php");
		break;
	case 'chu_de':
		include("chu_de.php");
		break;
	case 'search':
		include("search.php");
		break;
	default:
		include("home.php");
		break;
}

  ?>