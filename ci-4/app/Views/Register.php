<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        * {
            font-family:"Poppins", sans-serif;
        }

        body {
            background-color: #f08080;
            color: black;
        }

        form {
            width: 700px;
            margin: auto;
            background-color:#ffdab9;
            border-radius: 20px;
            padding: 20px 30px;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <?php if(session()->get('success')) : ?>
        <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
    <?php endif; ?>
    <hr>
    <form action="/register" method="post">
        <div class="mb-3">
            <label for="id_adm" class="form-label">ID Admin</label>
            <input type="text" name="usn_adm" id="id_adm" class="form-control" value="<?= set_value('id_adm') ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama_adm" class="form-label">Nama Admin</label>
            <input type="text" name="nama_adm" id="nama_adm" class="form-control" value="<?= set_value('nama_adm') ?>" required>
        </div>
        <div class="mb-3">
            <label for="usn_adm" class="form-label">Username</label>
            <input type="text" name="usn_adm" id="usn_adm" class="form-control" value="<?= set_value('usn_adm') ?>" required>
        </div>
        <div class="mb-3">
            <label for="pass_adm" class="form-label">Password</label>
            <input type="password" name="pass_adm" id="pass_adm" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" value="" required>
        </div>
        <?php if(isset($validation)) : ?>
            <?= $validation->listErrors() ?>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Register</button>
        <p>
            Already have an acoount? <a href="/" class="btn btn-outline-info">Click here</a> to login
        </p>
    </form>
</body>
</html>