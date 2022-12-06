<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body, .login .form-container {
            background-color: #E6A4B4;
        }
    </style>
</head>
<body>
    <?php if(session()->get('success')) : ?>
        <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
    <?php endif; ?>
    <section class="login">
		<div class="form-container">
            <form action="register" method="post">
            <h2>Sign Up</h2>
                <input type="text" name="nama_adm" placeholder="Enter Your Name" value="<?= set_value('nama_adm') ?>" required>
				<input type="text" name="email" placeholder="Enter Your Email" value="<?= set_value('email') ?>" required>
				<input type="password" name="password" placeholder="Enter Your Password" value="" required>
                <input type="password" name="password_confirm" placeholder="Confirm Your Password" value="" required>
				<?php if(isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <input type="submit" name="register" value="Sign Up Now!" class="form-btn">
				<p>Already Have an Account? <a class="sign-cta" href="/admin">Sign In Now!</a></p>
            </form>
        </div>
    </section>
</body>
</html>