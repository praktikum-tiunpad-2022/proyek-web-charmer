<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="content">
        <h2 class="product-category">Detail Order</h2>
        <form action="/detail/<?= $Cart['id_transaksi'] ?>" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nama Pesanan</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="assets/img/<?=$Cart['img_brg'];?>" style="width: 250px;"></td>
                        <td><?= $Cart['nama_brg']; ?></td>
                        <td><?= $Cart['harga_brg']; ?></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>    
</section>

<?= $this->endSection('content'); ?>