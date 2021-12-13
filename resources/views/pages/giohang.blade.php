<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gio hang</title>

	<!-- File Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- CSS tùy chỉnh của bạn ở dưới này -->
    <link rel="stylesheet" href="{{('public/frontend/css/csschung.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/giohang.css')}}">
    
</head>
<body>
	
	<div class="wp-giohang">
		<h2>Giỏ hàng</h2>
		<div class="row">
			<div class="col-md-7">
				<hr>
				<div class="row item-sanphamgiohang"> <!-- bat dau item san pham -->
					<div class="col-md-3">
						<img src="{{('public/frontend/images/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre">
					</div>
					<div class="col-md-3" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3 giohang-box3">
						<div class="giohang-box3-1">
							<div class="row" style="text-align: right;">
								<button class="btn-trang btn-soluong">-</button>
								<input type="text" class="input-soluong" value="2" style="margin-left: 5px;">
								<button class="btn-xanh btn-soluong" style="margin-left: 5px;">+</button>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
				<hr>
				<div class="row item-sanphamgiohang"> <!-- bat dau item san pham -->
					<div class="col-md-3">
						<img src="{{('public/frontend/images/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre">
					</div>
					<div class="col-md-3" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3">
						<div class="row inf-soluong">
							<button class="btn-trang btn-soluong">-</button>
							<input type="text" class="input-soluong" value="2">
							<button class="btn-xanh btn-soluong">+</button>
						</div>
					</div>
					<div class="col-md-3">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
				<hr>
				<div class="row item-sanphamgiohang"> <!-- bat dau item san pham -->
					<div class="col-md-3">
						<img src="{{('public/frontend/images/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre">
					</div>
					<div class="col-md-3" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3">
						<div class="inf-soluong">
							<button class="btn-trang btn-soluong">-</button>
							<input type="text" class="input-soluong" value="2">
							<button class="btn-xanh btn-soluong">+</button>
						</div>
					</div>
					<div class="col-md-3">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
			</div>
			<div class="col-md-3 inf-giohang">
				<h5>3 sản phẩm</h5>
				<p>Tổng số lượng: 6 món</p>
				<p>Tổng tiền: 123.000 NVĐ</p>
				<button class="btn-xanh btn-giohang-tttt">Tiếp tục để thanh toán</button>
			</div>
		</div>
	</div>

</body>
</html>