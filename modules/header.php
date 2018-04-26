    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse"style="background:#c4e8fd ;position: fixed; z-index:99;width: 100%;">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL; ?>">Nhạc</a></li>
            <li><a href="#">Video</a></li>
        </ul>
        
        <form class="navbar-form navbar-left" role="search">
            
                <input class = "search" type="text"  placeholder="Search">
            
            <button class="timkiem" type="submit" >Tìm kiếm
        
            </button>
        </form>


       <!-- Split button -->
        
        <ul class="nav navbar-nav navbar-right" style="margin-right:50px;">
      
            <?php if(!isset($_SESSION['idUser'])){ ?>
                <li><a href="<?php echo BASE_URL; ?>/login.php">Đăng nhập</a></li>
                <li><a href="<?php echo BASE_URL; ?>/signup.php">Đăng ký</a></li>

            <?php } else{ ?>
                <div class="btn-group" style="margin-top:10px;">
                    <img src="img/icon_user.jpg" alt="" srcset="" width ="35px" class="img-circle  dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                    <ul class="dropdown-menu" role="menu">
                        <li class="divider"></li> 

                        <li><a id="taikhoan" base-url="<?php echo BASE_URL;?>" href="<?php echo BASE_URL;?>/?option=account&id=<?php echo $_SESSION['idUser'];?>">Trang cá nhân</a></li>

                        <li class="divider"></li>
                        
                        <?php if(isset($_SESSION['Level'])) 
                                if($_SESSION['Level']==1)
                        { ?>

                            <li><a href="<?php echo BASE_URL;?>/admin/index.php">Quản trị</a></li>
                            <li class="divider"></li>
                        <?php }?>   

                        <li><a href="<?php echo BASE_URL;?>/controllers/xuly.php?task=logout">Đăng xuất</a></li>
                        <li class="divider"></li>
                    </ul>
                    <?php echo $_SESSION['User']; ?>
                    
                </div>
                    
                
                <?php }?>
                
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div id='cssmenu' sytle="    position: fixed;
    z-index: 999;
    width: 100%;">
        <ul>
           <li><a href='#'>Trang chủ</a></li>
           <li class='active has-sub'><a href='#'>Bài Hát</a>
              <ul>
                 <li class='has-sub'><a href='#'>Product 1</a>
                    <ul>
                       <li><a href='#'>Sub Product</a></li>
                       <li><a href='#'>Sub Product</a></li>
                    </ul>
                 </li>
                    <ul>
                       <li><a href='#'>Sub Product</a></li>
                       <li><a href='#'>Sub Product</a></li>
                    </ul>
                 </li>
              </ul>
           </li>
           <li><a href='#'>Video</a></li>
           <li><a href='#'>Playlist</a></li>
           <li><a href='#'>Tuyển Tập</a></li>
           <li><a href='#'>BXH</a></li>
           <li><a href='#'>Chủ đề</a></li>
           <li><a href='#'>Top 100</a></li>
           
           <li class='active has-sub'><a href='#'>Khác</a>
            <ul>
               <li ><a href='#'>Nghệ Sĩ</a></li>
               <li><a href='#'>Sự Kiện - TV</a></li>
               <li><a href='#'>Tin Tức Âm Nhạc</a></li>
            </ul>
           </li>
           
        
        </ul>
       
    </div>
    <ul class="nav navbar-nav navbar-right" style="margin-right:200px; margin-top:-50px;">
        <li> <a href="#">NhacVip</a></li>
        <li><a href="#">Nhac</a></li>
        <li><a href="#">Upload</a></li>
        
        
    </ul> 