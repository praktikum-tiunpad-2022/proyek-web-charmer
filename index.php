<?php 
    $title = "Home";
    require "include/header.php";
?>
		<section class="intro">
			<div class="content">
				<img src="assets/img/logo3.jpg" style="width: 50%;">
				<h2 class="product-category">K-Pop Official Merchandise Store</h2>
			<!--
				<div>
					<button class="signup-btn" type="button"><a href="login.php" style="color: #212121;"><span class="cover"></span>SIGN UP</a></button>
					<button class="login-btn" type="button"><a href="login.php" style="color: #212121;"><span class="cover"></span>SIGN IN</a></button>
				</div>
			-->
			</div>
		</section>
		<section class="offers"> 
			<div class="content">
				<button class="prev-btn" onclick=""><img src="assets/img/arrow.png" alt=""></button>
				<button class="next-btn" onclick=""><img src="assets/img/arrow.png" alt=""></button>
				<div class="offers-container">
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/new.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/discount.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/offer.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/new.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/discount.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
					<div class="offers-card">
						<div class="offers-image">
							<a href="products.php">
								<img src="assets/img/offer.jpg" class="offers-thumb" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php 
	require "include/footer.php";
?>