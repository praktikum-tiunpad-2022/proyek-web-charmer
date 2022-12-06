<?php 
    require "config/connect.php"; 
	session_start();
    $id_buyer = $_SESSION['id_buyer'];
    $idbuyer = $_SESSION['id_buyer'];

    if(!isset($_SESSION['usn'])) {
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."login.php'>";
    }
?>
<html lang="en">
    <head>
        <title><?=$title." | ".WEBNAME;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <nav>
            <img src="assets/img/logo.jpg">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="celeb.php">Celeb</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="event.php">Event</a></li>
            </ul>
            <div class="navbar">
                <ul>
                    <li><a href="user.php"><i class="fa fa-user" aria-hidden="true"></i> </a>  Hi, <?php echo $_SESSION['usn'];?>!</li>
                    <?php
                        $select_rows = mysqli_query($connect, "SELECT * FROM cart WHERE status = '1' AND id_buyer = '$idbuyer'") or die("query failed");
                        $row_count = mysqli_num_rows($select_rows);
                    ?>
                    <li style="margin-top: 10px;"><a href="cart.php"><span><?php echo $row_count;?>  </span><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    <li style="margin-top: 10px;"><a href="logout.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>