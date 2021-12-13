<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang ca nhan | Doi mat khau</title>

	<!-- File Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- CSS tùy chỉnh của bạn ở dưới này -->
    <link rel="stylesheet" href="{{('public/frontend/css/csschung.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/canhan.css')}}">
</head>
<body>

	<div class="container">
		<h2>Thiết lập tài khoản</h2>

		<!-- bắt đầu menu ngang -->
		<div class="row" style="margin-top: 70px;">
			<button class="tab-khongchon">Thông tin cá nhân</button>
			<button class="btn-xanh tab-duocchon">Đổi mật khẩu</button>
		</div> <!-- kết thúc menu ngang -->

		<hr>

		<!-- bắt đầu phần điền mật khẩu -->
		<div class="row inf-canhan">
			<label for="pwd"><strong>Mật khẩu hiện tại</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Mật khẩu mới</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Nhập lại mật khẩu</strong></label>
            <input type="text" class="form-control input-canhan">
		</div> <!-- kết thúc phần điền mật khẩu -->
		
		<div class="row" style="margin-top: 100px;">
			<button class="btn-xanh btn-luu">Lưu thay đổi</button> 
		</div>
	</div>
	
</body>
</html>