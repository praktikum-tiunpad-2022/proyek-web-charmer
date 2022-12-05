<?php 
    $title = "Add Category";
    require "includes/header.php";

    if(isset($_POST['insert'])) {
        $nama = $_POST['nama'];

        $query = mysqli_query($connect, "INSERT INTO kategori (nama_kategori) value ('$nama')");
        if($query) {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";
        }
    }
?>
        <section class="login">
            <div class="form-container">
                <form action="" method="post">
                    <h2>Add Category</h2>
                    <input type="text" name="nama" placeholder="Category Name" required=" ">
                    <input type="submit" name="insert" value="Add Category" class="form-btn">
                </form>
            </div>
        </section>
<?php 
    require "includes/footer.php";
?>
