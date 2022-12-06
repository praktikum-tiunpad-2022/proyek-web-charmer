<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="content">
        <h2 class="product-category">Transaction</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Name on Card</th>
                    <th>Card Number</th>
                    <th>Bank</th>
                    <th>Order</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Transaksi as $row) : ?>
                    <tr>
                        <td><?= $row['tgl_transaksi']; ?></td>
                        <td><?= $row['nama_buyer']; ?></td>
                        <td><?= $row['alamat_buyer']; ?></td>
                        <td><?= $row['telp_buyer']; ?></td>
                        <td><?= $row['namarek_buyer']; ?></td>
                        <td><?= $row['norek_buyer']; ?></td>
                        <td><?= $row['bank_buyer']; ?></td>
                        <td>
                            <a href="/detail/<?= $row['id_transaksi']; ?>" class="sign_cta">Detail</a>
                        </td>
                        <td>$<?= $row['total_transaksi']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection('content'); ?>