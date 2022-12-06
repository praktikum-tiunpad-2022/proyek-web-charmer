<?php 
    $title = "Edit Product";
    require "includes/header.php";

    $id = $_GET['id'];
    if(isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $artis = $_POST['artis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        if(!empty($_FILES['img_brg']['name'])) {
            $img_brg = $_FILES['img_brg']['name'];
            $file = $_FILES['img_brg']['tmp_name'];

            $path = "../assets/img/";
            move_uploaded_file($file, $path.$img_brg);
            $query = mysqli_query($connect, "UPDATE barang SET nama_brg = '$nama', nama_artis = '$artis',  
                                                               stok_brg = '$stok', id_kategori = '$kategori', 
                                                               harga_brg = '$harga', img_brg = '$img_brg' WHERE id_brg = '$id'");
        } else {
            $query = mysqli_query($connect, "UPDATE barang SET nama_brg = '$nama', harga_brg = '$harga', 
                                                               stok_brg = '$stok', id_kategori = '$kategori', 
                                                               nama_artis = '$artis' WHERE id_brg = '$id'");
        }
            if($query) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'>";
            }
    }
    $Qbarang = mysqli_query($connect, "SELECT * FROM barang WHERE id_brg = '$id'");
    $barang = mysqli_fetch_assoc($Qbarang);
?>
        <section class="login">
            <div class="form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <h2>Edit Product</h2>
                    <input type="text" name="nama" value="<?=$barang['nama_brg'];?>" placeholder="Product Name">
                    <input type="text" name="artis" value="<?=$barang['nama_artis'];?>" placeholder="Artist Name">
                    <input type="text" name="harga" value="<?=$barang['harga_brg'];?>" placeholder="Product Price">
                    <input type="text" name="stok" value="<?=$barang['stok_brg'];?>" placeholder="Product Stock">
                    <input type="file" name="img_brg" placeholder="Product Image">
                    <img src="<?=BASE_URL;?>assets/img/<?=$barang['img_brg'];?>" style="width: 350px; padding-bottom: 10px;">
                    <div>
                        <select type="select" name="kategori" required>
                        <option>-- Choose Product Category</option>
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
                    <input type="submit" name="update" value="Edit Product" class="form-btn">
                </form>
            </div>
        </section>
<?php 
    require "includes/footer.php";
?>