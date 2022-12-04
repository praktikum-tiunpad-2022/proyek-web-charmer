<?php 
    $title = "Add Product";
    require "includes/header.php";

    if(isset($_POST['insert'])) {
        $nama = $_POST['nama'];
        $artis = $_POST['artis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $img_brg = $_FILES['img_brg']['name'];
        $file = $_FILES['img_brg']['tmp_name'];
        $kategori = $_POST['kategori'];
        $path = "../assets/img/";

        if(move_uploaded_file($file, $path.$img_brg)) {
            $query = mysqli_query($connect, "INSERT INTO barang (nama_brg, nama_artis, harga_brg, stok_brg, id_kategori, img_brg) 
                                                          values ('$nama', '$artis', '$harga', '$stok', '$kategori', '$img_brg')");
            if($query) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'>";
            }
        }
    }
?>
<section class="login">
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Add Product</h2>
            <input type="text" name="nama" placeholder="Product Name" required=" ">
            <input type="text" name="artis" placeholder="Artist Name" required=" ">
            <input type="text" name="harga" placeholder="Product Price" required=" ">
            <input type="text" name="stok" placeholder="Product Stock" required=" ">
            <input type="file" name="img_brg" placeholder="Product Image" required=" ">
            <div>
                <select type="select" name="kategori" required>
                <option>-- Choose Product Category</option>
                <?php
                    $Qkategori = mysqli_query($connect, "SELECT * FROM kategori");
                    $kategori = mysqli_fetch_assoc($Qkategori);
                    do {
                ?>
                        <option value="<?=$kategori['id_kategori'];?>"><?=$kategori['nama_kategori'];?></option>
                <?php
                    } while($kategori = mysqli_fetch_assoc($Qkategori));
                ?>
            </div>
            <input type="submit" name="insert" value="Add Product" class="form-btn">
        </form>
    </div>
</section>
<?php 
    require "includes/footer.php";
?>