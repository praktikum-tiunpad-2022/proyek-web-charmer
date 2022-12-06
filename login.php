<?php 
    $title = "Sign In";
    require "config/connect.php"; 
	session_start();
    $error = "";

    if(isset($_POST['login'])) {
        $usn = $_POST['usn'];
        $pass = MD5($_POST['pass']);    // password dienkripsi

		$result = mysqli_query($connect, "SELECT * FROM buyer WHERE usn_buyer = '$usn' && pass_buyer = '$pass'");
        $row = mysqli_num_rows($result);

        if($row == 1) {
			$row = mysqli_fetch_assoc($result);
			$id_buyer = $row['id_buyer'];
			$_SESSION['usn'] = $usn;
			$_SESSION['id_buyer'] = $id_buyer;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'>";
        } else {
            $error = "Failed Sign In. Please double check your username or password!";
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
                    <li><a href="logout.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
		<section class="login">
			<div class="form-container">
				<form action="#" method="post">
					<h2>Sign In</h2>
					<input type="text" name="usn" placeholder="Enter Your Username" required=" ">
					<input type="password" name="pass" placeholder="Enter Your Password" required=" ">
					<input type="submit" name="login" value="Sign In Now!" class="form-btn">
					<p><?=$error;?></p>
					<p>Don't Have an Account? <a class="sign-cta" href="regist.php"><u>Sign Up Now!</u></a></p>
					<p>Sign In as Admin? <a class="sign-cta" href="admin/login.php"><u>Sign In Here!</u></a></p>
				</form>
			</div>
		</section>
<?php 
    require "include/footer.php";
?>