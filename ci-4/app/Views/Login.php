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
    <title>Login</title>
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
            <form action="/" method="post">
                <h2>Sign In</h2>
				<input type="text" name="email" placeholder="Enter Your Email" value="<?= set_value('email') ?>" required=" ">
				<input type="password" name="password" placeholder="Enter Your Password" value="" required=" ">
				<?php if(isset($validation)) : ?>
                    <?= $validation->listErrors() ?>
                <?php endif; ?>
                <input type="submit" name="login" value="Sign In Now!" class="form-btn">
				<p>Don't Have an Account? <a class="sign-cta" href="register"><u>Sign Up Now!</u></a></p>
            </form>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>