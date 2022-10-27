<?php 
    $title = "Edit Kategori";
    require "include/header.php";

    $id = $_GET['id'];

    if(isset($_POST['update']))  
    {
        $nama = $_POST['nama'];

        $query = mysqli_query($connect, "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'");
        if($query)
        {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";
        }
    }
    $query = mysqli_query($connect, "SELECT nama_kategori FROM kategori WHERE id_kategori = '$id'");
    $data = mysqli_fetch_assoc($query);

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
            <a href="kategori_edit.php">Edit Kategori</a>
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Table Kategori</div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" value="<?=$data['nama_kategori'];?>" class="form-control" placeholder="Nama Kategori" required>
                </div>
                <div>
                    <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
                </div>
            </form>
        </div>

    </div>

</div>
</div>
</div>

</body>

</html>