
    <div id="cssmenu1">
            <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation " class="active"><a href="#Album" aria-controls="Album hot" role="tab" data-toggle="tab">Album hot </a></li>
                    <li role="presentation"><a href="#MV" aria-controls="MV hot" role="tab" data-toggle="tab">MV hot </a></li>
                    <li role="presentation"><a href="#Playlist" aria-controls="Playlist" role="tab" data-toggle="tab">Playlist </a></li>
                    <li role="presentation"><a href="#CaSiHot" aria-controls="CaSiHot" role="tab" data-toggle="tab">Ca Sĩ Hot </a></li>
            </ul>
            

    </div>
    <br>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Album">
            <?php 
                $i=1;
                $ds = Album::DanhSachAlbum(8);
                while($r = $ds->fetch_object())
                {
                   if($i ==1)
                   echo "<div class='row'>";
            ?>
                    <div class="col-md-3">
                    
                    <img style=" width: 100%;height:140px;" src="img/album/<?php echo $r->imgalbum;?>">
                        <p class="TenBH"> <a href="index.php?option=nghealbum&id=<?php echo $r->id?>" style="color:#000;text-decoration:none;">  <?php echo $r->TenAlbum;?> </a> </p>
                        <p class="TenCS"> <a href="index.php?option=thongtincs&id=<?php echo $r->id?>" style="color:#000;text-decoration:none;">  <?php echo $r->TenCaSi;?> </a> </p>
                        
                    </div>
                  
            <?php 
                if($i ==4)
                {
                    echo "</div>";
                    $i =0;
                }
                $i++;
            }?>
          
        </div>



        <div role="tabpanel" class="tab-pane" id="MV">
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh11.jpg">
                                <p class="TenBH"><a href="index.php?option=playvideo" >Đếm ngày xa em </a></p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                            <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh11.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh11.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh11.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh11.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                            <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh11.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh11.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh11.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh11.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                            <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh11.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh11.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh11.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                


                    
        </div>

      
        
        <div role="tabpanel" class="tab-pane" id="Playlist">
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh8.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh8.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh8.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh8.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh8.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh8.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh8.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh8.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh8.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh8.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh8.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh8.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                        
                </div>
                


                    
        </div>

        <div role="tabpanel" class="tab-pane" id="CaSiHot">
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh7.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh7.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh7.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh7.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh7.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh7.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh7.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh7.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                </div>
                <div class="row">
                        <div class="col-md-3">
                                <img style=" width: 100%;" src="img/hinh7.jpg">
                                <p class="TenBH"> Đếm ngày xa em</p>
                                <h6 class="TenCS">only c</h6> 
                            </div>
                        <div class="col-md-3">
                                    <img style=" width: 100%;" src="img/hinh7.jpg">
                                    <p class="TenBH"> Đếm ngày xa em</p>
                                    <h6 class="TenCS">only c</h6> 
                                </div>
                        <div class="col-md-3">
                                        <img style=" width: 100%;" src="img/hinh7.jpg">
                                        <p class="TenBH"> Đếm ngày xa em</p>
                                        <h6 class="TenCS">only c</h6> 
                                    </div>
                        <div class="col-md-3">
                                            <img style=" width: 100%;" src="img/hinh7.jpg">
                                            <p class="TenBH"> Đếm ngày xa em</p>
                                            <h6 class="TenCS">only c</h6> 
                                        </div>
                </div>
                


                    
        </div>
            
</div>

    

    
    <h3>BÀI HÁT</h3>
    <div class="row">
        
     <div class="col-md-12" style="margin-right:0px;"> 
        
        <?php 
            include_once("controllers/baihat.php");
            $getbh = new BaiHat();
            $i=1;
            $dsbh = $getbh->DanhSachBH(16);
            while($r = $dsbh->fetch_object())
            {
                if($i ==1)
                echo "<div class='row'>";
        ?>
           <div class="col-md-6" >
           
                <p class ="TenBH"> <a href= "index.php?option=nghe1bh&id=<?php echo $r->id;?>" style="color:#000;text-decoration:none;"> <?php echo $r->TenBaiHat;?> </a>- <?php echo $r->TenCaSi;?><span id="" class="fas fa-heart" style ="float:right;color:#999999;font-size:10px;margin-left:15px;" wgct="1"></span><span id="" class="fas fa-headphones" style ="float:right;color:#999999;font-size:10px;" wgct="1"><?php echo $r->LuotNghe?></span></p>
                
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
    </div>
   <!-- <div class="col-md-6" style="margin-right:0px;"> -->
        
  







    <!-- <h3>CA SỸ MỚI</h3>
    <div class="row">
        <?php 
            // include_once("controllers/casi.php")
            // $getcs = new CaSi();
            // $i=1;
            // $ds = $getcs->DanhSachCS();
            // while($r = $ds->fetch_object())
            // {
        ?>
                <div class="col-md-3">
                <img style=" width: 100%;height:150px;" src="img/casi/<?php echo $r->img;?>">
                <br></br>
                    <h6 class="TenCS">  <?php echo $r->TenCaSi;?></h6> 
                </div>


        <?php 
           
            // $i++;
        // }?>
      
    </div>
    -->
    
