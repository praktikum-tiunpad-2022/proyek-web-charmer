<?php 
    $title = "Sign In Admin";
    require "../config/connect.php"; 
    session_start();
    $error = "";

    if(isset($_POST['login'])) {
        $usn_adm = $_POST['usn_adm'];
        $pass = MD5($_POST['pass']);    // password dienkripsi

        $result = mysqli_query($connect, "SELECT * FROM admin WHERE usn_adm = '$usn_adm' && pass_adm = '$pass'");
        $row = mysqli_num_rows($result);

        if($row == 1) {
			$row = mysqli_fetch_assoc($result);
			$id_adm = $row['id_adm'];
			$_SESSION['usn_adm'] = $usn_adm;
			$_SESSION['id_adm'] = $id_adm;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'>";
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
					<h2>Sign In</h2>
					<input type="text" name="usn_adm" placeholder="Enter Your Username" required=" ">
					<input type="password" name="pass" placeholder="Enter Your Password" required=" ">
					<input type="submit" name="login" value="Sign In Now!" class="form-btn">
                    <p><?=$error;?></p>
					<p>Don't Have an Account? <a class="sign-cta" href="regist.php"><u>Sign Up Now!</u></a></p>
					<p>Sign In as Buyer? <a class="sign-cta" href="../login.php"><u>Sign In Here!</u></a></p>
				</form>
			</div>
		</section>
    </body>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>