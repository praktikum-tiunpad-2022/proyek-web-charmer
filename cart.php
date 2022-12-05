<?php 
    $title = "Cart";
    require "include/header.php";

    $id_buyer = $_SESSION['id_buyer'];
    if(isset($_POST['update_update_btn'])) {
        $update_value = $_POST['update_quantity'];
        $update_id = $_POST['update_quantity_id'];
        $update_quantity_query = mysqli_query($connect, "UPDATE cart SET qyt_brg = '$update_value' WHERE id_cart = '$update_id'");
        if($update_quantity_query) {
            'location:cart.php';
        };
    };

    if(isset($_GET['remove'])) {
       $remove_id = $_GET['remove'];
       mysqli_query($connect, "DELETE FROM cart WHERE id_cart = '$remove_id'");
       'location:cart.php';
    };
?>
        <section class="product"> 
            <div class="content">
                <h2 class="product-category">Cart!</h2>
                <h4 class="cart-products">Your shopping cart contains: 
                    <span><?php echo $row_count;?> products.
                </h4>
                <button class="prev-btn"><img src="assets/img/arrow.png" alt=""></button>
                <button class="next-btn"><img src="assets/img/arrow.png" alt=""></button>
                <div class="product-container">
                <?php
                    $select_cart = mysqli_query($connect, "SELECT * FROM cart where status = '1' AND id_buyer = '$id_buyer'");
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
                ?>
        </section>
        <section class="grand-total">
            <div class="content">
                <h2 class="product-category">Grand Total : <span>$<?php echo number_format($grand_total); ?></span></h2>
                <div>
                    <a class="btn-cart" href="products.php">Continue Shopping<i class="fa fa-cart-plus"></i></a>
                    <a class="btn-cart" href="checkout.php">Procced to Checkout<i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </section>
<?php 
    require "include/footer.php";
?>