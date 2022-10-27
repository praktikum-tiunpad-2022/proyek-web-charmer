<?php 
    $title = "Dashboard Admin";
    require "include/header.php"; 
    
    if (!isset($_SESSION)) 
    {
        session_start();
    }

?>

            <div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Table Penjualan</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Order</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM transaksi ");
                        $data = mysqli_fetch_assoc($query);
                        if(mysqli_num_rows($query) > 0)
                        {
                            $no = 1;
                            do
                            {
                                ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$data['tgl_transaksi'];?></td>
                                        <td><?=$data['nama_buyer'];?></td>
                                        <td><?=$data['alamat_buyer'];?></td>
                                        <td><a href="detail_order.php?id_transaksi=<?=$data['id_transaksi']?>">Detail</a></td>
                                        <td>$<?=$data['total_transaksi']?></td>
                                    </tr>
                                <?php
                            }while($data = mysqli_fetch_assoc($query));
                        }
                        else
                        {
                            echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
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