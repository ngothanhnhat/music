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
    if($tmp=='insertcs')
    include("insertcs.php");

    else
    if($tmp=='insertcd')
    include("insertcd.php");
    else
    if($tmp=='inserttl'){
        include("inserttl.php");
    }
   
    else
    if($tmp=='insertab')
    include("insertab.php");
    else
    if($tmp=='insertvd')
    include("insertvd.php");

    else
    if($tmp=='qltl')
    include("QLTL.php");

    else
    if($tmp=='qlpl')
    include("QLPL.php");

    else
    if($tmp=='qlus')
    include("QLUS.php");

    else
    if($tmp=='insertpl')
    include("insertpl.php");

    else
    if($tmp=='insertus')
    include("insertus.php");
    else
    if($tmp=='updateus')
    include("editus.php");
    else
    if($tmp=='updatepl')
    include("editpl.php");
    else
    if($tmp=='updatetl')
    include("edittl.php");
    else
    if($tmp=='updatecs')
    include("editcs.php");
   
    
    else
    if($tmp=='updatecd')
    include("editcd.php");
    
    ?>