
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/bootstrap-responsive.css">
    <title>Học toán với HOCTOT.COM</title>
    <link rel="stylesheet" href="../include/dungchung/css/TEST.CSS">
    <script async="" src="./Học toán với OnlineMath - Online Math_files/analytics.js.download"></script>
    <script type="text/javascript" src="../include/dungchung/js/jquery.js.download"></script>
    <script type="text/javascript" src="../include/dungchung/js/jquery.bxslider.min.js.download"></script>
    <script src="./dungchung/js/bootstrap.min.js.download"></script>
    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/grade_new.css">
    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/home.css">
    <link rel="stylesheet" type="text/css" href="../include/dungchung/css/page.css">



    <title>HOCTOT.COM</title>
</head>
	<div class="navbar navbar-fixed-top" id="header1">
		<div class="navbar-inner">
			<div class="container">
				<button style="margin-top: 1px;" type="button" class="btn btn-navbar btn-danger" data-toggle="collapse" data-target=".nav-collapse">
					<b style="margin-top: 2px;" class="icon icon-list icon-white"></b> Danh mục
				</button>
				<div class="nav-collapse collapse">
					<ul class="nav">

						<li class="mn-item" item-id="1"><a href="../INDEX.PHP"><IMG  src="../include/dungchung/IMG/logo1.png" src="../dungchung/IMG/logo1.png" width="150PX" height="150PX"></a>
						</li>
						<li class="mn-item" item-id="2"><a href="../index.php">LUYỆN TẬP</a></li>
						<li class="mn-item" item-id="3"><a href="../include/hocbai.php">HỌC BÀI</a></li>
						<li class="mn-item" item-id="4"><a href="">HỎI ĐÁP</a></li>
						<li class="mn-item" item-id="5"><a href="../include/kiemtra.php">KIỂM TRA</a></li>
						<li class="mn-item hidden-desktop" item-id="6"><a href="">THÔNG TIN</a></li>
						<li class="mn-item hidden-desktop" item-id="7"><a href="./">ĐĂNG KÝ MUA THẺ</a></li>
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
							<a href="./login/index.php" class="btn btn-primary lg-link">Đăng ký</a>
						<a href="./login/login.php" class="btn btn-primary lg-link"> Đăng nhập</a>
						<?php
					}?>					 
				</div>
			</div>
		</div>
</div>