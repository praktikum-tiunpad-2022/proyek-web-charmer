<?php 
    $title = "Daftar Kategori";
    require "include/header.php"; 
?>
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="kategori.php">Kategori</a>
                        </li>
                    </ol>
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i> Data Table Kategori
                            <a href="kategori_tambah.php" class="btn btn-sm btn-secondary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            $query = mysqli_query($connect, "SELECT * FROM kategori");
                                            $data = mysqli_fetch_assoc($query);
                                            if(mysqli_num_rows($query) > 0)
                                            {
                                                $no = 1;
                                                do
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?=$no++;?></td>
                                                        <td><?=$data['nama_kategori'];?></td>
                                                        <td>
                                                            <a href="kategori_edit.php?id=<?=$data['id_kategori'];?>"class="btn btn-sm btn-success">Edit<a>  
                                                            <a href="kategori_delete.php?id=<?=$data['id_kategori'];?>"class="btn btn-sm btn-danger">Hapus<a>
                                                        </td>       
                                                    </tr>
                                                    <?php
                                                }
                                                while($data = mysqli_fetch_assoc($query));
                                            }
                                            else
                                            {
                                                echo "<tr><td colspan='3'><center>Belum ada data!</center></td></tr>";
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