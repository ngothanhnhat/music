
    <div id="cssmenu1">
            <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation " class="active"><a href="#Playlist" aria-controls="Playlist hot" role="tab" data-toggle="tab">Playlist hot </a></li>
                    <li role="presentation"><a href="#MV" aria-controls="MV hot" role="tab" data-toggle="tab">MV hot </a></li>
                    <li role="presentation"><a href="#Playlist" aria-controls="Playlist" role="tab" data-toggle="tab">Playlist </a></li>
                    <li role="presentation"><a href="#CaSiHot" aria-controls="CaSiHot" role="tab" data-toggle="tab">Ca Sĩ Hot </a></li>
            </ul>
            

    </div>
    <br>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Playlist">
					<?php
						$i=1;
						$ds = Playlist::DanhSach(8);
						while($r = $ds->fetch_object())
						{
							if($i ==1)
								echo "<div class='row'>";
							?>
							<div class="col-md-3">

								<img style=" width: 100%;height:140px;" src="img/playlist/<?php echo $r->Hinh;?>">
								<p class="TenBH"> <a href="index.php?option=nghe_playlist&plId=<?php echo $r->Id?>" style="color:#000;text-decoration:none;">  <?php echo $r->TenPlaylist;?> </a> </p>

							</div>

				<?php
				if($i ==4)
				{
					echo "</div>";
					$i =0;
				}
				$i++;
			}?>
					<div id="Danhsach"></div>
					<div id="xemthem"> Xem Thêm</div>
					<script src="../js/jquery-3.2.1.min.js"></script>
					<script>
              var toancuc=0;
              $(document).ready(function () {

                  $("#xemthem").click(function () {
                      //alert('heheh');
                      toancuc = toancuc+1;
                      $.get("phantrang.php", {trang:toancuc},function (data) {
                          $('#Danhsach').append(data);
                      });
                  });
              });
					</script>

		</div>


        <div role="tabpanel" class="tab-pane" id="MV">
					<?php include_once("controllers/video.php");?>
					<?php

					$i=1;

					$vd = Video::DanhSach(8);
					while($s = $vd->fetch_object())
					{
						if($i ==1)
							echo "<div class='row'>";
						?>
						<div class="col-md-3">

							<a href="index.php?option=playvideo&id=<?php echo $s->Id?>" style="color:#000;text-decoration:none;"> <img style=" width: 100%;height:140px;" src="img/img_vd/<?php echo $s->Hinh;?>.jpg" > </a>
							<p class="TenBH"> <a href="index.php?option=playvideo&pl=<?php echo $s->Id?>" style="color:#000;text-decoration:none;">  <?php echo $s->TenVideo;?> </a> </p>

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


        
        <div role="tabpanel" class="tab-pane" id="Playlist">

        </div>

        <div role="tabpanel" class="tab-pane" id="CaSiHot">

        </div>
            
</div>

    

    
    <h3>BÀI HÁT</h3>
    <div class="row">
        
     <div class="col-md-12" style="margin-right:0px;"> 
        
        <?php 
            include_once("controllers/baihat.php");
            $i=1;
            $dsbh = BaiHat::DanhSach(16);
            while($r = $dsbh->fetch_object())
            {
                if($i ==1)
                echo "<div class='row'>";
        ?>
           <div class="col-md-6" >
                <p class ="TenBH">
									<a href= "index.php?option=nghe1bh&id=<?php echo $r->Id;?>" style="color:#000;text-decoration:none;">
										<?php echo $r->TenBaiHat;?> </a> - <?php echo $r->TenCaSi;?>
									<span id="" class="fas fa-heart" style ="float:right;color:#999999;font-size:12px;margin-left:41px;" wgct="1"></span>
									<span id="" class="fas fa-headphones" style ="float:right;color:#999999;font-size:12px;" wgct="1"> <?php echo $r->LuotNghe?>
								</p>
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
		</div>
