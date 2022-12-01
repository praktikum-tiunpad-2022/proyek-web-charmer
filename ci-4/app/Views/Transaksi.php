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
        <table class="table table-warning">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Total</th>
                    <th scope="col">Date</th>
                    <th scope="col">No. Rekening</th>
                    <th scope="col">Nama Rekening</th>
                    <th scope="col">Bank</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Transaksi as $row) : ?>
                    <tr>
                        <td><?= $row['nama_buyer']; ?></td>
                        <td><?= $row['alamat_buyer']; ?></td>
                        <td><?= $row['telp_buyer']; ?></td>
                        <td><?= $row['total_transaksi']; ?></td>
                        <td><?= $row['tgl_transaksi']; ?></td>
                        <td><?= $row['norek_buyer']; ?></td>
                        <td><?= $row['namarek_buyer']; ?></td>
                        <td><?= $row['bank_buyer']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>

<?= $this->endSection('content'); ?>