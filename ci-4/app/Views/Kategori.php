<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Kategori</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
        body{
            width: auto;
            margin: auto;
            background-color: #f08080;
            border-radius: 20px;
            padding: 20px 30px;
        }

        h1{
            text-align: center;
        }
        </style>
    </head>

    <body>
        <h1>Data Table Kategori</h1>
        <a href="/create" role="button" class="btn btn-secondary">Add New Kategori</a>
        <table class="table table-warning">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Kategori as $row) : ?>
                    <tr>
                        <td><?= $row['nama_kategori']; ?></td>
                        <td>
                            <a href="/edit_ktg/<?= $row['id_kategori']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete_ktg/<?= $row['id_kategori']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>

<?= $this->endSection('content'); ?>