<?php 
    $title = "Detail Order";
    require "includes/header.php"; 
    $id_transaksi = $_GET['id_transaksi'];
?>
        <section class="dashboard">
            <div class="content">
                <h2 class="product-category">Detail Order  <a class="btn-cart" href="penjualan.php">Back<i class="fa fa-times"></i></a></h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($connect, "SELECT * FROM cart WHERE id_transaksi = '$id_transaksi'");
                            $data = mysqli_fetch_assoc($query);
                            if(mysqli_num_rows($query) > 0) {
                                $no = 1;
                                do {
                                    ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><img src="<?=BASE_URL;?>assets/img/<?=$data['img_brg'];?>" style="width: 250px;"></td>
                                        <td><?=$data['nama_brg'];?></td>
                                        <td>$<?=number_format($data['harga_brg'])?></td>
                                    </tr>
                                    <?php
                                } while($data = mysqli_fetch_assoc($query));
                            } else {
                                echo "<tr><td colspan='4'><center>Belum ada data!</center></td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
<?php 
	require "includes/footer.php";
?>