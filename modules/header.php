
<nav class="navbar navbar-default" role="navigation"style="background:#c4e8fd ; ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="margin-left:50px;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">WMS</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse"style="background:#c4e8fd ;position: fixed; z-index:99;width: 100%;">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Nhạc</a></li>
            <li><a href="#">Video</a></li>
        </ul>
        
        <form class="navbar-form navbar-left" role="search">
            
                <input class = "search" type="text"  placeholder="Search">
            
            <button class="timkiem" type="submit" >Tìm kiếm
        
            </button>
        </form>


       
        <ul class="nav navbar-nav navbar-right" style="margin-right:50px;">
            <?php if(!isset($_SESSION['idUser'])){ ?>
                <li><a href="login.php">Đăng nhập</a></li>
                <li><a href="signup.html">Đăng ký</a></li>

            <?php } else{ ?>
                <li><a id="taikhoan" base-url="<?php echo BASE_URL;?>" href="<?php echo BASE_URL;?>/acount.php?id=<?php echo $_SESSION['idUser'];?>">Tài Khoản</a></li>
                <li><a href="<?php echo BASE_URL;?>/admin/index.php">Admin</a></li>
                <li><a href="<?php echo BASE_URL;?>/controllers/xuly.php?task=logout">Đăng Xuất</a></li>
            <?php }?>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>