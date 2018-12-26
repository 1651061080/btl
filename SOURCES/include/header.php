
	<div class="navbar navbar-fixed-top" id="header1">
		<div class="navbar-inner">
			<div class="container">
				<button style="margin-top: 1px;" type="button" class="btn btn-navbar btn-danger" data-toggle="collapse" data-target=".nav-collapse">
					<b style="margin-top: 2px;" class="icon icon-list icon-white"></b> Danh mục
				</button>
				<div class="nav-collapse collapse">
					<ul class="nav">

						<li class="mn-item" item-id="1"><a href="./INDEX.PHP"><IMG src="./include/dungchung/IMG/LOGO1.PNG" width="150PX" height="150PX"><a href="./trangdautest.html"></a>
						</li>
						<li class="mn-item" item-id="2"><a href="">LUYỆN TẬP</a></li>
						<li class="mn-item" item-id="3"><a href="">HỌC BÀI</a></li>
						<li class="mn-item" item-id="4"><a href="">HỎI ĐÁP</a></li>
						<li class="mn-item" item-id="5"><a href="">KIỂM TRA</a></li>
						<li class="mn-item hidden-desktop" item-id="6"><a href="">THÔNG TIN</a></li>
						<li class="mn-item hidden-desktop" item-id="7"><a href="">ĐĂNG KÝ MUA THẺ</a></li>
					</ul>
					<div class="nav dropdown1 visible-desktop">
						<button class="dropbtn" style="font-size: 30px;">⋯</button>
						<div class="dropdown-content">
							<a href="">THỬ THÁCH</a>
							<a href="">THI ĐẤU</a>
							<a href="">THÔNG TIN</a>
						</div>
					</div>
					<div class="nav dropdown1 visible-desktop" style="margin-top: 2px;margin-left: 60px;">
						<button class="dropbtn" style="width: 120px;color: #ff1e1e;padding: 3px;margin-top: 4px;">MUA THẺ HỌC</button>
						<div class="dropdown-content">
							<a href="">Đăng ký mua thẻ</a>
							<a href="">Tư vấn và đặt mua qua điện thoại:<br> 0961540437</a>
						</div>
					</div>
					<form class="navbar-form pull-right" style="float:right;" action="" method="post">
					<!-- <div class="nav dropdown1 visible-desktop">
						<input autocomplete="off" onfocus="return " class="dropbtn span2"  type="text" name="username" id="username"
						 placeholder="User Name" style="max-width: 125px" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">>
						 <div class="dropdown-content">
							<a href="./login/reset.php">QUÊN MẬT KHẨU</a>
							<a href="">NHỚ TÀI KHOẢN</a>

						</div>
						</div>
						<button id="login-submit" type="submit" value="login" class="btn btn-success" tabindex="5"><b style="font-family: Tahoma, sans-serif;">►</b></button>
						<input class="span2" type="password" name="password" placeholder="Mật khẩu" style="max-width: 125px" tabindex="3">
						<a title="Đăng nhập bằng tài khoản Google/GMail của bạn" href=""><img class="img" style="margin-top: 4px;width: 30px; height: 30px; border-radius: 4px;"
							 src="./include/dungchung/IMG/GMAIL.png"></a> -->
						<?php if(isset($_SESSION['username']) ){
							echo ('Xin chào:');?>
							<span class="profile-name"><?php echo $_SESSION['username'];?> <b class="caret"></b></span>
							<?php
							
							echo('<a href="./login/logout.php" style="margin-left:50px;">Đăng xuất</a>');
						}else{?>
							<a href="./login/index.php" class="btn btn-primary lg-link">Đăng ký</a>
						<a href="./login/login.php" class="btn btn-primary lg-link"> Đăng nhập</a>
						<?php
					}?>					 
				
	  <?php 