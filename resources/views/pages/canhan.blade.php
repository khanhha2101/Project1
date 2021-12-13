<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang ca nhan | Thong tin ca nhan</title>

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
			<button class="btn-xanh tab-duocchon">Thông tin cá nhân</button>
			<button class="tab-khongchon">Đổi mật khẩu</button>
		</div> <!-- kết thúc menu ngang -->
		<hr>

		<h4 style="margin-top: 70px;">Avatar</h4>

		<!-- bắt đầu avatar -->
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-2" style="padding: 0px;">
				<img src="{{('public/frontend/images/avtkhachhang.png')}}" alt="loi">
			</div>
			<div class="col-md-10">
				<div class="row"><p><strong>hangu</strong></p></div>
				<div class="row">
					<button class="btn-xanh">Update</button>
					<button class="btn-trang" style="margin-left: 10px;">Delete</button>
				</div>
			</div>
		</div> <!-- kết thúc avatar -->

		<!-- bắt đầu phần thông tin cá nhân -->
		<div class="row inf-canhan">
			<label for="pwd"><strong>Họ tên</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Giới tính</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Ngày sinh</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Email</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Số điện thoại</strong></label>
            <input type="text" class="form-control input-canhan">
            <label for="pwd"><strong>Địa chỉ</strong></label>
            <input type="text" class="form-control input-canhan">
		</div> <!-- kết thúc phần thông tin cá nhân -->

		<div class="row" style="margin-top: 100px;">
			<button class="btn-xanh btn-luu">Lưu thay đổi</button> 
		</div>
	</div>
	
</body>
</html>