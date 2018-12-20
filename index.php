<?php session_start();
?>

<!DOCTYPE html>
<html lang="thien">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" type="text/css" href="./include/dungchung/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="include/dungchung/css/bootstrap-responsive.css">
	<title>Học toán với HOCTOT.COM</title>
	<link rel="stylesheet" href="./include/dungchung/css/TEST.CSS">
	<script type="text/javascript" src="./include/dungchung/js/jquery.js.download"></script>
	<script type="text/javascript" src="./include/dungchung/js/jquery.bxslider.min.js.download"></script>
	<script src="./include/dungchung/js/bootstrap.min.js.download"></script>
	<link rel="stylesheet" type="text/css" href="./include/dungchung/css/grade_new.css">
	<link rel="stylesheet" type="text/css" href="./include/dungchung/css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="./include/dungchung/css/home.css">
	<link rel="stylesheet" type="text/css" href="./include/dungchung/css/page.css">
	<title>HOCTOT.COM</title>
</head>
<body>

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
						<?php if(isset($_SESSION['username'])){
							echo ('Xin chào:');
							echo $_SESSION['username'];
							echo('<a href="./login/logout.php" style="margin-left:50px;">Đăng xuất</a>');
						}else{?>
							<a href="./login/index.php" class="btn btn-primary lg-link">Đăng ký</a>
						<a href="./login/login.php" class="btn btn-primary lg-link"> Đăng nhập</a>
						<?php
					}?>					
			
	  <?php 

    //    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    //        echo ' '.$_SESSION['username']."<br/>";
    //        echo '<a href="logout.php">Logout</a>';
    //    }
    //    else{
    //        echo 'Bạn chưa đăng nhập';
    //    }
    //    ?>
						<!-- <input type="hidden" name="return" value="">
						<div class="login-add hidden-tablet hidden-phone">
							<ul class="dropdown-menu" id="menu_login">
								<li><a><label class="checkbox"><input type="checkbox" name="remember" value="yes" checked="checked"> Ghi nhớ
											đăng nhập</label></a></li>
								<li><a href="">Quên mật khẩu</a></li>
								<li><a href="">Đăng ký tài khoản</a></li>
							</ul>
						</div> -->
					</form>

					<!-- <script type="text/javascript">
						$("#username_login").focus(function () { $("#menu_login").show() }).blur(function () { setTimeout(function () { $("#menu_login").hide() }, 200); });
					</script> -->

				</div>
			</div>

		</div>
	</div>
		<div class="banner-holder ">
			<div class="container banner">
				<div class="hidden-phone hidden-tablet text-center">
					<img src="./include/dungchung/img/lodo.PNG" id="main-logo" alt="Online Math" title="Online Math"><br>
					<div class="user-cmd">
						<h1 class="text-center" style="color: #3a5795; margin-top: 0px; font-size: 39px;">Tự học toán với Online Math</h1>
						<!-- <a class="btn btn-primary btn-large" href="">Đăng ký tài khoản</a> hoặc
						<a style="line-height: 32px; padding: 4px 12px; padding-bottom: 6px;" class="btn btn-danger btn-large" href=""><img
							 class="img" style="margin-top: -2px;width: 30px; height: 30px; border-radius: 4px;" src="./include/dungchung/IMG/GMAIL.png">
							Đăng nhập bằng Google</a> -->
						<br class="clear">
					</div>
				</div>
				<form class="hidden-desktop home-form" action="https://olm.vn/?g=user.login" method="post">
					<input type="text" name="username" placeholder="Tên đăng nhập Online Math">
					<input type="password" id="password" name="password" placeholder="Mật khẩu">
					<div class="text-center">
						<label><a href="">Quên mật khẩu</a></label>
						<label class="checkbox">
							<span style="display: inline-block;"><input checked="" type="checkbox" name="remember" value="yes"> Ghi nhớ đăng
								nhập</span>
						</label>
						<label>
							<a href=""><img class="img" style="width: 28px; height: 28px; border-radius: 4px;"
								 src="./include/dungchung/IMG/GMAIL.png"> Đăng nhập bằng Google</a>
						</label>
						<button type="submit" class="btn btn-primary">Đăng nhập</button> <a class="btn btn-success" href="https://olm.vn/?l=user.register">Đăng
							ký</a>
					</div>
					<input type="hidden" name="logintask" value="1">
					<input type="hidden" name="return" value="https%3A%2F%2Folm.vn%2F">
				</form>
			</div>
		</div>
	</div>
	<div class="container action">
		<div class="container banner">
			<div class="row">
				<h2 class="sm-h1" style="color: #FF6B00; margin-top: 0px; margin-bottom: 20px;text-align:center"><a style="color: #FF6B00;"
					 href="">Luyện tập môn Toán</a></h2>
			</div>
			<div class="row grade-row1">
				<div class="span1_5"><a href="./include/lopmaugiao.php" title="Luyện toán mẫu giáo" class="grade grad-pink"><span class="grade-lop">Mẫu
							giáo</span><span class="grade-number">0</span></a></div>
				<div class="span1_5"><a href="./include/lop1.php" title="Toán lớp 1" class="grade grad-green"><span class="grade-lop">Toán
							lớp</span><span class="grade-number">1</span></a></div>
				<div class="span1_5"><a href="./include/lop2.html" title="Toán lớp 2" class="grade grad-red"><span class="grade-lop">Toán
							lớp</span><span class="grade-number">2</span></a></div>
				<div class="span1_5"><a href="./include/lop3.html" title="Toán lớp 3" class="grade grad-orange"><span class="grade-lop">Toán
							lớp</span><span class="grade-number">3</span></a></div>
				<div class="span1_5"><a href="./include/lop4.html" title="Toán lớp 4" class="grade grad-blue"><span class="grade-lop">Toán
							lớp</span><span class="grade-number">4</span></a></div>
				<div class="span1_5"><a href="./include/lop5.html" title="Toán lớp 4" class="grade grad-blue"><span class="grade-lop">Toán
							lớp</span><span class="grade-number">5</span></a></div>
			</div>
		</div>

		<div class="row">
			<h2 class="sm-h1" style="color: #FF6B00; margin-top: 0px; margin-bottom: 20px;text-align:center"><a style="color: #FF6B00;"
				 href="">Luyện tập Tiếng Việt</a></h2>
		</div>
		<div class="row grade-row1">
			<div class="span1_5"><a href="" title="Tiếng Việt lớp 1" class="grade grad-liter"><span class="grade-lop">Tiếng Việt</span><span
					 class="grade-number">1</span></a></div>
			<div class="span1_5"><a href="/" title="Tiếng Việt lớp 2" class="grade grad-liter"><span class="grade-lop">Tiếng
						Việt</span><span class="grade-number">2</span></a></div>
			<div class="span1_5"><a href="" title="Tiếng Việt lớp 3" class="grade grad-liter"><span class="grade-lop">Tiếng Việt</span><span
					 class="grade-number">3</span></a></div>
			<div class="span1_5"><a href="" title="Tiếng Việt lớp 4" class="grade grad-liter"><span class="grade-lop">Tiếng Việt</span><span
					 class="grade-number">4</span></a></div>
			<div class="span1_5"><a href="" title="Tiếng Việt lớp 5" class="grade grad-liter"><span class="grade-lop">Tiếng Việt</span><span
					 class="grade-number">5</span></a></div>
		</div>
		<div class="row">
			<div class="span6" style="">
				<div class="content-box">
					<div class="content-title grad-green2">
						<a href="">Giúp tôi giải toán</a>
					</div>
					<div class="feature">
						<div class="scroll">
							<div class="alert">
								GIÚP NHAU TRẢ LỜI CÂU HỎI <a href="" style="color: #fff;" class="btn btn-warning btn-small btn-close">Gửi
									câu hỏi</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>


