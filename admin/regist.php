<?php 
    $title = "Sign Up Admin";
    require "../config/connect.php"; 
    session_start();
    $error = "";
    
    if(isset($_POST['register'])) {
        $usn_adm = $_POST['usn_adm'];
        $pass = MD5($_POST['pass']);    // password dienkripsi
        $tgl = date("Y-m-d H:i:s");

        $query = mysqli_query($connect, "SELECT * FROM admin WHERE usn_adm = '$usn_adm'");
        $row = mysqli_num_rows($query);

        if($row == 1) {
            $error = "Username Already Taken!";
        } else {
			$regist = mysqli_query($connect, "INSERT INTO admin (usn_adm, tgl_akun_admin, pass_adm) VALUES ('$usn_adm', '$tgl', '$pass')");
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/login.php'>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title." | ".WEBNAME;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            body, .login .form-container {
                background-color: #E6A4B4;
            }
        </style>
    </head>
    <body>
        <section class="login">
			<div class="form-container">
				<form action="#" method="post">
					<h2>Sign Up</h2>
					<input type="text" name="usn_adm" placeholder="Enter Your Username" required=" ">
					<input type="password" name="pass" placeholder="Enter Your Password" required=" ">
					<input type="submit" name="register" value="Sign Up Now!" class="form-btn">
					<p>Already Have an Account? <a class="sign-cta" href="login.php">Sign In Now!</a></p>
				</form>
                <p><?=$error;?></p>
			</div>
		</section>
    </body>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/index.js"></script>
</html>