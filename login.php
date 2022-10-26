<?php 
    $title = "Sign-In";
    require "includes/header.php";
	session_start();
    
    $error = "";

    if(isset($_POST['login'])) 
    {
        $usn = $_POST['usn'];
        $pass = MD5($_POST['pass']);    //password dienkripsi

		$result = mysqli_query($connect, "SELECT * FROM buyer WHERE usn_buyer = '$usn' && pass_buyer = '$pass'");
        $row = mysqli_num_rows($result);

        if($row == 1)
        {
			$row = mysqli_fetch_assoc($result);
			$id_buyer = $row['id_buyer'];
			$_SESSION['usn'] = $usn;
			$_SESSION['id_buyer'] = $id_buyer;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."product.php'>";
        } else {
            $error = "Failed Sign In. Please double check your username or password!";
		}
    }
?>
        <section class="">
			<h3>Sign In</h3>
			<form>
                <h2>Sign In to your account</h2>
                <form action="#" method="post">
                    <input type="text" name="usn" placeholder="Username" required=" ">
                    <input type="password" name="pass" placeholder="Password" required=" ">
                    <input type="submit" value="Login" name="login">
                </form>
                <p><?=$error;?></p>
            </form>       
        </section>
<?php 
    require "includes/footer.php";
?>