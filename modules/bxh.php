<div id='cssmenu2'>
            <ul class ="nav nav-tabs" role ="tablist">
               <li role= "presentation "class="active"><a href="#vn" aria-controls= "Việt Nam" role ="tab"data-toggle="tab" >Việt Nam </a></li>
               <li role= "presentation"><a href="#au" aria-controls= "Âu Mỹ" role ="tab"data-toggle="tab" >Âu Mỹ </a></li>
               <li role= "presentation"><a href="#hq" aria-controls= "Hàn Quốc" role ="tab"data-toggle="tab" >Hàn Quốc </a></li>
            </ul>

            <div class = "tab-content">
            <div role="tabpanel" class = "tab-pane active" id ="vn">
                <br>
                <div class="row">
        
                <div class="col-md-12" style="margin-right:0px;"> 
                   
                   <?php 
                        include_once("controllers/baihat.php");
                       $getcs = new BaiHat();
                       $i=1;
                       $ds = $getcs->DanhSachBH();
                       while($r = $ds->fetch_object())
                       {
                      
                   ?>
                      <div class="col-md-12">
                           <p><?php echo $r->TenBaiHat;?> - <?php echo $r->TenCaSi;?> </p>
                               <hr>
                      </div>
                   <?php 
                       $i++;
                   }?>
                 
               </div>
               </div>
            </div>
            <div role="tabpanel" class  ="tab-pane" id ="au">
                    <br>
                    <div class="row">
        
                    <div class="col-md-12" style="margin-right:0px;"> 
                       
                       <?php 
                           $getcs = new BaiHat();
                           $i=1;
                           $ds = $getcs->DanhSachBH();
                           while($r = $ds->fetch_object())
                           {
                          
                       ?>
                          <div class="col-md-12">
                               <p><?php echo $r->TenBaiHat;?> - <?php echo $r->TenCaSi;?> </p>
                                   <hr>
                          </div>
                       <?php 
                           $i++;
                       }?>
                     
                   </div>
                   </div>
            </div>
            <div role="tabpanel" class  ="tab-pane" id ="hq">
                    <br>
                    <div class="row">
        
                    <div class="col-md-12" style="margin-right:0px;"> 
                       
                       <?php 
                           $getcs = new BaiHat();
                           $i=1;
                           $ds = $getcs->DanhSachBH();
                           while($r = $ds->fetch_object())
                           {
                          
                       ?>
                          <div class="col-md-12">
                               <p><?php echo $r->TenBaiHat;?> - <?php echo $r->TenCaSi;?> </p>
                                   <hr>
                          </div>
                       <?php 
                           $i++;
                       }?>
                     
                   </div>
                   </div>
                    
            </div>
            
            </div>
          
        </div>