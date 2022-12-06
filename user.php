<?php 
    $title = "Checkout";
	require "include/header.php";
    $id_buyer = $_SESSION['id_buyer'];
?>
	<head>
		<style>
			.login .form-container form .username {
				width: 100%; 
				padding:10px 15px;
				font-size: 14px;
				margin:8px 0;
				background: #FFFFFF;
				border-radius: 5px;
				border-width: thin;
				border-color: #212121;
				border-style: solid;
			}
		</style>
	</head>
		<section class="login">
			<div class="form-container">
				<form action="#" method="post">
					<h2>Your Account</h2>
					<p class="username">Username : <?php echo $_SESSION['usn'];?></p>
				</form>
			</div>
		</section>
<?php 
    require "include/footer.php";
?>