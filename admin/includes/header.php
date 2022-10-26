<?php 
    require "head.php"; 
    if(!$_SESSION['admin'])
    {
        echo "<meta http-equiv='refresh' content='0, url=".BASE_URL."login.php'/>";
    }
?>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">K-Pop Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="barang.php">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penjualan.php">Penjualan</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-danger" href="login.php">Logout</a>
        </div>
    </nav>