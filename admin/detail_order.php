<?php 
    $title = "Daftar Penjualan";
    require "include/header.php"; 
    $id_transaksi = $_GET['id_transaksi'];
?>

            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="penjualan.php">Back</a>
                    </li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Detail Pesanan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Nama Pesanan</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                        $query = mysqli_query($connect, "SELECT * FROM cart WHERE id_transaksi = '$id_transaksi'");
                                        $data = mysqli_fetch_assoc($query);
                                        if(mysqli_num_rows($query) > 0)
                                        {
                                            $no = 1;
                                            do
                                            {
                                                ?>
                                                <tr>
                                                    <td><?=$no++;?></td>
                                                    <td><img src="<?=BASE_URL;?>assets/img/<?=$data['img_brg'];?>" style="width: 100px;"></td>
                                                    <td><?=$data['nama_brg'];?></td>
                                                    <td>$<?=$data['harga_brg']?></td>
                                                </tr>
                                                <?php
                                            }
                                            while($data = mysqli_fetch_assoc($query));
                                        }
                                        else
                                        {
                                            echo "<tr><td colspan='10'><center>Belum ada data!</center></td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>