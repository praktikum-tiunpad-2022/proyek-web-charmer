<?php 
    require "../config/connect.php"; 
    session_start();
    $id_adm = $_SESSION['id_adm'];

    if(!isset($_SESSION['usn_adm'])) {
        echo "<meta http-equiv='refresh' content='0, url=".BASE_URL."admin/login.php'/>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title." | ".WEBNAME;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<style>
			nav ul li {
				margin-top: 10px;
			}
		</style>
    </head>
    <body>
        <nav>
            <img src="../assets/img/logo.jpg">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="barang.php">Product</a></li>
                <li><a href="kategori.php">Category</a></li>
                <li><a href="penjualan.php">Transaction</a></li>
            </ul>
            <div class="navbar">
                <ul>
                    <li><a href="user.php"><i class="fa fa-user" aria-hidden="true"></i></a> Hi, <?php echo $_SESSION['usn_adm'];?>!</li>
                    <li><a href="logout.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>