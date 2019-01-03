<?php
session_start();
?>
	<div class="navbar navbar-fixed-top" id="header1">
		<div class="navbar-inner">
			<div class="container">
				<button style="margin-top: 1px;" type="button" class="btn btn-navbar btn-danger" data-toggle="collapse" data-target=".nav-collapse">
					<b style="margin-top: 2px;" class="icon icon-list icon-white"></b> Danh mục
				</button>
				<div class="nav-collapse collapse">
					<ul class="nav">

						<li class="mn-item" item-id="1"><a href="../../INDEX.PHP"><IMG   src="../dungchung/IMG/logo1.png" width="150PX" height="150PX"></a>
						</li>
						<li class="mn-item" item-id="2"><a href="../../index.php">LUYỆN TẬP</a></li>
						<li class="mn-item" item-id="3"><a href="../hocbai.php">HỌC BÀI</a></li>
						<li class="mn-item" item-id="4"><a href="">HỎI ĐÁP</a></li>
						<li class="mn-item" item-id="5"><a href="../kiemtra.php">KIỂM TRA</a></li>
						<li class="mn-item hidden-desktop" item-id="6"><a href="">THÔNG TIN</a></li>
						<li class="mn-item hidden-desktop" item-id="7"><a href="">ĐĂNG KÝ MUA THẺ</a></li>
					</ul>
					<div class="nav dropdown1 visible-desktop" style="margin-top: 2px;margin-left: 60px;">
						<button class="dropbtn" style="width: 120px;color: #ff1e1e;padding: 3px;margin-top: 4px;">MUA THẺ HỌC</button>
						<div class="dropdown-content">
							<a href="">Đăng ký mua thẻ</a>
							<a href="">Tư vấn và đặt mua qua điện thoại:<br> 0961540437</a>
						</div>
					</div>
					<form class="navbar-form pull-right" style="float:right;" action="" method="post">
				
						<?php if(isset($_SESSION['username']) && $_SESSION['level']==2 ){
							echo ('Xin chào:');?>
							<span class="profile-name"><?php echo ('Quản lí');?> <b class="caret"></b></span>
							<?php
							echo('<a href="./admin/index.php" style="margin-left:50px;">admin</a>');
							echo('<a href="./login/logout.php" style="margin-left:50px;">Đăng xuất</a>');
						}
						else if ( isset($_SESSION['username']) && $_SESSION['level']==1){
								echo('Xin chào')?>
								<span class="profile-name"><?php echo $_SESSION['username'];?> <b class="caret"></b></span>
								<?php
								echo('<a href="./login/logout.php" style="margin-left:50px;">Đăng xuất</a>');
							
						}else{?>
							<a href="../../login/index.php" class="btn btn-primary lg-link">Đăng ký</a>
						<a href="../../login/login.php" class="btn btn-primary lg-link"> Đăng nhập</a>
						<?php
					}?>					 
				</div>
				</div>
			</div>
	</div>