<?php 
    $title = "Product";
    require "includes/header.php";
	session_start();
	
    if(isset($_GET['filter'])) 
    {
        $query = mysqli_query($connect, "SELECT * FROM barang WHERE id_kategori = '".$_GET['filter']."'");
        $data = mysqli_fetch_assoc($query);
    } else {
        $query = mysqli_query($connect, "SELECT * FROM barang ORDER BY id_kategori DESC");
        $data = mysqli_fetch_assoc($query);
	}

	if(isset($_POST['add_to_cart']))
	{
	   $nama_brg = $_POST['nama_brg'];
	   $nama_artis = $_POST['nama_artis'];
	   $harga_brg = $_POST['harga_brg'];
	   $img_brg = $_POST['img_brg'];
	   $id_brg = $_POST['id_brg'];
	   $product_quantity = 1;
	
	   $select_cart = mysqli_query($connect, "SELECT * FROM cart WHERE nama_brg = '$nama_brg'");

	   $insert_product = mysqli_query($connect, "INSERT INTO cart (nama_brg, nama_artis, harga_brg, img_brg, qyt_brg, id_buyer, id_brg, status) VALUES('$nama_brg', '$harga_brg', '$img_brg', '$product_quantity','$id_buyer','$id_brg','1')");
	   $message = 'Product added to cart succesfully';
	}
?>
        <section class="product"> 
            <div class="content">
                <h2 class="product-category">Pre Orders Now!</h2>
                <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
                <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
                <div class="product-container">
                <?php
                    do {		
                ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?=BASE_URL;?>assets/img/<?=$data['img_brg'];?>" class="product-thumb" alt="">
							<form action="#" method="post">
                                <button class="card-btn">Add To Cart</button>
                                <fieldset>
                                    <input type="hidden" name="id_brg" value="<?php echo $data['id_brg'];?>"/>
                                    <input type="hidden" name="nama_brg" value="<?php echo $data['nama_brg'];?>"/>
                                    <input type="hidden" name="harga_brg" value="<?php echo $data['harga_brg'];?>"/>
                                    <input type="hidden" name="img_brg" value="<?php echo $data['img_brg']; ?>">
                                    <input type="hidden" name="currency_code" value="IDR"/>
                                    <input type="submit" name="add_to_cart" value="Add to cart" onclick="return confirm('<?=$message;?>')" class="button"/>
                                </fieldset>
							</form>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand"><?=$data['nama_artis'];?></h2>
                            <p class="product-short-description"><?=$data['nama_brg'];?></p>
                            <span class="price">$<?=$data['harga_brg'];?></span><span class="actual-price">$40</span>
                        </div>
                    </div>
                <?php
                    } while($data = mysqli_fetch_assoc($query));
                ?>
        </section>
        <section class="product"> 
            <div class="content">
                <h2 class="product-category">Best Seller!</h2>
                <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
                <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/bs1.png" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">ITZY</h2>
                            <p class="product-short-description">BEST FRIENDS FOREVER 2023 Season's Greetings</p>
                            <span class="price">$65</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">15% off</span>
                            <img src="assets/img/bs2.jpeg" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">ASTRO</h2>
                            <p class="product-short-description">Photobook Magazine Official MD 2022</p>
                            <span class="price">$34</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/bs3.png" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">SEVENTEEN</h2>
                            <p class="product-short-description">Concert Power Of Love Digital Code 2021</p>
                            <span class="price">$90</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/bs4.jpg" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">DKZ</h2>
                            <p class="product-short-description">Summer Photobook Pause 2022</p>
                            <span class="price">$60</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">10% off</span>
                            <img src="assets/img/bs5.jpg" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">YUMI'S CELLS SEASON 2</h2>
                            <p class="product-short-description">유미의 세포들 시즌2 - OST</p>
                            <span class="price">$54</span><span class="actual-price">$60</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/bs6.jpg" class="product-thumb" alt="">
                            <button class="card-btn">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">BTS</h2>
                            <p class="product-short-description">Recipe Book</p>
                            <span class="price">$65</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
    require "includes/footer.php";
?>