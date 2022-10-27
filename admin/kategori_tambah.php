<?php 
    $title = "Tambah Kategori";
    require "include/header.php";

    if(isset($_POST['insert']))  
    {
        $nama = $_POST['nama'];

        $query = mysqli_query($connect, "INSERT INTO kategori (nama_kategori) value ('$nama')");
        if($query)
        {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";

        }
    }
?>

<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="kategori.php">Kategori</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="kategori_tambah.php">Tambah Kategori</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Table Kategori</div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" required>
                </div>
                <div>
                    <input type="submit" name="insert" value="Tambah" class="btn btn-sm btn-info">
                </div>
            </form>
        </div>

    </div>

</div>
</div>
</div>

</body>

</html>