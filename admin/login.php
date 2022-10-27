<?php 
    session_start();
    require "../config/connect.php"; 

    $title = "Login Admin";
    $error = "";
    if(isset($_POST['login'])) 
    {
        $usn = $_POST['usn'];
        $pass = MD5($_POST['pass']);    //password dienkripsi

        $query = mysqli_query($connect, "SELECT * FROM admin WHERE usn_adm = '$usn' AND pass_adm = '$pass'");
        $row = mysqli_num_rows($query);

        if($row > 0)    //berhasil
        {
            $_SESSION['admin'] = true;
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'>";
        }
        else    //gagal
        {
            $error = "Login Gagal!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?=$title." | ".WEBNAME;?></title>
    </head>
<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="inputEmail">Username</label>
                            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="usn" required="required" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                        </div>
                    </div>
                    <div style="margin-top: 20px;">
                        <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
                    </div>
                </form>
                <p><?=$error;?></p>
                <!-- <div class="text-center">
                    <a class="d-block small mt-3" href="register.php">Register an Account</a>
                    <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>