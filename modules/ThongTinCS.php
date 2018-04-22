<?php 
include_once("controllers/album.php");
include_once("controllers/baihat.php");
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $baihat= new BaiHat($id);
}
?>
<img style=" width: 100%;height:300px;" src="img/casi/mytam.jpg">
    <div id="cssmenu1">
            <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation " class="active"><a href="#BaiHat" aria-controls="BaiHat" role="tab" data-toggle="tab">Bài Hát </a></li>
                    <li role="presentation"><a href="#Album" aria-controls="Album" role="tab" data-toggle="tab">Album </a></li>
                    <li role="presentation"><a href="#Video" aria-controls="Video" role="tab" data-toggle="tab">Video </a></li>
                    <li role="presentation"><a href="#TieuSu" aria-controls="TieuSu" role="tab" data-toggle="tab">Tiểu Sử </a></li>
            </ul>
            

    </div>
    <br>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="BaiHat">
        
        <?php 
            $getcs = new BaiHat();
            $i=1;
            $ds = $getcs->LayBaiHat(2);
            while($r = $ds->fetch_object())
            {
                
                if($i ==1)
                echo "<div class='row'>";
        ?>
           <div class="col-md-6">
           <h3>BÀI HÁT CỦA <?php echo $r->TenCaSi;?></h3>
                <p class ="TenBH"> <a href= "index.php?option=nghe1bh"<a href="index.php?option=nghealbum" style="color:#000;text-decoration:none;"> <?php echo $r->TenBaiHat;?> </a>- <?php echo $r->TenCaSi;?> </p>
                    <hr>
           </div>
        <?php 
           if($i ==2){
               echo "</div>";
               $i=0;
           }
            $i++;
        }?>
          
        </div>



        <div role="tabpanel" class="tab-pane" id="Album">
        
        
        </div>

        <div role="tabpanel" class="tab-pane" id="Video">
              
        </div>
        
        <div role="tabpanel" class="tab-pane" id="TieuSu">
            <h3> TIỂU SỬ MỸ TÂM</h3>
            <hr>
                <div class="row">
                        <div class="col-md-7">
                               <p>sssssssssssssssssssssssssssssssssssssssssssssssss</p>
                               
                            </div>
                       
                      
                </div>
               
                
                


                    
        </div>

        
            
</div>

    

    
    