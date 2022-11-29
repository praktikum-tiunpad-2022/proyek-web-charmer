<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Barang</title>
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
        <h1>Data Table Barang</h1>
        <a href="/create" role="button" class="btn btn-secondary">Add New Album</a>
        <table class="table table-warning">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Barang as $row) : ?>
                    <tr>
                        <td><?= $row['img_brg']; ?></td>
                        <td><?= $row['nama_brg']; ?></td>
                        <td><?= $row['nama_artis']; ?></td>
                        <td><?= $row['harga_brg']; ?></td>
                        <td><?= $row['stok_brg']; ?></td>
                        <td>
                            <a href="/edit/<?= $row['id_brg']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete/<?= $row['id_brg']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>