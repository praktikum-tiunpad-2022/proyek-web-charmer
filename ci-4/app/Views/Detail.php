<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Transaksi</title>
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
        <h1>Data Table Transaksi</h1>
        <form action="/detail/<?= $Cart['id_transaksi'] ?>" method="post">
            <table class="table table-warning">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nama Pesanan</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Detail as $row) : ?>
                        <tr>
                            <td><?= $row['img_brg']; ?></td>
                            <td><?= $row['nama_brg']; ?></td>
                            <td><?= $row['harga_brg']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </body>
</html>

<?= $this->endSection('content'); ?>