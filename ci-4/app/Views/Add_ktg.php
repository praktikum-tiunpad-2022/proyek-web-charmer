<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Kategori</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            body {
                background-color: #f08080;
                color: black;
            }

            form {
                width: 700px;
                margin: auto;
                background-color: #ffdab9;
                border-radius: 20px;
                padding: 20px 30px;
            }

            h1{
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1>Insert Data</h1>
        <form action="/kategori" method="post">
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </body>
</html>

<?= $this->endSection('content'); ?>