<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Thông tin giỏ hàng</title>
	<link rel="stylesheet" href="info_pay.css" />
	<link rel="stylesheet" href="../commonstyle.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>

<body>
	<section class="cart">
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="cart__info">
						<div class="main__header">
							<a href="https://www.h2gaming.vn/" class="logo" target="_self">
								<h1 class="logo__text">H2gaming.vn</h1>
							</a>
							<ul class="info__link">
								<li class="link__cart">
									<a href="">Giỏ hàng</a>
								</li>
								<li class="info__cart">
									Thông tin giỏ hàng
								</li>
								<li class="link__payment">
									<a href="">Phương thức thanh toán</a>
								</li>
							</ul>
						</div>
						<div class="main">
							<div class="name">
								<h2>Thông tin giao hàng</h2>
							</div>
							<div class="link_login">
								<h3>Bạn đã đăng nhập chưa?</h3>
								<a href="">Đăng nhập</a>
							</div>
							<form class="flie__input" method="POST" action="info_pay.php">
								<input type="text" placeholder="Họ và tên" size="30" id="input__name" name="input__name" />

								<input type="email" placeholder="Email" size="30" id="input_email" name="input__email" />

								<input type="text" placeholder="Số điện thoại" size="30" id="input_phoneNumber" name="input_phoneNumber" />

								<input type="text" placeholder="Địa chỉ" size="30" id="input_address" name="input_address" />

								<input type="text" placeholder="Tỉnh/ Thành phố" size="30" id="input_city" name="input_city" />

								<input type="text" placeholder="Quận / Huyện" size="30" id="input_district" name="input_district" />
								<div class="main__click">
									<a href="https://gearvn.com/cart">
										<svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
											<path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
										</svg>
										Giỏ hàng
									</a>
									<button type="submit" value="submit" name="submit">Tiếp đến phương thức thanh toán</button>
								</div>
							</form>
						</div>
					</div>
				</div>
					
				<div class="col-auto total">
					<div class="total__cost">
						<div class="product">
							<div class="product__img">
								<img src="images/1.webp" alt="">
								<span class="product__sl">1</span>
							</div>
							<span class="product__name">Bàn phím E-Dra</span>
							<span class="product__price">740,000đ</span>
						</div>
						<form action="info_pay" method="POST" class="product__discount">
							<input type="text" placeholder="Mã giảm giá" size="30" id="input__discount" name="input__discount" />
							<button type="submit" value="submit__discount" name="submit_discount">Sử dụng</button>
						</form>
						<div class="total__line">
							<div class="total__line__subtotal">
								<span class="total__line__name">Tạm tính</span>
								<span class="total__line__price">740,000đ</span> <br>
							</div>
							<div class="total__line__shipping">
							<span class="total__line__name">Phí vận chuyển</span>
								<span class="total__line__price">0</span> <br>
							</div>
						</div>
						<div class="total__line__footer">
							<span class="total__line__name">Tổng tiền</span>
							<span class="total__line__price">740,000đ</span> <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>