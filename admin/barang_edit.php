<?php 
    $title = "Edit Barang";
    require "include/header.php";

    $id = $_GET['id'];

    if(isset($_POST['update']))  
    {
        $nama = $_POST['nama'];
        $artis = $_POST['artis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        if(!empty($_FILES['img']['name'])) {
            $img = $_FILES['img']['name'];
            $file = $_FILES['img']['tmp_name'];

            $path = "../assets/img/";
            move_uploaded_file($file, $path.$img);
            $query = mysqli_query($connect, "UPDATE barang SET nama_brg = '$nama', nama_artis = '$artis', harga_brg = '$harga', 
                                                               stok_brg = '$stok', id_kategori = '$kategori', 
                                                               img_brg = '$img' WHERE id_brg = '$id'");
        } else {
            $query = mysqli_query($connect, "UPDATE barang SET nama_brg = '$nama', nama_artis = '$artis',
                                                               harga_brg = '$harga', stok_brg = '$stok', 
                                                               id_kategori = '$kategori' WHERE id_brg = '$id'");
        }
        
        if($query) {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'>";
        }
    }
    $Qbarang = mysqli_query($connect, "SELECT * FROM barang WHERE id_brg = '$id'");
    $barang = mysqli_fetch_assoc($Qbarang);
?>
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="barang.php">Barang</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="barang_edit.php">Edit Barang</a>
            </li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"> <i class="fas fa-table"></i> Data Table Barang</div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama" value="<?=$barang['nama_brg'];?>" class="form-control" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <label>Nama Artis</label>
                                <input type="text" name="artis" value="<?=$barang['nama_artis'];?>" class="form-control" placeholder="Nama Artis">
                            </div>
                            <div class="form-group">
                                <label>Harga Barang</label>
                                <input type="text" name="harga" value="<?=$barang['harga_brg'];?>" class="form-control" placeholder="Harga Barang">
                            </div>
                            <div class="form-group">
                                <label>Stok Barang</label>
                                <input type="text" name="stok" value="<?=$barang['stok_brg'];?>" class="form-control" placeholder="Stok Barang">
                            </div>
                            <div class="form-group">
                                <label>Image Barang</label>
                                <input type="file" name="img" lass="form-control" placeholder="Image Barang">
                            <img src="<?=BASE_URL;?>assets/img/<?=$barang['img_brg'];?>" style="width: 100px;">
                            </div>
                            <div class="form-group">
                                <label>Kategori Barang</label>
                                <select name="kategori" class="form-control">
                                <option>--Pilih Kategori</option>
                                <?php
                                    $Qkategori = mysqli_query($connect, "SELECT * FROM kategori");
                                    $kategori = mysqli_fetch_assoc($Qkategori);
                                    do {
                                        $select = "";
                                        if($barang['id_kategori'] == $kategori['id_kategori']) {
                                            $select = "selected";
                                        }       
                                ?>
                                        <option value="<?=$kategori['id_kategori'];?>"<?=$select;?>><?=$kategori['nama_kategori'];?></option>
                                <?php
                                    } while($kategori = mysqli_fetch_assoc($Qkategori));
                                ?>
                            </div>
                            <div>
                                <input type="submit" name="update" value="Edit" class="btn btn-sm btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>