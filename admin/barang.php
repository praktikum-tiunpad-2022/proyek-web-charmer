<?php 
    $title = "Daftar Barang";
    require "include/header.php"; 
?>
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="barang.php">Barang</a>
                        </li>
                    </ol>

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i> Data Table Barang
                            <a href="barang_tambah.php" class="btn btn-sm btn-secondary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Artist</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            $query = mysqli_query($connect, "SELECT * FROM barang ");
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
                                                        <td><?=$data['nama_artis'];?></td>
                                                        <td>$<?=$data['harga_brg'];?></td>
                                                        <td><?=$data['stok_brg'];?></td>
                                                        <td>
                                                            <a href="barang_edit.php?id=<?=$data['id_brg'];?>"class="btn btn-sm btn-success">Edit<a>  
                                                            <a href="barang_delete.php?id=<?=$data['id_brg'];?>"class="btn btn-sm btn-danger">Hapus<a>
                                                        </td>       
                                                    </tr>
                                                    <?php
                                                }
                                                while($data = mysqli_fetch_assoc($query));
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
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
        <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/js/sb-admin.min.js"></script>
        <script src="assets/js/demo/datatables-demo.js"></script>
    </body>
</html>