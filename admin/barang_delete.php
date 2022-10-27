<?php
    require "include/header.php";

    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM barang WHERE id_brg = '$id'");

    if($query) {
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'>";
    }
?>