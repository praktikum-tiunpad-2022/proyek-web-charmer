<?php 
    $title = "Edit Kategori";
    require "includes/header.php";

    $id = $_GET['id'];
    if(isset($_POST['update'])) {
        $nama = $_POST['nama'];

        $query = mysqli_query($connect, "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'");
        if($query) {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";
        }
    }
    $query = mysqli_query($connect, "SELECT nama_kategori FROM kategori WHERE id_kategori = '$id'");
    $data = mysqli_fetch_assoc($query);
?>
        <section class="login">
            <div class="form-container">
                <form action="" method="post">
                    <h2>Add Category</h2>
                    <input type="text" name="nama" value="<?=$data['nama_kategori'];?>" placeholder="Category Name" required=" ">
                    <input type="submit" name="update" value="Edit Category" class="form-btn">
                </form>
            </div>
        </section>
<?php 
    require "includes/footer.php";
?>