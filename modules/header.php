<?php
	require_once 'controllers/chude.php';
	$option = isset($_GET['option']) ? $_GET['option']:'';
	$chu_de_arr = ChuDe::DanhSach(18);
?>
<nav>
	<div id="cssmenu" class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="<?php if($option == '') echo 'active';?>"><a href='<?php echo BASE_URL;?>'>Trang chủ</a></li>
			<li class="<?php if($option == 'bai_hat') echo 'active';?>"><a href='#'>Bài Hát</a></li>
			<li class="<?php if($option == 'video') echo 'active';?>"><a href='#'>Video</a></li>
			<li class="<?php if($option == 'playlist') echo 'active';?>"><a href='#'>Playlist</a></li>
			<li class="has-sub <?php if($option == 'chu_de') echo 'active';?>">
				<a href='<?php echo BASE_URL.'/?option=chu_de' ;?>'>Chủ đề</a>
				<ul>
					<?php foreach ($chu_de_arr as $chu_de){ ?>
						<li><a rel="follow" href="<?php echo BASE_URL.'/?option=nghe_chu_de&id='.$chu_de->getId();?>"><?php echo $chu_de->TenChuDe;?></a></li>
					<?php } ?>
				</ul>
			</li>
		</ul>

		<form method="POST" action="<?php echo BASE_URL.'/?option=search'?>" id="custom-search-form" class="form-search form-horizontal">
			<div class="input-append span12">
				<input type="text" class="search-query mac-style" name="key" placeholder="Search">
				<button type="submit" class="btn" name="btn_search"><i class="fa fa-search"></i></button>
			</div>
		</form>
        
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
