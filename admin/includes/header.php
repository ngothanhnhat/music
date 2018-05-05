
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="margin-left:50px;">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo BASE_URL;?>">Website</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" style="background:#c4e8fd ;position: fixed; z-index:99;width: 100%;">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASE_URL;?>">Trang chủ</a></li>

        </ul>


			<form method="POST" action="<?php echo BASE_URL.'/?option=search'?>" id="custom-search-form" class="form-search form-horizontal">
				<div class="input-append span12">
					<input type="text" class="search-query mac-style" name="key" placeholder="Search">
					<button type="submit" class="btn" name="btn_search"><i class="fa fa-search"></i></button>
				</div>
			</form>





		</div><!-- /.navbar-collapse -->
</nav>
