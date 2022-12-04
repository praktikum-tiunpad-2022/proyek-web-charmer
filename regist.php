<?php 
    $title = "Sign Up";
    require "config/connect.php"; 
	session_start();
    $error = "";
	
    if(isset($_POST['register'])) {
        $usn = $_POST['usn'];
        $pass = MD5($_POST['pass']);    //password dienkripsi
        $tgl = date("Y-m-d H:i:s");

		$result = mysqli_query($connect, "SELECT * FROM buyer WHERE usn_buyer = '$usn'");
        $row = mysqli_num_rows($result);

        if($row == 1) {
            $error = "Username Already Taken!";
        } else {
			$regist = mysqli_query($connect, "INSERT INTO buyer (usn_buyer, tgl_akun_buyer, pass_buyer) VALUES ('$usn', '$tgl', '$pass')");
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."login.php'>";
		}
    }
?>
<!DOCTYPE html>
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
                    <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><span></span><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
		<section class="login">
			<div class="form-container">
				<form action="#" method="post">
					<h2>Sign Up</h2>
					<input type="text" name="usn" placeholder="Enter Your Username" required=" ">
					<input type="password" name="pass" placeholder="Enter Your Password" required=" ">
					<input type="submit" name="register" value="Sign Up Now!" class="form-btn">
					<p>Already Have an Account? <a class="sign-cta" href="login.php">Sign In Now!</a></p>
				</form>
                <p><?=$error;?></p>
			</div>
		</section>
<?php 
    require "include/footer.php";
?>