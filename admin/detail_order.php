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

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="assets/js/sb-admin.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>