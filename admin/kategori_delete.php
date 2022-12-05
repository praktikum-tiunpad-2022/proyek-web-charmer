<?php
    require "includes/header.php";

    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = '$id'");
    if($query) {
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";
    }
?>