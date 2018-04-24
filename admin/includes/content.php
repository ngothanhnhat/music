<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";

switch ($tmp){
    case 'qlbh':
        include("QLBH.php");
        break;
    case 'qlcd':
        include("QLCD.php");
        break;
    case 'qlcs':
        include("QLCS.php");
        break;
    case 'qlab':
        include("QLAB.php");
        break;
    case 'qlvd':
        include("QLVD.php");
        break;
    case 'insert_bh':
    case 'updatebh':
        include("insert_bh.php");
        break;
    case 'insertcs':
    case 'updatecs':
        include("updatecs.php");
        break;
    case 'insertcd':
    case 'updatecd':
        include("insertcd.php");
        break;
    case 'inserttl':
    case 'updatetl':
        include("inserttl.php");
        break;
    case 'insertab':
    case 'updateab':
        include("insertab.php");
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
        include ("QLBH.php");
        break;
}
?>