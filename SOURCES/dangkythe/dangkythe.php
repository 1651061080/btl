
<?php
include('./header.php');
?>
<div id="main-content">
		<h1 style="text-align: center;">Đăng ký mua thẻ học</h1>
		<div id="info" style="font-size: 18px;line-height: 30px;">
						<p>
			OLM phát hành thẻ cào mệnh giá 200.000đ tương ứng với thời hạn VIP 1 năm. Bạn hãy điền đầy đủ thông tin bên dưới, OLM sẽ giao thẻ và thanh toán tại nhà cho bạn. Bạn sẽ nhận thẻ và thanh toán cho người giao thẻ sau vài ngày tùy theo khoảng cách từ Hà Nội đến địa chỉ giao thẻ.
			</p>
			<p>
			Một tài khoản VIP có thể thực hành không giới hạn các môn Toán, Tiếng Việt ở tất cả các lớp.	
			</p>
			<p>
			Nên rủ bạn cùng mua theo nhóm để được giá rẻ hơn.
			</p>
			<p>
			Tư vấn và đặt mua thẻ qua điện thoại: 091540437	
			</p>
			<p>
			<a href="./quyenloi.php" target="_blank">Xem thêm quyền lợi của thành viên VIP</a>	
			</p> 
				
		</div>
		<br>
		<div class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="name">Tên của bạn:</label>
				<div class="controls">
					<input type="text" name="name" id="name" placeholder="Họ tên đầy đủ">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="mobile">Số điện thoại:</label>
				<div class="controls">
					<input type="text" id="mobile" name="mobile" placeholder="Số điện thoại của bạn">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="address">Địa chỉ:</label>
				<div class="controls">
					<input type="text" id="address" name="address" placeholder="Địa chỉ nhận thẻ">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="number">Số lượng thẻ:</label>
				<div class="controls">
					<select id="number">
						<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>					</select>
					(Mua càng nhiều giá càng rẻ)
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="number">Giá tiền:</label>
				<div class="controls">
					<div id="price"><span class="real">200.000đ</span></div>
				</div>
			</div>							
			<div class="control-group">
				<div class="controls">
					<button id="registercard" class="btn btn-primary btn-large">Đăng ký mua thẻ</button>
				</div>
			</div>
			<input type="hidden" name="" value="1">
		</div>
	</div>