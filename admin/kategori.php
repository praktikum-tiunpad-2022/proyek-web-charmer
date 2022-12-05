<?php 
    $title = "Daftar Kategori";
    require "includes/header.php"; 
?>
        <section class="dashboard">
            <div class="content">
                <h2 class="product-category">Category  <a class="btn-cart" href="kategori_tambah.php">Add<i class="fa fa-plus"></i></a></h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($connect, "SELECT * FROM kategori");
                            $data = mysqli_fetch_assoc($query);
                            if(mysqli_num_rows($query) > 0) {
                                $no = 1;
                                do {
                        ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$data['nama_kategori'];?></td>
                                        <td>
                                            <a href="kategori_edit.php?id=<?=$data['id_kategori'];?>"class="btn btn-sm btn-success">Edit<a>  
                                            <a href="kategori_delete.php?id=<?=$data['id_kategori'];?>"class="btn btn-sm btn-danger">Delete<a>
                                        </td>       
                                    </tr>
                        <?php
                                } while($data = mysqli_fetch_assoc($query));
                            } else {
                                echo "<tr><td colspan='3'><center>Belum ada data!</center></td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
<?php 
    require "includes/footer.php";
?>