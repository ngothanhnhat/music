<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";
if($tmp == 'qlbh')
   include("QLBH.php");
   
   else 
   if($tmp=='qlcd')
    include("QLCD.php");

    else
    if($tmp=='qlcs')
    include("QLCS.php");

    else
    if($tmp=='qlab')
    include("QLAB.php");

    else
    if($tmp=='qlvd')
    include("QLVD.php");

    else
    if($tmp=='insert_bh' || $tmp=='updatebh')
    include("insert_bh.php");

    else
    if($tmp=='insertcs'|| $tmp=='updatecs')
    include("insertcs.php");

    else
    if($tmp=='insertcd'|| $tmp=='updatecd')
    include("insertcd.php");
    else
    if($tmp=='inserttl'||$tmp=='updatetl')
        include("inserttl.php");
    else
    if($tmp=='insertab' || $tmp=='updateab')
    include("insertab.php");
    else
    if($tmp=='insertvd'||$tmp=='updatevd')
    include("insertvd.php");
    else
    if($tmp=='insertpl'||$tmp=='updatepl')
    include("insertpl.php");

    else
    if($tmp=='insertus'||$tmp=='updateus')
    include("insertus.php");
    else
    if($tmp=='qltl')
    include("QLTL.php");

    else
    if($tmp=='qlpl')
    include("QLPL.php");

    else
    if($tmp=='qlus')
    include("QLUS.php");

    
    ?>