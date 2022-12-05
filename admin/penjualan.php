<?php 
    $title = "Transaction";
    require "includes/header.php"; 
?>
        <section class="dashboard">
            <div class="content">
                <h2 class="product-category">Transaction</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Name on Card</th>
                            <th>Card Number</th>
                            <th>Bank</th>
                            <th>Order</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($connect, "SELECT * FROM transaksi ");
                            $data = mysqli_fetch_assoc($query);
                            if(mysqli_num_rows($query) > 0) {
                                $no = 1;
                                do {
                                    ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$data['tgl_transaksi'];?></td>
                                        <td><?=$data['nama_buyer'];?></td>
                                        <td><?=$data['alamat_buyer'];?></td>
                                        <td><?=$data['telp_buyer'];?></td>
                                        <td><?=$data['namarek_buyer'];?></td>
                                        <td><?=$data['norek_buyer'];?></td>
                                        <td><?=$data['bank_buyer'];?></td>
                                        <td><a href="detail_order.php?id_transaksi=<?=$data['id_transaksi']?>">Details</a></td>
                                        <td>$<?=number_format($data['total_transaksi'])?></td>
                                    </tr>
                                    <?php
                                } while($data = mysqli_fetch_assoc($query));
                            } else {
                                echo "<tr><td colspan='10'><center>Belum ada data!</center></td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
<?php 
	require "includes/footer.php";
?>