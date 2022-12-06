<?php 
    $title = "Checkout";
	require "include/header.php";
?>
		<section class="product"> 
			<div class="content">
				<h2 class="product-category">Checkout</h2>
				<h4 class="cart-products">Your shopping cart contains: 
					<span><?php echo $row_count;?> products.
				</h4>
				<button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
				<button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
				<div class="product-container">
				<?php
					$select_cart = mysqli_query($connect, "SELECT * FROM cart where status = '1'");
					$grand_total = 0;
					
					$fetch_cart = mysqli_fetch_assoc($select_cart);
					if(mysqli_num_rows($select_cart) > 0) {
						do {		
				?>
							<div class="product-card">
								<div class="product-image">
									<img src="<?=BASE_URL;?>assets/img/<?=$fetch_cart['img_brg'];?>" class="product-thumb" alt="">
									<a href="cart.php?remove=<?php echo $fetch_cart['id_cart'];?>" onclick="return confirm('Remove item from cart?')" class="card-btn">Remove</a>
								</div>
								<div class="product-info">
									<h2 class="product-brand"><?=$fetch_cart['nama_artis'];?></h2>
									<p class="product-short-description"><?=$fetch_cart['nama_brg'];?></p>
									<p class="product-short-description">Quantity: <?=$fetch_cart['qyt_brg'];?></p>
									<?php  $sub_total = $fetch_cart['harga_brg'] * $fetch_cart['qyt_brg']; ?>
									<span class="price">$<?php echo number_format($sub_total);?></span>
								</div>
							</div>
				<?php
							$grand_total += $sub_total;  
						} while($fetch_cart = mysqli_fetch_assoc($select_cart));
					} else {
						echo "<center>Your cart is still empty!</center>";
					}
    				$error = "";
					$id_buyer = $_SESSION['id_buyer'];
					if(isset($_POST['order_btn'])) {
						$nama = $_POST['nama'];
						$alamat = $_POST['alamat'];
						$nohp = $_POST['nohp'];
						$namarek = $_POST['namarek'];
						$norek = $_POST['norek'];
						$bank = $_POST['bank'];
						$tgl = date("Y-m-d H:i:s");
						$detail_query = mysqli_query($connect, "INSERT INTO transaksi (nama_buyer, alamat_buyer, telp_buyer, tgl_transaksi, 
																norek_buyer, namarek_buyer, bank_buyer, total_transaksi, id_buyer) 
																VALUES ('$nama','$alamat','$nohp', '$tgl','$norek','$namarek','$bank','$grand_total','$id_buyer')");
						$last = mysqli_query($connect, "SELECT * FROM transaksi	WHERE id_transaksi IN (SELECT MAX(id_transaksi) FROM transaksi)");
						$last_id = mysqli_fetch_assoc($last);
						$id = $last_id['id_transaksi'];
						$cart_trans = mysqli_query($connect, "UPDATE cart SET id_transaksi = '$id' WHERE id_buyer = '$id_buyer' AND status = '1'");
						if($detail_query) {
							echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."done.php'>";
						}

						$change_status = mysqli_query($connect, "UPDATE cart SET status = '2' WHERE id_buyer = '$id_buyer'");
						$cart_query = mysqli_query($connect, "SELECT * FROM cart");
						$price_total = 0;
						if(mysqli_num_rows($select_cart) == 0) {
							$error = "Failed Checkout. Your cart is still empty!";
						} else {
							echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."done.php'>"; // ada page ttg order success gitu deh
						}
					};
				?>
			</div>
		</section>
        <section class="grand-total">
            <div class="content">
                <h2 class="product-category">Grand Total : <span>$<?php echo number_format($grand_total); ?></span></h2>
                <div>
                    <a class="btn-cart" href="cart.php">Back to Cart<i class="fa fa-cart-arrow-down"></i></a>
                    <a class="btn-cart" href="products.php">Continue Shopping<i class="fa fa-forward"></i></a>
                </div>
            </div>
        </section>
		<section class="login">
			<div class="form-container">
				<form action="#" method="post">
					<input type="hidden" name="grand_total" value="<?php echo $grand_total['grand_total'];?>"/>
					<h2>Complete Your Shiping Address</h2>
					<input type="text" name="nama" placeholder="Enter Your Full Name" required=" ">
					<input type="text" name="alamat" placeholder="Enter Your Address" required=" ">
					<input type="text" name="nohp" placeholder="Enter Your Mobile number" required=" ">

					<h2>Complete Your Payment</h2>
					<input type="text" name="namarek" placeholder="Enter Your Name on Card" required=" ">
					<input type="text" name="norek" placeholder="Enter Your Card Number" required=" ">
					<div>
						<select type="select" name="bank" required>
						<option>-- Choose Your Bank</option>
						<option value="MDR-BA">Mandiri</option>
						<option value="BCA-BA">BCA</option>
						<option value="CMB-BA">CIMB</option>
						<option value="BNI-BA">BNI</option>
						<option value="JBR-BA">Bank Jabar</option>
						<option value="DNM-BA">Danamon</option>
						<option value="BRI-BA">BRI</option>
						<option value="PMT-BA">Permata</option>
					</div>
					<input type="submit" name="order_btn" value="Checkout Now!" class="form-btn">
				</form>
                <p><?=$error;?></p>
			</div>
		</section>
<?php 
    require "include/footer.php";
?>